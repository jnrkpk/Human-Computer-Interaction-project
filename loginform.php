<!DOCTYPE html >
<html>
<head>
<title>Log in form</title>
<link type="text/css" rel="stylesheet" href="style.css" />
</head>
<body>
<form action="action_page.php" method="post">
  <p>Log in form,Kindly note that you need to be registered on this platform in order to log in to this platform</P>
  <div class="imgcontainer">
    <img src="#" alt="logo" class="avatar">
  </div>

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <button type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>
</body>
</html>