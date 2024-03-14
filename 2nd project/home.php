<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
  <title> Welcome To My Web Site </title>
  <style>
    body html {
      font-size: 20px;
    }

    nav ul {
      padding: 10px;
      margin: 10px;
      display: flex;
      float: right;
      position: absolute;
      left: 1400px;
      top: 30px;
      background-color: rgb(101, 97, 97);
      border-radius: 7px;

    }

    a:link {
      color: rgb(249, 180, 45);
    }

    a:visited {
      color: rgb(255, 76, 48);
    }

    a {
      text-decoration: none;
      background-color: rgb(101, 97, 97);
    }

    nav li {
      list-style: none;
      background-color: rgb(101, 97, 97);
    }


    .menu {
      display: none;
    }

    .menu-icon {
      display: block;
      position: absolute;
      left: 1460px;
      top: 10px;
      cursor: pointer;
    }

    #menu-toggle:checked~.menu {
      display: flex;
      flex-direction: column;
    }

    #menu-toggle:checked~.menu li {
      margin-bottom: 12px;

    }

    * {
      background-color: rgb(186, 228, 229);
    }

    h2 {
      text-align: center;
      margin-top: 10px;
      font-family: Arial, Helvetica, sans-serif;
    }


    .login-signup-container {
      text-align: center;
      margin-top: 50px;
    }

    .login-signup-form {
      display: none;
      border: 2px solid #ccc;
      padding: 20px;
      border-radius: 5px;
    }

    .login-signup-form.active {
      display: inline-block;
    }

    .login-signup-form label,
    .login-signup-form input {
      display: block;
      margin-bottom: 10px;
    }

    .login-signup-form input[type="submit"] {
      background-color: #4CAF50;
      color: #fff;
      padding: 10px 15px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    .btn-show-login,
    .btn-show-signup {
      background-color: #d2de23;
      color: #fff;
      padding: 5px 10px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
  </style>
</head>

<body>
  <h2> Welcome to my website</h2>
  <button type="button" class="btn-show-login">Login</button>
  <button type="button" class="btn-show-signup">Sign up</button>
  <nav>
    <div class="logo"></div>
    <input type="checkbox" hidden id="menu-toggle">
    <label for="menu-toggle" class="menu-icon">&#9776;</label>
    <ul class="menu">
      <li><a href="menu.php"> Home</a></li>
      <li><a href="about.php"> About</a></li>
      <li><a href="services.php"> Services</a></li>
      <li><a href="contact.php"> Contact</a></li>

    </ul>
  </nav>




  <div class="login-signup-container">
    <div class="login-signup-form login-form">
      <h3>Login</h3>
      <form action="home.php" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <input type="submit" name="login" value="login">
      </form>
    </div>

    <div class="login-signup-form signup-form">
      <h3>Sign Up</h3>
      <form action="home.php" method="post">
        <label for="newUsername">Username:</label>
        <input type="text" id="newUsername" name="newUsername" required>

        <label for="newPassword">Password:</label>
        <input type="password" id="newPassword" name="newPassword" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <input type="submit" name="signup" value="signup">
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
