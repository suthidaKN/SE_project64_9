<?php session_start();?>
<?php
 include('connection_connect.php');
?>
<html>
<head>
<title>OIMS</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv=Content-Type content="text/html; charset=tis-620">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    
    <style>
      @import url('https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Thai:wght@500&family=Prompt:wght@200;400;500&display=swap');
    </style>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sriracha&display=swap" rel="stylesheet">
 
</head>
<style>
  p1 {
    font-weight: 500;
    text-align: center;
    font-size: 25px;
    color: #006C68;
    
  }
  p2{
    text-align: center;
    font-size: 20px;
    color: #7863a0;
  }
  @keyframes shine {
    0% {
      background-position-x: -500%;
    }
    100% {
      background-position-x: 500%;
    }
  }
  form.example input[type=text] {
          padding: 12px;
          font-size: 17px;
          border: none;
          width: 75%;
          background: #FEF5FF;
          border-radius: 15px;
          
      }
      form.example input[type=password] {
          padding: 12px;
          font-size: 17px;
          border: none;
          width: 75%;
          background: #FEF5FF;
          border-radius: 15px;
      }
  
      form.example button {
          padding: 12px;
          width: 100px;
          background: #FF5959;
          color: white;
          border: none;
          font-size: 17px;
          border-left: none;
          cursor: pointer;
          border-radius: 20px;
          font-family: 'IBM Plex Sans Thai', sans-serif;
      }
      
  
      form.example button:hover {
          background: #AD0000;
      }
  
      form.example::after {
          content: "";
          clear: both;
          display: table;
      }
      .row:after {
          content: "";
          display: table;
          clear: both;
      }

      .column {
          float: left;
          width: 40%;
      }
 
      .box{
          
          padding: 20px;
          text-align: center;
      }
</style>
<body style="font-family: 'Prompt', sans-serif; ">
<nav class="navbar sticky-top navbar-expand-lg navbar-dark" style="background-color: #fff;">
  <div class="container-fluid">
    <a class="navbar-brand" href="./index.php">
      <img src="./images/logo.png" style="width: 140px; height: 80px;">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </div>
</nav>
   

      <div style="background-image: linear-gradient(#91FFE5,#CB8DF5);background-repeat: no-repeat; background-size: 100% 80%px;">
     
    <div style="height: 800px;">
      
        <div style="text-align: center;">
    

<form  name="formlogin" action="checklogin.php" method="POST" id="login" class="example">
<img src="./images/KU.png" style="width: 350px; height: 350px;"><br>
  <p1>เข้าสู่ระบบผู้ใช้เครือข่ายนนทรี</p1><br><br>

          <div class="row">
     <div class="column">
      <div class="box" style="text-align: end;">
          <p2>ชื่อผู้ใช้ </p2><br><br>
          <br> <p2>รหัสผ่าน </p2>
          </div>
        </div>
     <div class="column">
      <div class="box" style="text-align: start;">
            <input type="text"  name="username" required placeholder="Username" required minlength="3"/><br><br>
            <input type="password" name="password" required placeholder="Password" required minlength="6" /><br><br>
          </div>
        </div>
        </div>
      
            <div class="form-group">
            <br> <a class="btn btn-default" style="width: 10%;
          padding: 12px;
          width: 100px;
          background: #FF5959;
          color: white;
          border: none;
          font-size: 17px;
          border-left: none;
          cursor: pointer;
          border-radius: 20px;
          font-family: 'IBM Plex Sans Thai', sans-serif;" href="./index.php">ยกเลิก</a>
            <button type="submit" class="btn btn-default" style="width: 10%;
           padding: 12px;
          width: 100px;
          background: #22CE00;
          color: white;
          border: none;
          font-size: 17px;
          border-left: none;
          cursor: pointer;
          border-radius: 20px;
          font-family: 'IBM Plex Sans Thai', sans-serif;" id="btn">
            <span class="glyphicon glyphicon-log-in"></span>
             เข้าสู่ระบบ </button></div>
               <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
               </label>
      
      </form>

      </div>
</div>
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



  
