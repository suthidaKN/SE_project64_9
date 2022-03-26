
      







<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Thai:wght@500&family=Kanit&family=Short+Stack&family=Sriracha&display=swap" rel="stylesheet">
      <title>Basic Upload pdf file PHP PDO by devbanban.com 2021</title>
        <!-- sweet alert  -->
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
        background-color: #FFFFFF7C;
        margin-left: 200px;
        margin-right: 200px;
        margin-top: 10px;
        height: 930px;
        border-radius: 50px;
        padding: 30px;
        
    }
    .column2 {
        float: left;
        width: 80%; 
    }
    .column3 {
        float: left;
        width: 10%; 
    }
        
    .box2{
        padding-left: 10px;
        padding-top: 10px;
    }

    p{
        font-weight: 500;
        font-size: 50px;
        font-family: 'IBM Plex Sans Thai', sans-serif;
        color: #58006E;
    }
    p2{
      font-size: 20px;
      font-family: 'Kanit', sans-serif ;
      color: #043130;
      font-weight: 600;

    }
    p3{
      font-size: 18px;
      font-family: 'Kanit', sans-serif ;
      color: #006c68;

    }
    p4{
      font-size: 18px;
      font-weight: 600;
      font-family: 'Kanit', sans-serif;
      color: #00AD26;
    }
    p5{
      font-size: 18px;
      font-weight: 600;
      font-family: 'Kanit', sans-serif;
      color: #FF0202;
    }

    /*.box:hover{background: #C9C9CC; color: #fff;}
    .box1:hover{background: #b0b0ff; color: #fff;}
    .box2:hover{background: #b0b0ff; color: #fff;}*/
</style>
</head>
<body>
<div style="background-image: linear-gradient(#91FFE5,#CB8DF5);background-repeat: no-repeat; background-size: 100% 80%px;">


    <div style="height: 1200px;" >
        <br><br>
        <center>
        <p>
          รายละเอียดสถานประกอบการ
        </p>
        </center>
        <div class="row" >
            <div class="column">
                <div class="box">
              
                <div class="column3">
                  <div class="box2">
                    <a href=?controller=prof&action=company>
                        <img src="./images/back-arrow.png" style="width: 40px; height: 40px;">
                    </a>
                  </div>
                </div>
                <div class="column2">
                   <div class="box2" style="padding-top: 40px;">
            
                   <p2>ชื่อสถานประกอบการ/หน่วยงาน : </p2><p3><?php echo "$com->CompanyName"; ?></p3><br>
                    <p2>ประเภทธุรกิจ : </p2><p3><?php echo "$com->CType"; ?></p3><br>
                    <p2>ที่อยู่ : </p2><p3><?php echo "$com->CAddress $com->CStreet $com->amphure_name_th $com->province_name_th"; ?></p3><br>
                    <p2>เบอร์โทรศัพท์ : </p2><p3><?php echo "$com->CPhone"; ?></p3><br>
                    <p2>เบอร์โทรสาร : </p2><p3><?php echo "$com->CFax"; ?></p3><br>
                    <p2>ชื่อผู้จัดการ : </p2><p3><?php echo "$com->CManager"; ?></p3><br>
                    <p2>ตำแหน่ง : </p2><p3><?php echo "$com->CMngPosition"; ?></p3><br>
                    <p2>ชื่อผู้ประสานงาน : </p2><p3><?php echo "$com->CCoordinator"; ?></p3><br>
                    <p2>ตำแหน่ง : </p2><p3><?php echo "$com->CCoorPosition"; ?></p3><br>
                    <p2>แผนก/ฝ่ายของผู้ประสานงาน : </p2><p3><?php echo "$com->CCoorDepartment"; ?></p3><br>
                    <p2>เบอร์โทรศัพท์ของผู้ประสานงาน : </p2><p3><?php echo "$com->CCoorPhone"; ?></p3><br>
                    <p2>อีเมล (E-mail) ของผู้ประสานงาน : </p2><p3><?php echo "$com->CCoorEmail"; ?></p3><br>
                    <p2>ตำแหน่งงานที่ต้องการรับนิสิตฝึกงาน/สหกิจศึกษา : </p2><p3><?php echo "$com->CRecivePostion"; ?></p3><br>
                    <p2>ลักษณะงานที่นิสิตต้องปฏิบัติ (Job Description) : </p2><p3><?php echo "$com->CJobDescription"; ?></p3><br>
                    <p2>จำนวนที่รับ (คน) : </p2><p3><?php echo "$com->CNumber"; ?></p3><br>
                    <p2>ความสามารถทางวิชาการหรือทักษะที่นิสิตควรมี : </p2><p3><?php echo "$com->CSkillReq"; ?></p3><br>

              
                
              </div>
              </div>
                
              
                            
                </div> 
            </div>  
        </div>
    </div>
</div>
</body>
</html>
