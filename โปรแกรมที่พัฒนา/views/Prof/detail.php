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
        margin-left: 160px;
        margin-right: 160px;
        margin-top: 10px;
        height: 930px;
        border-radius: 50px;
        padding: 30px;
        
    }
    .column2 {
        float: left;
        width: 35%; 
    }
    .column3 {
        float: left;
        width: 65%; 
    }
        
    .box2{
        padding-left: 10px;
        padding-top: 10px;
        color: #000;
        font-size: 20px;
    }

    p{
        margin-left: 450px;
        font-weight: 500;
        font-size: 50px;
        font-family: 'IBM Plex Sans Thai', sans-serif;
        color: #58006E;
    }
    p3{
      font-size: 20px;
      font-family: 'Kanit', sans-serif ;
      color: #006c68;
      font-weight: 600;

    }
    p2{
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
        <br>
        <p>
          รายละเอียดคำร้อง
        </p>
        <div class="row" >
            <div class="column">
                <div class="box">
                    <div class="column2">
                    <a href=?controller=prof&action=request>
                        <img src="./images/back-arrow.png" style="width: 40px; height: 40px;">
                    </a>
                        <div class="box2" style="text-align: center; margin-top: 20px;">
                            <?php $img = "./images/".$JobRequirment->stuID.".jpg"; ?>
                            <img src="<?php echo $img; ?>" style="width: 250px; height: 250px; border-radius: 250px">
                        </div> 
                    </div> 
                    <div class="column3">
                        <div class="box2">
                            <p3><?php echo"$JobRequirment->titleName$JobRequirment->stuFN  $JobRequirment->stuLN"; ?></p3><br>
                            <p3><?php echo"คณะ : "; ?></p3><p2><?php echo"วิศวกรรมศาสตร์ กำแพงแสน"; ?></p2><br>
                            <p3><?php echo"สาขา : "; ?></p3><p2><?php echo "วิศวกรรมคอมพิวเตอร์"; ?></p2><br>
                            <p3><?php echo"ภาค : "; ?></p3><p2><?php echo "ปกติ"; ?></p2><br>
                            <p3><?php echo"รหัสนิสิต : "; ?></p3><p2><?php echo "$JobRequirment->stuID"; ?></p2><br>
                            <p3><?php echo"เบอร์โทรศัพท์ติดต่อ : "; ?></p3><p2><?php echo "$JobRequirment->stuPhone"; ?></p2><br>
                            <p3><?php echo "Facebook : "; ?></p3><p2><?php echo "$JobRequirment->stuFB"; ?></p2><br>
                            <p3><?php echo "ตำแหน่งที่ไปฝึกงาน : "; ?></p3><p2><?php  echo "$JobRequirment->JobPosition";?></p2><br><br>

                            <p3><?php echo "ออกหนังสือขอความอนุเคราะห์ถึง"; ?></p3><br>
                            <p3><?php echo "$JobRequirment->JobBossPosition "; ?></p3><p2><?php echo "$JobRequirment->JobBossName"; ?></p2><br>
                            <p2><?php echo "$JobRequirment->cName"; ?></p2><br>
                            <p2><?php echo "$JobRequirment->cAddress $JobRequirment->cStreet $JobRequirment->amphureName $JobRequirment->provinceName"; ?></p2><br><br>

                            <p3><?php echo "ผู้ประสานงาน"; ?></p3><br>
                            <p2><?php echo "$JobRequirment->JobCoordinatorName"; ?></p2><br>
                            <p2><?php echo "โทร : $JobRequirment->JobCoordinatorTel"; ?></p2><br>
                            <p2><?php echo "Email : $JobRequirment->JobCoordinatorEmail"; ?></p2><br><br>

                            <p3><?php echo "ระยะเวลาฝึกงาน : "; ?></p3><p2><?php echo "$JobRequirment->JobStartDate - $JobRequirment->JobEndDate"; ?></p2><br>
                            <p3><?php echo "จำนวนค่าตอบแทน : "; ?></p3><p2><?php if($JobRequirment->JobPay==0)echo"ไม่มีค่าตอบแทน"; else echo "$JobRequirment->JobPay"; ?></p2><br>
                            <p3><?php echo "ที่พัก : "; ?></p3><p2><?php echo "$JobRequirment->JobAccommodation"; ?></p2><br>
                            <p3><?php echo "เอกสาร : "; ?></p3>
                            <a href="docs/<?php echo $JobRequirment->doc_file ?>" target="_blank"> <?php echo $JobRequirment->doc_file ?></a><br>
                           

                            <?php if(is_null($JobRequirment->approvedID)) { ?>
                            <p2><?php echo "วันที่อัพโหลดเอกสาร : $JobRequirment->dateCreate "; ?></p2><br><br>
                            <form action="" method="post" enctype="multipart/form-data" >
                                <input type="hidden" name="ID"  value="<?php echo "$JobRequirment->JobID"; ?>">
                                <button type="submit"  name="key" value="1" class="btn btn-default" style="background-color: #22CE00; color: #fff; border-radius: 10px; height: 43px; ">อนุมติ</button>
                                <button type="submit"  name="key" value="2" class="btn btn-default" style="background-color: #FF5959; color: #fff; border-radius: 10px; height: 43px; ">ไม่อนุมติ</button>
                            </form>
    
                            
                            <?php }
                            else { ?>
                                <?php if($JobRequirment->approvedID == '2') { ?>
                                    <br><p3><?php echo "สถานะ : "; ?></p3><p5><?php echo "$JobRequirment->approvedName"; ?></p5><br> 
                                    <p5><?php echo "เหตุผล : $JobRequirment->reason"; ?></p5><br>
                                <?php } ?>
                                <?php if($JobRequirment->approvedID == '1') { ?>
                                    <br><p3><?php echo "สถานะ : "; ?></p3><p4><?php echo "$JobRequirment->approvedName"; ?></p4><br> 
                                <?php } ?>
                            <p3><?php echo "วันที่ตรวจสอบ : $JobRequirment->JApproveDate "; ?></p3><br><br>
                            <?php } ?>
                            
                        </div> 
                    </div> 
                </div> 
            </div>  
        </div>
    </div>
</div>
</body>
</html>


<?php 

    if (isset($_POST['ID'])) {
        date_default_timezone_set('asia/bangkok');
        $date = date('Y-m-d');
        $ID = $_POST['ID'];
        $key = $_POST['key'];
         
        require_once("./models/jobRequirmentModel.php");
        JobRequirment::approve($ID,$key,$date);

        echo '<script type="text/javascript">';
        echo "var ID = '$ID';"; // ส่งค่า $data จาก PHP ไปยังตัวแปร data ของ Javascript
        echo '</script>';

        if($key==1){ ?>
            <script>
             swal({
                title: "อนุมัติ",
                text: "อนุมัติคำร้องขอฝึกงานเรียบร้อย",
                type: "success",
             },function() {
                window.location = "indexLogin.php?controller=prof&action=detail&<?php echo "ID=$ID"; ?>"; //หน้าที่ต้องการให้กระโดดไป
             });

          </script>';
        <?php   
        }else{
           ?>
            <script>
                swal({
                    title: "ไม่อนุมัติ",
                    text: "กรุณาบอกเหตุผลที่ไม่ผ่านการอนุมัติ : ",
                    imageUrl: './images/exclamation-mark.png',
                    type: "input",
                    closeOnConfirm: false,
                    inputPlaceholder: "กรุณาบอกเหตุผล...."
                  }, function (inputValue) {
                    if (inputValue === false) return false;
                    if (inputValue === "") {
                        
                        swal.showInputError("กรุณาบอกเหตุผล!");
                        return false;
                    }
                    var nn = inputValue;
                    var va = '1';
                    
                    $.ajax({
                        url: "reason.php",
                        data: {value:nn,ID:ID},
                        method: 'POST',
                        success: function (data) {
                            // success
                        }
                    });
                    swal({
                        title:"เรียบร้อย!",
                        text: "เหตุผลที่ไม่ผ่านการอนุมัติ : " + inputValue, 
                        type: "success"
                    },function() {
                        window.location = "indexLogin.php?controller=prof&action=detail&<?php echo "ID=$ID"; ?>"; //หน้าที่ต้องการให้กระโดดไป
                    });
                   
                    }
               
                  );
            </script>
            <?php

        }
}

?>