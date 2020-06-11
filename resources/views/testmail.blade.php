<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
        <nav class="navbar navbar-inverse">
                <div class="container-fluid">
                  <div class="navbar-header">
                    <a class="navbar-brand" href="#">Email Service</a>
                  </div>
                  <ul class="nav navbar-nav">
                    <li class="active"><a href="/home">Home</a></li>
                    <li><a href="#"></a></li>
                    <li><a href="#"></a></li>
                  </ul>
                  <ul class="nav navbar-nav navbar-right">
                    <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                  </ul>
                </div>
              </nav>
              <div class="col-sm-4"></div>
              <div class="col-sm-4">
                    <form class="jumbotron form-group" action="https://sendmailmicroservice.herokuapp.com//api/v1/sendmailwithtemplate" method="POST">
                        <label for="recipient">To:</label><br>
                        <input class="form-control" type="text" name="recipient" id="recipient" placeholder="Enter your email"/>
                        <label for="recipient">cc:</label>
                        <input type="text" class="form-control" name="cc" id="cc"  placeholder="Enter cc"/>
                        <label for="recipient">bcc:</label>
                        <input type="text" class="form-control" name="bcc" id="bcc" placeholder="Enter bcc"/>
                        <label for="recipient">Subject:</label><br>
                        <input type="text" class="form-control" name="subject" id="subject"  placeholder="Enter subject"/>
                        <label for="content">Content:</label><br>
                        <textarea class="form-control" name="body" id="body" placeholder="Please your content here"  rows="5" id="comment"></textarea><br>

                        <input type="submit" name='submit' class="btn btn-success text-right" value="Submit"/>
                    </form>
              </div>
              <div class="col-sm-4"></div>

</body>
</html>
