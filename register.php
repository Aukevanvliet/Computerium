<link rel="icon" type="image/png" href="dummy/logo1.png">
<?php
// Include config file
include "config.php";
 
// Define variables and initialize with empty values
$Wachtwoord = $confirm_Wachtwoord = "";
$Wachtwoord_err = $confirm_Wachtwoord_err = "";

$link = mysqli_connect($server, $Gebruikersnaam, $Wachtwoord, $webwinkel);
 
// Processing form data when form is submitted
if($link["REQUEST_METHOD"] == "POST"){
 
    if(empty($_POST["Gebruikersnaam"])){
        $Gebruikersnaam_err = "Please enter a username.";
    } elseif(!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["Gebruikersnaam"]))){
        $Gebruikersnaam_err = "Username can only contain letters, numbers, and underscores.";
    } else{
        // Prepare a select statement
        $sql = "SELECT IDklant FROM klantgegevens WHERE Gebruikersnaam = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["Gebruikersnaam"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $Gebruikersnaam_err = "This username is already taken.";
                } else{
                    $Gebruikersnaam = trim($_POST["Gebruikersnaam"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again dipshit.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Validate password
    if(empty($_POST["Wachtwoord"])){
        $Wachtwoord_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["Wachtwoord"])) < 4){
        $Wachtwoord_err = "Password must have atleast 4 characters.";
    } else{
        $Wachtwoord = trim($_POST["Wachtwoord"]);
    }
    
   
    if(empty($_POST["confirm_Wachtwoord"])){
        $confirm_Wachtwoord_err = "Please confirm password.";     
    } else{
        $confirm_Wachtwoord = trim($_POST["confirm_Wachtwoord"]);
        if(empty($Wachtwoord_err) && ($Wachtwoord != $confirm_Wachtwoord)){
            $confirm_Wachtwoord_err = "Password did not match.";
        }
    }
    
    
    if(empty($Gebruikersnaam_err) && empty($Wachtwoord_err) && empty($confirm_Wachtwoord_err)){
        
       
        $sql = "INSERT INTO users (Gebruikersnaam, Wachtwoord) VALUES (?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            
            mysqli_stmt_bind_param($stmt, "ss", $param_Gebruikersnaam, $param_Wachtwoord);
            
          
            $param_Gebruikersnaam = $Gebruikersnaam;
            $param_Wachtwoord = password_hash($Wachtwoord, Wachtwoord_DEFAULT); // Creates a password hash
            
            
            if(mysqli_stmt_execute($stmt)){
                
                header("location: about.php");
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($link);
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; }
        .wrapper{ width: 360px; padding: 20px; }
    </style>
</head>
<body>
    <div class="wrapper">
        <h2>Sign Up</h2>
        <p>Please fill this form to create an account.</p>
        <form action="<?php echo htmlspecialchars($_Server["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control <?php echo (!empty($Gebruikersnaam_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $Gebruikersnaam; ?>">
                <span class="invalid-feedback"><?php echo $Gebruikersnaam_err; ?></span>
            </div>    
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control <?php echo (!empty($Wachtwoord_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $Wachtwoord; ?>">
                <span class="invalid-feedback"><?php echo $Wachtwoord_err; ?></span>
            </div>
            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $confirm_password; ?>">
                <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
                <input type="reset" class="btn btn-secondary ml-2" value="Reset">
            </div>
            <p>Already have an account? <a href="register.php">Login here</a>.</p>
        </form>
    </div>    
</body>
</html>