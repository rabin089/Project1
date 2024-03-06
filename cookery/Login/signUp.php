<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="signUp.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://kit.fontawesome.com/9a51e81c68.js" crossorigin="anonymous"></script>
</head>
<body>
        <div class="container">
            <div class="signup-form">
                <h2 id="title">Sign Up</h2>
                 <form method="post" action="signupControl.php">
                    <div class="input-group">
                        <div class="input-field" id="nameField">
                            <i class="fa-solid fa-user"></i>
                            <input type="text" id="username" name="username" placeholder="Name" required>
                        </div>
                        <div class="input-field">
                            <i class="fa-solid fa-envelope"></i>
                            <input type="email" name="email" id="email" placeholder="Email" required>
                        </div>
                        <div class="input-field">
                            <i class="fa-solid fa-lock"></i>
                            <input type="text" id="number" name="number" placeholder="Mobile number" required>
                        </div>
                        <div class="input-field">
                            <i class="fa-solid fa-lock"></i>
                            <input type="password" id="password" name="password" placeholder="password" required>
                        </div>
                        <p>Already have an account <a href="loginForm.php" >login</a></p>
                    </div> 
                    <div class="btn-field">
                        <button type="submit">signup</button>
                    </div>
                </form>
            </div>
        </div>
       
</body>
</html>