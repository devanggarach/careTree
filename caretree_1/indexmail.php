<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mail Send</title>
</head>
<body>
    <h1>Mail Sending Application</h1>
    <form action="mail.php" method="POST">
        <label for="">Email: </label><input type="text" name="email"><br/>
        <label for="">Name: </label><input type="text" name="name"><br/>
        <label for="">Subject: </label><input type="text" name="subject"><br/>
        <label for="">Body: </label><textarea name="body"></textarea><br/>
        <input type="submit" name="submit">
    </form>
</body>
</html>