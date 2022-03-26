<!DOCTYPE html>
<html lang="en">
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Thai:wght@500&family=Kanit&family=Short+Stack&family=Sriracha&display=swap" rel="stylesheet">
<link rel="stylesheet" href="jqueryui/style.css">
  <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">

    <style>

@keyframes shine {
  0% {
    background-position-x: -500%;
  }
  100% {
    background-position-x: 500%;
  }
}
.row:after {
  content: "";
  display: table;
  clear: both;
}

.column {
  float: left;
  width: 100%;
}
 
.box{
    background-color: #FFFFFFB9;
    margin-left: 200px;
    margin-right: 200px;
    margin-top: 10px;
    margin-bottom: 20px;
    height: 200px;
    border-radius: 50px;
    padding: 30px;
    padding-left: 40px;
}
.box1{
    margin-left: 210px;
    margin-right: 200px;
}
p{
  font-size: 50px;
  font-weight: 500;
  font-family: 'IBM Plex Sans Thai', sans-serif;
  color: #58006E;
}
p2{
  font-size: 25px;
  font-family: 'IBM Plex Sans Thai', sans-serif;
  color: #350042;
}
p3{
  margin-left: 30px;
  font-size: 18px;
  font-family: 'IBM Plex Sans Thai', sans-serif;
  color: #670081;
}
p4{
  font-size: 15px;
  font-family: 'IBM Plex Sans Thai', sans-serif;
  color: #9400B9;
}

    /*.box:hover{background: #C9C9CC; color: #fff;}
    .box1:hover{background: #b0b0ff; color: #fff;}
    .box2:hover{background: #b0b0ff; color: #fff;}*/
</style>
</head>
<body>
<div style="background-image: linear-gradient(#91FFE5,#CB8DF5);background-repeat: no-repeat; background-size: 100% 80%px;">

        <br><br>
        <center>
        <p>
          รายชื่อสถานประกอบการ
        </p>
        </center>
        <div class="row" >
            <div class="column">
                <div class="box1">
                    <form method ="get" action="">
                        <input type = "text" placeholder="Search..." name = "key" style="width:78%; border-radius: 50px;  padding: 10px; font-size: 17px; border: none; background: #FEF5FF;">
                        <input type = "hidden" name = "controller" value = "prof"/>
                        <button type = "submit" name = "action" value = "searchCompany" style="width:10%; border-radius: 50px;  padding: 10px; background: #8A8A8A; color: white; border: none; font-size: 17px; border-left: none; cursor: pointer; font-family: 'IBM Plex Sans Thai', sans-serif;">ค้นหา...</button>
                        <a class="btn btn-default" style="width:10%; border-radius: 50px;  padding: 10px; background: #A500CE; color: white; border: none; font-size: 17px; border-left: none; cursor: pointer; font-family: 'IBM Plex Sans Thai', sans-serif;" href=?controller=prof&action=newCompany>เพิ่ม</a>
                    </form>
                </div>
            </div>
          
            <?php foreach($CompanyList as $company) {?>
          <div class="column">
              <div class="box">
                <p2><?php echo "$company->CompanyName" ?></p2><br>
                <p3>ตำแหน่ง</p3><p4><?php echo " : $company->CRecivePostion";?></p4><br>
                <p3>ที่อยู่</p3><p4><?php echo " : $company->CAddress $company->CStreet $company->amphure_name_th $company->province_name_th";?></p4><br>
                <p3>จำนวนที่รับ</p3><p4><?php echo " : $company->CNumber";?></p4><br>
                <div style="text-align: end;">
                <form action="" method="POST"  enctype="multipart/form-data"> 
                    <input type = "hidden" name = "ID" value = "<?php echo "$company->CompanyID" ?>"/>
                    <a href=?controller=prof&action=detailCompany&<?php echo "key=$company->CompanyID"?> style="background-color: #22CE00;color: white;padding: 8px 13px;text-align: center;text-decoration: none;display: inline-block;font-family: 'IBM Plex Sans Thai', sans-serif; border-radius: 30px;">รายละเอียด</a> 
                    <button type="submit" style="padding: 6px; width: 100px; color: white; border: none; font-size: 17px; border-left: none; cursor: pointer; border-radius: 20px; font-family: 'IBM Plex Sans Thai', sans-serif; background-color: #FF5959; ">ลบ</button>                 
                </form>
                </div>
              </div> 
          </div>
          <?php } ?>
          </div>  
          <br><br><br><br><br>
         </div>
</body>
</html>



<?php 

if (isset($_POST['ID'])) {

    $ID = $_POST['ID'];
    echo '<script type="text/javascript">';
    echo "var ID = '$ID';"; // ส่งค่า $data จาก PHP ไปยังตัวแปร data ของ Javascript
    echo '</script>';
    $result = Company::get($ID);

            if($result){ ?>
              <script>
                setTimeout(function() {
                  swal({
                    title: "Are you sure?",
                    text: "คุณต้องการลบสถานประกอบการนี้ใช่หรือไม่",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonClass: "btn-danger",
                    confirmButtonText: "Yes, delete it!",
                    closeOnConfirm: false
                  },
                  function(){
                    $.ajax({
                      url: "delete.php",
                      data: {ID:ID},
                      method: 'POST',
                      success: function (data) {
                          // success
                      }
                  });
                    swal({
                      title:"เรียบร้อย!",
                        text: "ลบสถานประกอบการแล้ว" ,
                        type: "success"
                    },function() {
                        window.location = "indexLogin.php?controller=prof&action=company"; //หน้าที่ต้องการให้กระโดดไป
                    });
                      
                  });
               }, 100);
           </script>
    

          <?php
      }
    }
?>