<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="LoginRegister.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Student Login</title>
</head>
<body>
   <nav class="navbar">
    
        <ul>
            
            <a href="#" style="border: 0px;"><img src="logo.png"></a>
        
        
            <a href="#" style="margin-left: 65%;">Home</a>
            <a href="#">Event</a>
           <a href="#">About</a>
            <a href="#">Contact us</a>
        </ul>
    
   </nav>
    <div class="wrapper">
        <form action="/StudentLogin.js" name="studentLogin" id="studentLogin" onsubmit="return validateForm()" method="post">
            <h1>Student Login</h1>
            <div class="input-box">
                <input type="text" name="username" placeholder="Enter Username" required>
                <i class='bx bxs-user'></i><span class="formError"></span>
            </div>
            <div class="input-box">
                <input type="password" name="password" placeholder="Enter Password" required>
                <i class='bx bxs-lock-alt'></i><span class="formError"></span>
            </div>
            <div class="remember-forget">
                <label>
                    <input type="checkbox">Remember Me
                </label>
                <a href="#">Forget Password</a>
            </div>
            <button type="submit" class="btn">Login</button><br>
            <div class="registre-link">
                <p>Don't have an account?
                    <a href="#">Register</a>
                </p> 
            </div>
        </form>
    </div>
    <script src="StudentLogin.js"></script>
</body>
</html>