<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" type="text/css" href="registrasi.css">

    <!-- <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/release/v5.8.1/css/all.css"> -->

    <title>REGISTRASI U GALLERY</title>
  </head>
  <body>


    <div class="container">
      <h4 class="text-center">FORM PENDAFTARAN</h4>
      <form action="proses-regis.php" method="post">
        <div class="form-group">
          <div class="row">
            <div class="col-md-12">
              <label for="nama"> Username </label>
                <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="fas fa-user"></i>
                  </div>
                </div>
                <input type="text" name="username" id="nama" class="form-control" placeholder="Masukkan Username">
            </div>
           </div>
        </div>
      </div>
 
    <div class="form-group">
      <div class="row">
        <div class="col-md-12">
          <label for="alamat">E-Mail</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-text">
              <i class="fas fa-user"></i>
            </div>
          </div>
          <input type="email" name="email" id="email" class="form-control" placeholder="Masukkan Email">
          </div>
        </div>
      </div>
    </div>

    <div class="form-group">
      <div class="row">
        <div class="col-md-12">
          <label for="password"> Password </label>
            <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <i class="fas fa-user"></i>
              </div>
            </div>
            <input type="password" name="password" id="password" class="form-control" placeholder="Masukkan Password">
          </div>
        </div>
      </div>
    </div>

 <!--  <div class="form-group">
    <div class="row">
      <div class="col-md-12">
        <label for="user">No.Telepon</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <i class="fas fa-user"></i>
            </div>
          </div>
          <input type="text" name="user" id="user" class="form-control" placeholder="Masukkan No Telepon">
        </div>
      </div>
    </div>
  </div> -->
  
 <!-- <div class="form-group">
    <div class="row">
      <div class="col-md-12">
        <label for="user">Pesanan</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <i class="fas fa-user"></i>
            </div>
          </div>
          <input class="textarea" placeholder="Masukkan Pesanan Anda">
        </div>
      </div>
    </div>
  </div>-->


    <br>
      <div class="row justify-content-center">
      <button type="submit" name="button" class="btn btn-warning mr-3" >DAFTAR</button>
        <!-- <a href="login.html" class="btn btn-warning">DAFTAR</a> -->
        <br>
        <a href="home.php" class="btn btn-warning" >Kembali</a>
        </div>

        </form>
      </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>