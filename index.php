 <?php
    include("connection.php");
 ?>
 
 <!DOCTYPE html>
 <html lang="en">
 <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatable" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        
        <div id="form">
            <h1>Login To Calorie Tracker</h1>
            <form name="loginform" action="login.php" onsubmit="return isvalidlogin()" method="POST">
                <label>Username: </label>
                <input type="text" id="loginuser" name="loginuser"></br></br>
                <label>Password: </label>
                <input type="password" id="loginpass" name="loginpass"></br></br>
                <input type="submit" id="btn" value="Login" name = "loginsubmit"/>
            </form>
        </div>
        <div id="form">
            <h1>No Account Yet? No Problem!</h1>
            <form name="signupform" action="signup.php" onsubmit="return isvalidsignup()" method="POST">
                <label>Username/Name: </label>
                <input type="text" id="signupuser" name="signupuser"></br></br>
                <label>Password: </label>
                <input type="password" id="signuppass" name="signuppass"></br></br>
                <label>Phone#: </label>
                <input type="text" id="signuphone" name="signupphone"></br></br>
                <label>Email: </label>
                <input type="text" id="signupemail" name="signupemail"></br></br>
                <input type="submit" id="btn" value="Sign Up" name = "signupsubmit"/>
            </form>
        </div>

        <script>
            function isvalidlogin(){
                var user = document.loginform.loginuser.value;
                var pass = document.loginform.loginpass.value;
                if(user.length == "" && pass.length == ""){
                    alert("Username and password field is empty!");
                    return false;
                }
                else if(user.length == ""){
                    alert("Username is empty!");
                    return false;
                }
                else if(pass.length == ""){
                    alert("password field is empty!");
                    return false;
                }
                else{
                    return true;
                }
            }            
        </script>
        <script>
            function isvalidsignup(){
                var user = document.signupform.signupuser.value;
                var pass = document.signupform.signuppass.value;
                var phone = document.signupform.signupphone.value;
                var email = document.signupform.signupemail.value;

                if(user.length == ""){
                    alert("Username is empty!");
                    return false;
                }
                else if(pass.length == ""){
                    alert("password field is empty!");
                    return false;
                }
                else if(phone.length == ""){
                    alert("phone field is empty!");
                    return false;
                }
                else if(email.length == ""){
                    alert("email field is empty!");
                    return false;
                }
                else{
                    return true;
                }
            }
            </script>
</body>
</html>