<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form class="jumbotron text-center" action="http://127.0.0.1:8000/api/v1/sendmail" method="POST">
        <input type="text" name="recipient" id="recipient" placeholder="Enter email"/><br>
        <input type="text" name="subject" id="subject"  placeholder="Enter subject"/><br>
        <input type="text" name="body" id="body" placeholder="Enter body"/>
        <input type="submit" name='submit' value="Submit"/>
    </form>
</body>
</html>
