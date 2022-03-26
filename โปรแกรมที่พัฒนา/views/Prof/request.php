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
  <script>
  $(function() {
    $( "#datepicker" ).datepicker({
      changeMonth: true,
      changeYear: true
    });
  });
  </script>
  <style>
    .dropbtn {
      background-color: #BD59FF; 
      color: #fff;
      padding: 10px;
      font-size: 17px;
      border-radius: 8px;
      border: none;
      cursor: pointer;
    }

    .dropdown {
      position: relative;
      border-radius: 10px;
      display: inline-block;
    }

    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #F6DAFF;
      min-width: 160px;
      text-align: start;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
      z-index: 1;
    }

    .dropdown-content a {
      color: #440058;
      font-family: 'Kanit', sans-serif ;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
      border-radius: 10px;
    }

    .dropdown-content a:hover {background-color: #B037D4;color:#F6DAFF;}

    .dropdown:hover .dropdown-content {
      display: block;
    }

    .dropdown:hover .dropbtn {
      background-color: #440058;
    }
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
        background-color: #FFFFFF;
        margin-left: 200px;
        margin-right: 200px;
        margin-top: 10px;
        height: 60px;
        border-radius: 40px;
        padding: 15px;
    }
    .box1{
        margin-left: 210px;
        margin-right: 200px;
    }
    .column2 {
      float: left;
      width: 22%; 
    }
    
    .box2{
        padding-left: 20px;
        color: #000;
        font-size: 20px;
    }
    p{
      margin-left: 400px;
      font-weight: 500;
      font-size: 50px;
      font-family: 'IBM Plex Sans Thai', sans-serif;
      color: #58006E;
    }
    p2{
      font-size: 16px;
      font-family: 'Kanit', sans-serif ;

    }
    p3{
      font-size: 18px;
      font-weight: 600;
      font-family: 'Kanit', sans-serif;
      color: #FFC802;
    }
    p4{
      font-size: 18px;
      font-weight: 600;
      font-family: 'Kanit', sans-serif;
      color: #00AA25;
    }
    p5{
      font-size: 18px;
      font-weight: 600;
      font-family: 'Kanit', sans-serif;
      color: #FF0202;
    }
    .box:hover{background: #D2FFC9;}
    /*.box1:hover{background: #b0b0ff; color: #fff;}
    .box2:hover{background: #b0b0ff; color: #fff;}*/
  </style>
</head>
<body>
<div style="background-image: linear-gradient(#91FFE5,#CB8DF5);background-repeat: no-repeat; background-size: 100% 80%px;">

        <br><br>
        <p>
          ตรวจสอบคำร้องของนิสิต
        </p>
       
        <div class="row" >
            <div class="column">
                <div class="box1">
                    <form method ="get" action="">
                        <input type = "text" placeholder="Search..." name = "key" style="width:78%; border-radius: 50px;  padding: 10px; font-size: 17px; border: none; background: #FEF5FF;">
                        <input type = "hidden" name = "controller" value = "prof"/>
                        <button type = "submit" name = "action" value = "search" style="width:20%; border-radius: 50px;  padding: 10px; background: #94A19A; color: #FFFFFF; border: none; font-size: 17px; border-left: none; cursor: pointer;">ค้นหา...</button>
                    </form>
                </div>
            </div> 
        </div>
        <div style="text-align: center;">
        <form method ="get" action="">
            <a class="btn btn-default" style="background-color: #BD59FF; color: #fff; border-radius: 10px; height: 43px; " href=?controller=prof&action=request>คำร้องทั้งหมด</a>
            <div class="dropdown">
                <p6 class="dropbtn">ค้นหาตามสถานะ</p6>
                <div class="dropdown-content">
                    <a href=?controller=prof&action=search&<?php echo "key=อนุมัติ"?>>อนุมัติ</a>
                    <a href=?controller=prof&action=search&<?php echo "key=ไม่อนุมัติ"?>>ไม่อนุมัติ</a>
                    <a href=?controller=prof&action=search&<?php echo "key=รอการตรวจสอบ"?>>รอการตรวจสอบ</a>
                </div>
            </div>
            <div class="dropdown">
                <p6 class="dropbtn">ค้นหาตามปีการศึกษา</p6>
                <div class="dropdown-content">
                    <a href=?controller=prof&action=search&<?php echo "key=2560"?>>2560</a>
                    <a href=?controller=prof&action=search&<?php echo "key=2561"?>>2561</a>
                    <a href=?controller=prof&action=search&<?php echo "key=2562"?>>2562</a>
                    <a href=?controller=prof&action=search&<?php echo "key=2563"?>>2563</a>
                    <a href=?controller=prof&action=search&<?php echo "key=2564"?>>2564</a>
                    
                </div>
            </div>
            <div class="dropdown" >
                <p6 class="dropbtn" >ค้นหาตามวันที่</p6>
                <div class="dropdown-content" >
                    <input type="text" name="key" style="border-radius: 8px;  padding: 6px; font-size: 17px; border: none;" value="" placeholder="--เลือกวันที่--" id="datepicker"/>
                    <input type = "hidden" name = "controller" value = "prof"/>
                    <button class="btn btn-default" type="submit" name="action" value="search" style="background-color: #AB57E2; color: #fff" >ค้นหา</button>  
                </div>
            </div>
            </form>        
        </div>
        <div class="row" >
            <div class="column">
                <div class="box" style="background-color: #006c68;">
                    <div class="column2">
                        <div class="box2" style="color: fff;">
                            <p2>ชื่อ-นามสกุล</p2>
                        </div> 
                    </div>  
                    <div class="column2">
                        <div class="box2" style="color: fff;">
                            <p2>รหัสนิสิต</p2>
                        </div> 
                    </div>  
                    <div class="column2">
                        <div class="box2" style="color: fff;">
                            <p2>ประเภท</p2>
                        </div> 
                    </div>  
                    <div class="column2">
                        <div class="box2" style="color: fff;">
                            <p2>สถานะ</p2>
                        </div> 
                    </div>
                </div> 
            </div>
            <?php foreach($JobRequirment_List as $JobRequirment){?>
            <div class="column">
                <div class="box">
                    <div class="column2">
                        <div class="box2">
                            <p2><?php echo "$JobRequirment->stuFN $JobRequirment->stuLN";?></p2>
                        </div> 
                    </div>  
                    <div class="column2">
                        <div class="box2">
                            <p2><?php echo "$JobRequirment->stuID";?></p2>
                        </div> 
                    </div>  
                    <div class="column2">
                        <div class="box2">
                            <p2><?php echo "$JobRequirment->JobTypeName";?></p2>
                        </div> 
                    </div>  
                    <div class="column2">
                        <div class="box2">
                        <?php if(is_null($JobRequirment->approvedName)){ ?> <p3><?php echo "รอการตรวจสอบ";?></p3><?php } ?>
                        <?php if($JobRequirment->approvedID=="1"){ ?> <p4><?php echo "$JobRequirment->approvedName";?></p4><?php } ?>
                        <?php if($JobRequirment->approvedID=="2"){ ?> <p5><?php echo "$JobRequirment->approvedName";?></p5><?php } ?>
                        </div> 
                    </div>
                    <form method ="get" action="">
                        <input type = "hidden" name = "ID" value = "<?php echo "$JobRequirment->JobID";?>"/>
                        <input type = "hidden" name = "controller" value = "prof"/>
                        <button type = "submit" name = "action" value = "detail" style="width:9%; border-radius: 10px;  padding: 5px; background: #87A59E; color: #FFFFFF; border: none; font-size: 13px; border-left: none; cursor: pointer;">รายละเอียด</button> 
                    </form>
                </div> 
            </div>
            <?php
            }
            ?>
        </div>
         <br><br><br><br><br><br>
</div>
</body>
</html>