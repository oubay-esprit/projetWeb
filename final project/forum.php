<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <h2>Welcome to the forum </h2>
<form action="userinformation.php" method="post">
        <label for="user">Name: </label>
        <input type="text" id="user" name="user" placeholder="Write your name here" autofocus required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="Write your email here" required>

        <label for="subject">Subject:</label>
        <input type="text" id="subject" name="subject" placeholder="Write your subject here" required>

        <label for="message">Message:</label>
        <textarea id="message" name="message" rows="4" placeholder="Write your message here"></textarea>
        <div class="btnn">
        <input type="submit" class="btn" value="Submit">
        </div>
    </form>

    <form action="logout.php" method="post">
    <div class="btnn">
            <input type="submit" class="btn" value="Logout"> 
    </div>
    </form>
</body>
</html>