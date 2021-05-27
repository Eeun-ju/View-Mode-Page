
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset = "urf-8">
    <title> Login </title>
    <link rel="stylesheet" href="style.css">
  </head>

  <script type="text/javascript">
    window.history.forward();
    function noBack(){
      window.history.forward();
    }
  </script>

  <body style="padding":20px>
    <div style="position:fixed;right:10px;top:10px;">
    <img src="큐램.jpg" alt="" weight="200%" height="180%"/></div>

<form class = "box" action="login_page.php" method="post">
  <h1>Login</h1>
  <p style = "font-family:양재 튼튼 B"><font color = white> QURAM </font></p>
  <input type="text" name="userid" placeholder="UserID">
  <input type="password" name="userpw" placeholder="Password">
  <input type="submit" id="btn" name="" value="Login">
</form>
  </body>
</html>
