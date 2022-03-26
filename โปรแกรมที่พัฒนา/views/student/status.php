
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
        height: 300px;
        border-radius: 50px;
        padding: 20px;
        text-align: center;
    }
    .box1{
        background-color: #FFFFFF7C;
        margin-left: 160px;
        margin-right: 160px;
        margin-top: 10px;
        height: 250px;
        border-radius: 50px;
        padding: 30px;
        text-align: center;
    }

    p{
        margin-left: 350px;
        font-weight: 500;
        font-size: 50px;
        font-family: 'IBM Plex Sans Thai', sans-serif;
        color: #58006E;
    }
    p6{
        margin-left: 420px;
        font-weight: 400;
        font-size: 35px;
        font-family: 'IBM Plex Sans Thai', sans-serif;
        color: #58006E;
    }
    p3{
      font-size: 35px;
      font-family: 'Kanit', sans-serif ;
      color: #006c68;
      font-weight: 600;
    
    }
    p2{
      font-size: 35px;
      font-weight: 600;
      font-family: 'Kanit', sans-serif;
      color: #FFC802;
    
    }
    p4{
      font-size: 35px;
      font-weight: 600;
      font-family: 'Kanit', sans-serif;
      color: #00AD26;
    }
    p5{
      font-size: 25px;
      font-weight: 600;
      font-family: 'Kanit', sans-serif;
      color: #FF0202;
    }
    p7{
      font-size: 25px;
      font-family: 'Kanit', sans-serif ;
      color: #006c68;
      
    
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
        <p>
        ตรวจสอบผลการอนุมัติล่าสุด
        </p>
        <div class="row" >
            <div class="column">
              <?php if($JobRequirment->approvedID=="2"){ ?>
                <div class="box">
                  <br><p3><?php echo "สถานะ : "; ?></p3>
                  <p5><?php echo "$JobRequirment->approvedName";?></p5> <br><p5><?php echo "เหตุผล : $JobRequirment->reason"; ?></p5><br><br><p7><?php echo "วันที่ตรวจสอบ : $JobRequirment->JApproveDate "; ?></p7>
                  <br><br><a href=?controller=student&action=detailStatus style="background-color: #9F9C9C;color: white;padding: 10px 20px;text-align: center;text-decoration: none;display: inline-block;font-family: 'IBM Plex Sans Thai', sans-serif; border-radius: 30px; ">รายละเอียด</a> 
                </div> 
                <?php } 
                else { ?>
                <div class="box1">
                  <br><p3><?php echo "สถานะ : "; ?></p3>
                  <?php if(is_null($JobRequirment->approvedID)){ ?> <p2><?php echo "รอการตรวจสอบ";?></p2><?php } ?>
                  <?php if($JobRequirment->approvedID=="1"){ ?> <p4><?php echo "$JobRequirment->approvedName";?></p4><br><p7><?php echo "วันที่ตรวจสอบ : $JobRequirment->JApproveDate "; ?></p7><?php } ?>
                  <br><br><a href=?controller=student&action=detailStatus style="background-color: #9F9C9C;color: white;padding: 10px 20px;text-align: center;text-decoration: none;display: inline-block;font-family: 'IBM Plex Sans Thai', sans-serif; border-radius: 30px; ">รายละเอียด</a> 
                </div> 
                <?php } ?>
            </div>  
        </div>
        <br><br>
        
    </div>
</div>
</body>
</html>
