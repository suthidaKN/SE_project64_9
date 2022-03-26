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


/* Create a custom radio button */
.checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height: 25px;
  width: 25px;
  background-color: #FEF5FF;
;
  border-radius: 50%;
}

/* On mouse-over, add a grey background color */
.container:hover input ~ .checkmark {
  background-color: #CB8DF5;
}

/* When the radio button is checked, add a blue background */
.container input:checked ~ .checkmark {
  background-color: #7000FF;
}

/* Create the indicator (the dot/circle - hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the indicator (dot/circle) when checked */
.container input:checked ~ .checkmark:after {
  display: block;
}

/* Style the indicator (dot/circle) */
.container .checkmark:after {
 	top: 9px;
	left: 9px;
	width: 8px;
	height: 8px;
	border-radius: 50%;
	background: #fff;
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
        height: 2250px;
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
    p5{
      font-size: 33px;
      font-family: 'Kanit', sans-serif ;
      color:#FF0000;
      margin-left: 13px;

    }
    p4{
      font-size: 22px;
      font-weight: 600;
      font-family: 'Kanit', sans-serif;
      color: #FFC802;
    }
    p3{
      font-size: 22px;
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
          ยื่นคำร้องขอฝึกงาน
        </p>
           
        <div class="row" >
            <div class="column">
              <?php
              if (is_null($student->approvedID)){ ?>
              <div style="height: 600px;">
                <div class="row1" >
                  <div class="column1">
                    <div class="box1">
                      <p5>ยังไม่สามารถส่งคำร้องได้!!</p5>
                      <br><p3><?php echo "สถานะ : "; ?></p3>
                      <?php if(is_null($student->approvedID)){ ?> <p4><?php echo "รอการตรวจสอบ";?></p4><?php } ?>
                      <br><br><a href=?controller=student&action=detailStatus style="background-color: #9F9C9C;color: white;padding: 10px 20px;text-align: center;text-decoration: none;display: inline-block;font-family: 'IBM Plex Sans Thai', sans-serif; border-radius: 30px; ">รายละเอียด</a> 
                    </div> 
                  </div>  
                </div>
                <br><br>  
              </div>      
              <?php  } 
              else{  ?>
                <div class="box">
                <div style="text-align: center; margin:10px">
                  <img src="./images/timeline.png" style="width: 800px; height: 500px;" >
                </div> 
                <div class="column3">
                  <div class="box2">

                  </div>
                </div>
                <div class="column2">
                   <div class="box2">
                    <form class="example" action="" method="post" enctype="multipart/form-data">
                      <a href="document/form_internship2565.pdf" target="_blank " style="background-color: #58006E;color: white;padding: 14px 25px;text-align: center;text-decoration: none;display: inline-block;font-family: 'IBM Plex Sans Thai', sans-serif; border-radius: 30px; " >ดาวน์โหลดใบคำร้องขอฝึกงาน</a><br>
                        <br>
                        <p3><?php echo "ชื่อ นามสกุล : $student->titleName$student->stuFN  $student->stuLN";?></p3><br>
                        <input type="hidden" name="JStu" value="<?php echo $student->stuID ?>"/>
                        <p3><?php echo "รหัสนิสิต: $student->stuID";  ?></p3><br>
                        <p3><?php echo "เบอร์โทรศัพท์ : $student->stuPhone ";  ?></p3><br>
                        <p3><?php echo "เฟสบุ๊ค : $student->stuFB";  ?></p3><br><br>
                        <p2>ประเภท : </p2><br>
                        <label class="container">ฝึกงาน
                        <input type="radio" name="Jtype" value="1">
                          <span class="checkmark"></span>
                        </label>
                        <label class="container">สหกิจ
                          <input type="radio" name="Jtype" value="2">
                          <span class="checkmark"></span>
                        </label><br>
                  
                        <p2>เลือกสถานฝึกงานที่ภาควิชามีอยู่แล้ว</p2> <select name="JCompany" class="form-control form-control-lg" style="width: 75%; border-radius: 20px; padding: 10px; background: #FEF5FF; color:#58006E; font-size: 17px;">
                        <?php foreach($company  as $com)
                        {
                          echo "<option value=$com->CompanyID > $com->CompanyName </option>";
                        }
                        ?>
                        </select><br>
                        <p2><?php echo "เสนอสถานที่ฝึกงานใหม่";  ?></p2>
                        <p2><input type="hidden" name="controller" value="student"/></p2>
                        <a class="btn btn-default" style="background-color: #7000FF; color: #fff; border-radius: 20px; " href=?controller=student&action=newCompany>เสนอ</a><br><br>
                        <p2>ตำแหน่งที่ไปฝึกงาน </p2><br><input type="text" name="JPosition"/><br><br>
                        <p2>ระบุชื่อของผู้ที่จะให้ภาควิชาฯ ออกหนังสือขอความอนุเคราะห์ฝึกงาน</p2><br> <input type="text" name="JBossname"/><br><br>
                        <p2>ระบุตำแหน่งของผู้ที่จะให้ภาควิชาฯ ออกหนังสือขอความอนุเคราะห์ฝึกงาน </p2><br><input type="text" name="JBossPosition"/><br><br>
                        <p2>ชื่อผู้ประสานงาน</p2><br> <input type="text" name="JCoordinatorName"/><br><br>
                        <p2>โทร </p2><br><input type="text" name="JCoordinatorTel"/><br><br>
                        <p2>อีเมล </p2><br><input type="text" name="JCoordinatorEmail"/><br><br>
                        <p2>ระยะการฝึกงานตั้งแต่วันที่ - ถึงวันที่ </p2><br><input type="date" style="background-color: #FEF5FF; border-radius: 30px; color: #440058; font-family: 'IBM Plex Sans Thai', sans-serif; padding: 8px; margin: 8px; width: 33.3%;" name="JStartDate" ><img src="./images/minus.png" style="width: 15px; height: 15px; margin: 10px; " ><input type="date" style="background-color: #FEF5FF; border-radius: 30px; color: #440058; font-family: 'IBM Plex Sans Thai', sans-serif; padding: 8px; width: 33.3%; margin: 8px;" name="JEndDate" ><br><br>
                        <p2>จำนวนค่าตอบแทน (บาท/วัน หรือ บาท/เดือน) (หรือ ไม่มีค่าตอบแทน)</p2><br><input type="text" name="JPay"/><br><br>
                        <p2>ที่พัก(มี/ไม่มี/อื่นๆ)</p2><br> <input type="text" name="JAccommodation"/><br><br>
                        <?php
                        settype($JID,"integer");
                        $JID = $JID+1;
                        ?>
                        <input type="hidden" name="doc_name" value="<?php echo $JID; ?>" required class="form-control" placeholder="ID jobrequirment"> <br>
                         <font color="red">*อัพโหลดได้เฉพาะ .pdf เท่านั้น </font><br>
                        <input type="file" name="doc_file" required  style="width: 75%; border-radius: 20px;" class="form-control" accept="application/pdf"> <br><br>
                       

                        <div style="margin-left: 20%;">
                          <input type="hidden" name="controller" value="student"/><br><br>
                          <button type="submit" name="action" value="home">ย้อนกลับ</button>
                          <button type="submit" style="background-color: #01BD1A;">ส่งคำร้อง</button>
                        </div>
                      
                    </form>
              </div>
              </div>
            </div> 
            <?php } ?>
            <br><br><br><br><br><br>
            </div>
          </div>
         
</div>
</body>
</html>


<?php 

if (isset($_POST['doc_name'])) {


  $account = Account::getID($_SESSION["user"]);
  $JobRequirment = JobRequirment::getJobReqStudent($account->stuID);
  $maxJobReqStuID= 0;
  foreach($JobRequirment as $J){
      
      settype($J->JobID,"integer" );
      $JID = $J->JobID;
      if($maxJobReqStuID < $JID ){
          $maxJobReqStuID = $JID;
      }

  }
  $JID = $_POST['doc_name'];
  $Jtype = $_POST['Jtype'];
  date_default_timezone_set('asia/bangkok');
  $date = date('Y-m-d');
 
  $JStu = $_POST['JStu'];
  echo $JStu;
  $JPosition = $_POST['JPosition'];
  $JBossname = $_POST['JBossname'];
  $JBossPosition = $_POST['JBossPosition'];
  $JCompany = $_POST['JCompany'];
  $JCoordinatorName = $_POST['JCoordinatorName'];
  $JCoordinatorTel = $_POST['JCoordinatorTel'];
  $JCoordinatorEmail = $_POST['JCoordinatorEmail'];
  $JStartDate = $_POST['JStartDate'];
  $JEndDate = $_POST['JEndDate'];
  $JPay = $_POST['JPay'];
  $JAccommodation = $_POST['JAccommodation'];
  JobRequirment::Add($JID,$Jtype,$date,$JStu,$JPosition,$JBossname,$JBossPosition,$JCompany,$JCoordinatorName,$JCoordinatorTel,$JCoordinatorEmail, $JStartDate,$JEndDate,$JPay,$JAccommodation);
  echo "$JID,$Jtype,$date,$JStu,$JPosition,$JBossname,$JBossPosition,$JCompany,$JCoordinatorName,$JCoordinatorTel,$JCoordinatorEmail, $JStartDate,$JEndDate,$JPay,$JAccommodation";
  $student = JobRequirment::getID($maxJobReqStuID);

    require_once 'connect.php';
     //สร้างตัวแปรวันที่เพื่อเอาไปตั้งชื่อไฟล์ใหม่
    $date1 = date("Ymd_His");
    //สร้างตัวแปรสุ่มตัวเลขเพื่อเอาไปตั้งชื่อไฟล์ที่อัพโหลดไม่ให้ชื่อไฟล์ซ้ำกัน
    $numrand = (mt_rand());
    $doc_file = (isset($_POST['doc_file']) ? $_POST['doc_file'] : '');
    $upload=$_FILES['doc_file']['name'];

    //มีการอัพโหลดไฟล์
    if($upload !='') {
    //ตัดขื่อเอาเฉพาะนามสกุล
    $typefile = strrchr($_FILES['doc_file']['name'],".");

    //สร้างเงื่อนไขตรวจสอบนามสกุลของไฟล์ที่อัพโหลดเข้ามา
    if($typefile =='.pdf'){

    //โฟลเดอร์ที่เก็บไฟล์ **สร้างไฟล์ index.php หรือ index.html (ไม่ต้องมี code) ไว้ในโฟลเดอร์ด้วยนะครับจะได้ป้องกันการเข้าถึงทุกไฟล์ในโฟลเดอร์
    $path="docs/";
    //ตั้งชื่อไฟล์ใหม่เป็น สุ่มตัวเลข+วันที่
    $newname = 'doc_'.$numrand.$date1.$typefile;
    $path_copy=$path.$newname;
    //คัดลอกไฟล์ไปยังโฟลเดอร์
    move_uploaded_file($_FILES['doc_file']['tmp_name'],$path_copy); 

     //ประกาศตัวแปรรับค่าจากฟอร์ม
    $doc_name = $_POST['doc_name'];
    
    //sql insert
    $stmt = $conn->prepare("INSERT INTO tbl_pdf (doc_name, doc_file)
    VALUES (:doc_name, '$newname')");
    $stmt->bindParam(':doc_name', $doc_name, PDO::PARAM_STR);
    $result = $stmt->execute();
    $conn = null; //close connect db
    //เงื่อนไขตรวจสอบการเพิ่มข้อมูล
            if($result){
                echo '<script>
                     setTimeout(function() {
                      swal({
                          title: "ยื่นคำร้องเรียบร้อย",
                          text: "รอการตรวจสอบจากทางภาควิชา",
                          type: "success"
                      }, function() {
                          window.location = "indexLogin.php?controller=student&action=newRequirement"; //หน้าที่ต้องการให้กระโดดไป
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
                          window.location = "indexLogin.php?controller=student&action=newRequirement"; //หน้าที่ต้องการให้กระโดดไป
                      });
                    }, 100);
                </script>';
            } //else ของ if result

        
        }else{ //ถ้าไฟล์ที่อัพโหลดไม่ตรงตามที่กำหนด
            echo '<script>
                         setTimeout(function() {
                          swal({
                              title: "คุณอัพโหลดไฟล์ไม่ถูกต้อง",
                              type: "error"
                          }, function() {
                              window.location = "upload_pdf.php"; //หน้าที่ต้องการให้กระโดดไป
                          });
                        }, 1000);
                    </script>';
        } //else ของเช็คนามสกุลไฟล์
   
    } // if($upload !='') {

    } //isset
?>