<?php
//session_start(); // Start the PHP session

// Check if the user is logged in
//$loggedIn = isset($_SESSION['username']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dynamic Website</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
<h2> Welcome to my website</h2> 
<h4>to access to our forum please login </h4>

    <nav>

        <ul class="menu">
            <li><a href="menu.php"> Home</a></li>
            <li><a href="about.php"> About</a></li>
            <li><a href="services.php"> Services</a></li>
            <li><a href="contact.php"> Contact</a></li>

        </ul>
    </nav>


    <?php //if ($loggedIn) : ?>
   
            
    <?php //else : ?>
<button type="button" class="btn-show-login">Login</button>
<button type="button" class="btn-show-signup">Sign up</button>
<?php //endif; ?>
    <div class="login-signup-container">
    <div class="login-signup-form login-form">
      <h3>Login</h3>
      <form action="login.php" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <input type="submit" name="login" value="Login">
      </form>
    </div>

    <div class="login-signup-form signup-form">
      <h3>Sign Up</h3>
      <form action="register.php" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>

        <label for="email">Email:</label>
        <input type="email" id="emaill" name="email" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <input type="submit" name="signup" value="Register">
      </form>
    </div>
  </div>
 
  <script>
    const loginForm = document.querySelector(".login-form");
    const signupForm = document.querySelector(".signup-form");
    const showLoginFormBtn = document.querySelector(".btn-show-login");
    const showSignupFormBtn = document.querySelector(".btn-show-signup");

    showLoginFormBtn.addEventListener("click", () => {
      loginForm.classList.add("active");
      signupForm.classList.remove("active");
    });

    showSignupFormBtn.addEventListener("click", () => {
      signupForm.classList.add("active");
      loginForm.classList.remove("active");
    });
  </script>

</body>

</html>