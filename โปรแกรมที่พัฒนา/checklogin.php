<html>
<head>
<title>OIMS</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv=Content-Type content="text/html; charset=tis-620">
    
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Prompt:wght@200;400;500&display=swap');
    </style>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
</head>
<body style="font-family: 'Prompt', sans-serif;  background-image: linear-gradient(#91FFE5,#CB8DF5);">
<nav class="navbar sticky-top navbar-expand-lg navbar-dark" style="background-color: #fff;">
  <div class="container-fluid">
    <a class="navbar-brand" href="?controller=pages&action=home">
      <img src="./images/logo.png" style="width: 140px; height: 80px;">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </div>
</nav>
   

<div style="height: 600px;">
<?php 
session_start();
session_id(); 
        if(isset($_POST['username'])){
                  include("connection_connect.php");
                  $username = $_POST['username'];
                  $password = $_POST['password'];
 
                  $sql="SELECT * FROM user
                  WHERE  User='".$username."' 
                  AND  Password='".$password."' ";

                  $result = mysqli_query($conn,$sql);
				
                  if(mysqli_num_rows($result)==1){
                      $row = mysqli_fetch_array($result);
            
                      $_SESSION["user"] = $row["User"];
                      $_SESSION["pass"] = $row["Password"];
                      
                      // Header("Location: indexLogin.php");
                      echo '<script>
                      setTimeout(function() {
                       swal({
                           title: "เข้าสู่ระบบสำเร็จ",
                           text: " ",
                           type: "success"
                       }, function() {
                           window.location = "indexLogin.php"; //หน้าที่ต้องการให้กระโดดไป
                       });
                     }, 50);
                    </script>';
                      
                  }else{
                      echo '<script>
                      setTimeout(function() {
                        swal({
                            title: "user หรือ  password ไม่ถูกต้อง",
                            text: "กรุณา Login ใหม่",
                            type: "error"
                        }, function() {
                            window.location = "login.php"; //หน้าที่ต้องการให้กระโดดไป
                        });
                      }, 50);
                      </script>';
 
                  }
        }
?>
</div>
 <footer class="text-center text-lg-start text-light"style="background-color: #9933ff">
          <div class="container p-4">
            <div class="row" >
              <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
              <h4 class="text-uppercase">Member</h4>
                <h6>Pheeraya   Pechsangkoon       6220500695</h6>
                <h6>Weerawut   Srikasem           6220502108</h6>
                <h6>Nattawat   Sripatpiriyakul    6220502183</h6>
                <h6>Siripattha Pinyosamosorn      6220503350</h6>
                <h6>Suthida    Khrueanak          6220504798</h6>
              </div>
              <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                <h4 class="text-uppercase">Thanks</h4>
                <h6>คณะวิศวกรรมศาสตร์ กำแพงแสน</h6>
                <h6>ภาควิชาวิศวกรรมคอมพิวเตอร์</h6>
                <h6>ปีการศึกษา 2564</h6>
                <h6>ภาคปลาย</h6>
                
              </div>
            
            </div>
          </div>
        </footer>
</body>   
</html>