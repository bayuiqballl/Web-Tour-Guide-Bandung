<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Register Page</title>
    <link rel="stylesheet" href="view/css/bootstrap.css">
    <link rel="stylesheet" href="view/css/stylelogin.css">
  </head>
  <body>
    <div class="wrapper">
      <form class="form-signin">
        <h2 class="form-signin-heading">Please Register</h2>
        <label for="username">Username</label>
        <input type="text" class="form-control" name="username" placeholder="Email Address" required="" autofocus="" />
        <br>
        <label for="password">Password</label>
        <input type="password" class="form-control" name="password" placeholder="Password" required=""/>
        <br>
        <label for="password">Re-Password</label>
        <input type="password2" class="form-control" name="password2" placeholder="Re-Password" required=""/>
        <br>
        <label for="address">Address</label>
        <textarea name="address" class="form-control" rows="4" cols="40"></textarea>
        <br>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Submit</button>
        <a href="login.php" class="btn btn btn-lg btn-primary btn-block">Back to Login</a>
      </form>

    </div>

  </body>
</html>
