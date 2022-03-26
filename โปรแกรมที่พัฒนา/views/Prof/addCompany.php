<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Thai:wght@500&family=Kanit&family=Short+Stack&family=Sriracha&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="//apps.bdimg.com/libs/jqueryui/1.10.4/css/jquery-ui.min.css">
  <script src="//apps.bdimg.com/libs/jquery/1.10.2/jquery.min.js"></script>
  <script src="//apps.bdimg.com/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
  <link rel="stylesheet" href="jqueryui/style.css">
  <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">


  <script type="text/javascript">
    $(document).ready(function(){
        $("#province").change(function(){
            var province_id=$(this).val();
            $.ajax({
                url:"provincexDistrictOnchange.php",
                method:"POST",
                data:{provinceID:province_id},
                success:function(data){
                    $("#district").html(data);
                }
            });
        });

    });
</script>
  <script>
  $(function() {
    $( "#datepicker" ).datepicker({
      changeMonth: true,
      changeYear: true
    });
  });
  </script>
  <style>
     form.example input[type=text] {
          padding: 12px;
          font-size: 17px;
          border: none;
          width: 75%;
          background: #FEF5FF;
          border-radius: 30px;
          color: #58006E;
          font-family: 'IBM Plex Sans Thai', sans-serif;
        
      }
  
      form.example button {
          padding: 6px;
          width: 200px;
          background: #22CE00;
          color: white;
          border: none;
          font-size: 17px;
          border-left: none;
          cursor: pointer;
          border-radius: 20px;
          font-family: 'IBM Plex Sans Thai', sans-serif;
      }
      
  
      form.example button:hover {
          background: #01BD1A;
      }
  
      form.example::after {
          content: "";
          clear: both;
          display: table;
      }
      .container input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
}
.container {
  display: block;
  position: relative;
  padding-left: 50px;
  margin-bottom: 12px;
  cursor: pointer;
  font-size: 16px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  color : #440058;
  font-family: 'IBM Plex Sans Thai', sans-serif;
  margin-left: 13px;
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
        background-color: #FFFFFF7C;
        margin-left: 160px;
        margin-right: 160px;
        margin-top: 10px;
        height: 1950px;
        border-radius: 50px;
        padding: 30px;
        
    }
    .row1:after {
    content: "";
    display: table;
    clear: both;
    }

    .column1 {
    float: left;
    width: 100%;
    }
    
    .box1{
        background-color: #FFFFFF7C;
        margin-left: 160px;
        margin-right: 160px;
        margin-top: 10px;
        height: 220px;
        border-radius: 50px;
        padding: 30px;
        text-align: center;
    }
    .column2 {
        float: left;
        width: 65%; 
    }
    .column3 {
        float: left;
        width: 25%; 
    }
        
    .box2{
        padding-left: 10px;
        padding-top: 10px;
       
    }
    p{
      margin-left: 450px;
      font-weight: 500;
      font-size: 50px;
      font-family: 'IBM Plex Sans Thai', sans-serif;
      color: #58006E;
    }
    p2{
      font-size: 16px;
      font-family: 'Kanit', sans-serif ;
      color:#440058;
      margin-left: 13px;

    }
    p3{
      font-size: 20px;
      font-family: 'Kanit', sans-serif ;
      color:#440058;
      margin-left: 13px;

    }
    p4{
      font-size: 35px;
      font-weight: 600;
      font-family: 'Kanit', sans-serif;
      color: #FFC802;
    }
    p3{
      font-size: 35px;
      font-family: 'Kanit', sans-serif ;
      color: #006c68;
      font-weight: 600;
    
    }

    /*.box:hover{background: #D2FFC9;}
    .box1:hover{background: #b0b0ff; color: #fff;}
    .box2:hover{background: #b0b0ff; color: #fff;}*/
  </style>
</head>
<body>
<div style="background-image: linear-gradient(#91FFE5,#CB8DF5);background-repeat: no-repeat; background-size: 100% 80%px;">

        <br><br>
        <p>
            เพิ่มสถานประกอบการ
        </p>
           
        <div class="row" >
            <div class="column">
            <div class="box">
            <div class="column3">
                  <div class="box2">

                  </div>
                </div>
                <div class="column2">
                   <div class="box2">
                
                <form class="example" action="" method="POST"  enctype="multipart/form-data">
                 
                    <p2>ชื่อสถานประกอบการ/หน่วยงาน </p2><br><input type="text" name="CompanyName"/><br><br>
                    <p2>ประเภทธุรกิจ</p2><br> <input type="text" name="CType"/><br><br>
                    <p2>ที่อยู่</p2><br> <input type="text" name="CAddress"/><br><br>
                    <p2>ถนน</p2><br> <input type="text" name="CStreet"/><br><br>

                    <select name="PV_id" style="width: 75%;; border-radius: 20px; padding: 10px; background: #f6efff; color:#9122F3; font-size: 17px; font-family: 'IBM Plex Sans Thai', sans-serif;" id="province">
                                    <option value=" " >-เลือกจังหวัด-</option>
                                    <?php
                                        require("./connection_connect.php");
                                        $sql="SELECT * FROM provinces order by province_name_th";
                                        $result = $conn->query($sql);
                                        while($my_row = $result->fetch_assoc()){
                                    ?>
                                    <option value="<?= $my_row["province_id"];?>"><?=$my_row["province_name_th"]; ?></option>
                                    <?php } ?>        
                                </select>
                                <br><br>
                                <select name="id_amphure" style="width: 75%;; border-radius: 20px; padding: 10px; background: #f6efff; color:#9122F3; font-size: 17px; font-family: 'IBM Plex Sans Thai', sans-serif;" id="district">
                                    <option value=" ">-เลือกอำเภอ-</option>
                                </select><br><br>
               

                    <p2>เบอร์โทรศัพท์ ของสถานประกอบการ/หน่วยงาน </p2><br> <input type="text" name="CPhone"/><br><br>
                    <p2>เบอร์โทรสาร ของสถานประกอบการ/หน่วยงาน </p2><br><input type="text" name="CFax"/><br><br>
                    <p2>ชื่อผู้จัดการ สถานประกอบการ/หัวหน้าหน่วยงาน </p2><br><input type="text" name="CManager"/><br><br>
                    <p2>ตำแหน่ง ของผู้จัดการ/หัวหน้าหน่วยงาน </p2><br><input type="text" name="CMngPosition" ><br><br>
                    <p2>ชื่อผู้ประสานงาน ของสถานประกอบการ/หน่วยงาน </p2><br><input type="text" name="CCoordinator"/><br><br>
                    <p2>ตำแหน่ง ของผู้ประสานงาน </p2><br> <input type="text" name="CCoorPosition"/><br><br>
                    <p2>แผนก/ฝ่าย ของผู้ประสานงาน </p2><br> <input type="text" name="CCoorDepartment"/><br><br>
                    <p2>เบอร์โทรศัพท์ของผู้ประสานงาน </p2><br> <input type="text" name="CCoorPhone"/><br><br>
                    <p2>อีเมล (E-mail) ของผู้ประสานงาน </p2><br> <input type="text" name="CCoorEmail"/><br><br>
                    <p2>ตำแหน่งงานที่ต้องการรับนิสิตฝึกงาน/สหกิจศึกษา </p2><br> <input type="text" name="CRecivePostion"/><br><br>
                    <p2>ลักษณะงานที่นิสิตต้องปฏิบัติ (Job Description) </p2><br> <input type="text" name="CJobDescription"/><br><br>
                    <p2>จำนวนที่รับ (คน) </p2><br> <input type="text" name="CNumber"/><br><br>
                    <p2>ความสามารถทางวิชาการหรือทักษะที่นิสิตควรมี </p2><br> <input type="text" name="CSkillReq"/><br><br>


                    <div style="margin-left: 13.5%;">
                    <input type = "hidden" name = "doc" value = "student"/>
                    <input type = "hidden" name = "controller" value = "student"/>
                    <a class="btn btn-default" style="background-color: #FF5959; color: #fff; border-radius: 20px; font-family: 'IBM Plex Sans Thai', sans-serif; " href=?controller=prof&action=company>ยกเลิก</a>
                    <button type="submit"  >เสนอสถานที่ฝึกงานใหม่</button><br><br>                        
                  </div>
                
                  </form>
                 
                 
              
                
              </div>
              </div>
            </div> 
            </div>
            
         
</div>
<br><br><br><br><br><br>
</body>
</html>

<?php 

if (isset($_POST['doc'])) {

      $CID = Company::CountCompanyAll();
      settype($CID,"integer");
      $CID = $CID+1;
      
      $CompanyName= $_POST['CompanyName']; 
      $CAddress= $_POST['CAddress'];
      $CStreet= $_POST['CStreet'];
      $CTumbon= $_POST['id_amphure'];
      $CType= $_POST['CType'];
      $CPhone= $_POST['CPhone'];
      $CFax= $_POST['CFax'];
      $CManager= $_POST['CManager'];
      $CMngPosition= $_POST['CMngPosition'];
      $CCoordinator= $_POST['CCoordinator'];
      $CCoorPosition= $_POST['CCoorPosition'];
      $CCoorDepartment= $_POST['CCoorDepartment'];
      $CCoorPhone= $_POST['CCoorPhone'];
      $CCoorEmail= $_POST['CCoorEmail'];
      $CRecivePostion= $_POST['CRecivePostion'];
      $CJobDescription= $_POST['CJobDescription'];
      $CNumber= $_POST['CNumber'];
      $CSkillReq= $_POST['CSkillReq'];

      echo $CID,$CompanyName, $CAddress,$CStreet, $CTumbon,$CType,$CPhone,$CFax,$CManager,$CMngPosition,$CCoordinator,$CCoorPosition,$CCoorDepartment,$CCoorPhone,$CCoorEmail,
      $CRecivePostion,$CJobDescription,$CNumber,$CSkillReq;
      $result = Company::Add($CID,$CompanyName, $CAddress,$CStreet, $CTumbon,$CType,$CPhone,$CFax,$CManager,$CMngPosition,$CCoordinator,$CCoorPosition,$CCoorDepartment,$CCoorPhone,$CCoorEmail,
      $CRecivePostion,$CJobDescription,$CNumber,$CSkillReq);

            if($result){
                echo '<script>
                     setTimeout(function() {
                      swal({
                          title: "เพิ่มสถานประกอบการสำเร็จ",
                          text: "",
                          type: "success"
                      }, function() {
                          window.location = "indexLogin.php?controller=prof&action=company"; //หน้าที่ต้องการให้กระโดดไป
                      });
                    }, 100);
                </script>';
            }else{
               echo '<script>
                     setTimeout(function() {
                      swal({
                          title: "เกิดข้อผิดพลาด",
                          type: "error"
                      }, function() {
                          window.location = "indexLogin.php?controller=prof&action=company"; //หน้าที่ต้องการให้กระโดดไป
                      });
                    }, 100);
                </script>';
            } //else ของ if result

          
      }
?>