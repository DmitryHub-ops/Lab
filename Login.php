<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login page</title>
</head>
<body>
<h1>Введите логин и пароль</h1>
<form action = "main.php" method = "post">
    <label>Login:   </label>
    <input type = "text" name = "login" placeholder = " Your login"><br />
    <label>Password: </label>
    <input type = "password" name = "password" placeholder = "Your password"><br />
    <input type="submit" name="send" value="LOGIN" class="button">
</form>
</body>
</html>
