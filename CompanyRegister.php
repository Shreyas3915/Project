<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="LoginRegister.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Company Registration</title>
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
        <form action="">
            <h1>Company Registration</h1>
            <div class="input-box">
                <input type="text" placeholder="Enter Company Id" required>
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input type="email" placeholder="Enter Email" required>
                <i class='bx bxs-envelope'></i>
            </div>
            <div class="input-box">
                <input type="password" placeholder="Enter Password" required>
                <i class='bx bxs-lock-alt'></i>
            </div>
            <div class="input-box">
                <input type="password" placeholder="Confirm Password" required>
                <i class='bx bxs-lock-alt'></i>
            </div>
            <div class="remember-forget">
                <label>
                    <input type="checkbox">Remember Me
                </label>
            </div>
            <button type="submit" class="btn">Register</button>
        </form>
    </div>
</body>
</html>