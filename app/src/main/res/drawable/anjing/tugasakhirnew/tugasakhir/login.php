<!DOCTYPE html>
<html>
<head>
  <title>LOGIN U GALLERY</title>
  <link rel="stylesheet" href="bootstrap.css">
  <link rel="stylesheet" type="text/css" href="dashboard.css">

</head>
<body>
<center>
  <div class="login">
    <div class="row">
      <form class="form-signin" action="proses-login.php" method="post">
        <img class="mb-3" src="assets/img/lamlim.png" alt="" width="150" height="150">  <!-- <h1> LAMLIM STORE</h1> -->
        <br>
        <h1 class="h3 mb-2 font-weight-normal">Please sign in</h1>
        <label for="inputEmail" class="sr-only">Username</label>
        <input type="text" name="username" id="inputEmail" class="form-control" placeholder="Username" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <div class="checkbox mb-3">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-success btn-block" type="submit">Sign in</button>
        <br>
        <a href="registrasi.php" class="btn btn-warning">Daftar</a>
        <a href="home.php" class="btn btn-warning">Kembali</a>
       <!--  <p class="mt-3 mb-3 text-muted">&copy; Copyright 2019</p> -->
      </form>
    </div>
  </div>
</center>
</body>
</html>