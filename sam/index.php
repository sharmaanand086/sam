<!DOCTYPE html>
<html>
<head>
<title>sam </title>
<link rel="stylesheet" type="text/css" href="bootstrap.css">
<link rel="stylesheet" type="text/css" href="mainstyle.css">
</head>
<body>
<div class="container">
	<div class="alert alert-dismissible alert-warning">  
  <h4 class="alert-heading heading">Welcome</h4>  
</div>
 <div class="jumbotron">
<form method="post" action="loginccheck.php">
  <fieldset class="fieldset">
    <legend>Login</legend>
    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" name="email" class="form-control  ctrl" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" name="pass" class="form-control ctrl" id="exampleInputPassword1" placeholder="Password">
    </div>
     <button type="submit" class="btn btn-primary">Submit</button>
  </fieldset>
</form>
</div>
</div>
</body>
</html>