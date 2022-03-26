<!DOCTYPE html>
<html lang="en">
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Thai:wght@500&family=Kanit&family=Short+Stack&family=Sriracha&display=swap" rel="stylesheet">
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
            <input type = "hidden" name = "controller" value = "pages"/>
            <button type = "submit" name = "action" value = "searchCompany" style="width:20%; border-radius: 50px;  padding: 10px; background: #8a8a8a; color: white; border: none; font-size: 17px; border-left: none; cursor: pointer;">ค้นหา...</button>
        </form>
        </div>
        </div>
          
        <?php foreach($CompanyList as $company) {?>
          <div class="column">
              <div class="box">
                <p2><?php echo $company->CompanyName ?></p2><br>
                <p3>ตำแหน่ง</p3><p4><?php echo " : $company->CRecivePostion";?></p4><br>
                <p3>ที่อยู่</p3><p4><?php echo " : $company->CAddress $company->CStreet $company->amphure_name_th $company->province_name_th";?></p4><br>
                <p3>จำนวนที่รับ</p3><p4><?php echo " : $company->CNumber";?></p4><br>
                <div style="text-align: end;">
                  <a href=?controller=pages&action=detailCompany&<?php echo "key=$company->CompanyID"?> style="background-color: #9F9C9C;color: white;padding: 8px 13px;text-align: center;text-decoration: none;display: inline-block;font-family: 'IBM Plex Sans Thai', sans-serif; border-radius: 30px;">รายละเอียด</a> 
                </div>
              </div> 
          </div>
          <?php } ?>
          </div>  
          <br><br><br><br><br>
         </div>
</body>
</html>