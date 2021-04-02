<?php 
  error_reporting(0);
  session_start();
  // if(isset($_SESSION['username'])){
  //   $username = $_SESSION['username'];
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap.min.css" >

    <title>Form Admin</title>

   
    <style>
    body{
      background: url("assets/img/slider/banner1.jpg") ;

    }

    /*.er{
      background: #f0e68c;
    }*/
      .create{
        float: right;
      }

      .ers {
        width: 280px;
        height: 250px;
      }

      .jpg{
        background: url(assets/img/menu/7.jpg);
      }
      .png{
        background: url(assets/img/menu/9.jpg);
      }
      
    </style>
  </head>
  <body>

            <div class="row">
                  <div class="col-3 mt-4">
                  <div id="list-example" class="list-group ">
            <a class="list-group-item list-group-item-action er" href="#list-item-1"><img src="img/acr.png" width="30" height="30" alt="">&nbsp;&nbsp;&nbsp; <?php echo $username; ?>  </a>
            <a class="list-group-item active"</a>
            <!-- <a class="list-group-item list-group-item-action " href="#">Home</a> -->
            <!-- <a class="list-group-item list-group-item-action " href="#">Settings</a> -->
            <a class="list-group-item list-group-item-action " href="?page=content&data=user">Data Customers</a>
            <a class="list-group-item list-group-item-action " href="?page=content&data=pesanan">Data Orders</a>
            <a class="list-group-item list-group-item-action " href="">Data Stuffs</a>
            <a class="list-group-item list-group-item-action " href="logout.php">Logout <?php echo $username; ?></a>
          </div>
        </div>
        
      

        <div class="col-md-6 mt-4">
        <?php 
          if(isset($_GET['page'])){
            $page = $_GET['page'];

            switch ($page) {
              case 'content':
                include"content.php";
                break;
              
              default:
                echo "Data yang dicari tidak di temukan ,.....";
                break;
            }
          }else{
              echo "<h1>Selamat datang ADMIN</h1>";
          }
        ?>
        <!-- <ul class="list-group list-group-flush">
          <li class="list-group-item">Molly, a 2-year-old dog has skin problem<span class="create"><a href="#">Read</a> <a href="#">Update</a> <a href="#">Delete</a> </span></li>
          <li class="list-group-item">Rinno, a 4-year-old cat has eye pain<span class="create"> <a href="#">Read</a> <a href="#">Update</a> <a href="#">Delete</a> </span></li>
          <li class="list-group-item">Fergusso, a 3-year-old goat has rabbies<span class="create"> <a href="#">Read</a> <a href="#">Update</a> <a href="#">Delete</a> </span></li>
          <li class="list-group-item">Lala, a 6-month-old hamster get ringworm<span class="create"> <a href="#">Read</a> <a href="#">Update</a> <a href="#">Delete</a> </span></li>
          <li class="list-group-item">Broody, a 9-month-old rabbit with toxo disease<span class="create"> <a href="#">Read</a> <a href="#">Update</a> <a href="#">Delete</a> </span></li>
        </ul> -->  
      


        <!-- <nav class="mt-4 bg-dark">
          <ul class="pagination justify-content-center">
            <li class="page-item disabled">
              <a class="page-link" href="#" tabindex="-1">Previous</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
              <a class="page-link" href="#">Next</a>
            </li>
          </ul>
        </nav> -->         
      </div>
   
 
<div class="col-md-3 mt-4">
  <div class="card text-center ers">
    <div class="card-header">
    LAMLIM FLOWER 1
</div>
  <div class="card-body jpg">
   <!--  <h5 class="card-title">Success</h5>
    <a href="#" class="btn btn-warning">Show</a> -->
  </div>
  <!-- <div class="card-footer text-muted">
    U GALLERY
    </div> -->
  </div>
</br>

<div class="card text-center ers">
  <div class="card-header">
    LAMLIM FLOWER 2
  </div>
  <div class="card-body png">
    <!-- <h5 class="card-title">Success</h5>
    <a href="#" class="btn btn-warning">Show</a> -->
  </div>
  <!-- <div class="card-footer text-muted">
    U GALLERY
  </div> -->
</div>
</div>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
<?php
// }else{ 
//     echo '<script language="javascript">alert("Anda dilarang masuk !!!!"); document.location="../loginadmin.php";</script>';
// }
?>