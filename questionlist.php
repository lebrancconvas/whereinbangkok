<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Question List</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="node_modules/bootstrap/dist/css/bootstrap.min.css" />
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">Where in Bangkok?</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php">Login</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Help
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="help.php">ต้องการตัวช่วย ?</a>
          <a class="dropdown-item" href="questionlist.php">Question List</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">อยากสนับสนุนเว็บไซต์นี้</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
  </div>
</nav>
<div class="container text-center" style="font-size : 40px">
    Question List
</div>
<a href="question1.php"><button type="button" class="btn btn-primary btn-lg btn-block">Question 1</button></a>
<a href="question2.php"><button type="button" class="btn btn-secondary btn-lg btn-block">Question 2</button></a>
<a href="question3.php"><button type="button" class="btn btn-warning btn-lg btn-block">Question 3</button></a>
<a href="question4.php"><button type="button" class="btn btn-faded btn-lg btn-block">Question 4</button></a>
<a href="question5.php"><button type="button" class="btn btn-danger btn-lg btn-block">Question 5</button></a>
<a href="question6.php"><button type="button" class="btn btn-dark btn-lg btn-block">Question 6</button></a>
<a href="question7.php"><button type="button" class="btn btn-success btn-lg btn-block">Question 7</button></a>
<a href="question8.php"><button type="button" class="btn btn-info btn-lg btn-block">Question 8</button></a>
<a href="question9.php"><button type="button" class="btn btn-light btn-lg btn-block">Question 9</button></a>
<a href="question10.php"><button type="button" class="btn btn-muted btn-lg btn-block">Question 10</button></a>
    
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
</body>
</html>