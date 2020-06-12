<!DOCTYPE html>
<html>
<head>
	<title>send mail</title>
</head>
<body>
	<form method="POST" action="process_mail.php">
	<label>receipent</label> <input type="text" name="receipent" required/> <br> <br>
	<label>sender</label> <input type="text" name="sender" required/> <br> <br>
	<label>subject</label> <input type="text" name="subject" required/> <br> <br>
	<label>body</label> <input type="text" name="body" required/> <br> <br>
	<label>cc</label> <input type="text" name="cc" required/> <br> <br>
	<label>bcc</label> <input type="text" name="bcc" required/> <br> <br>
	<button type="submit" name="submit">submit</button>
	</form>

</body>
</html>