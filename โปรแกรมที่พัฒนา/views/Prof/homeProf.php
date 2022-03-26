<!DOCTYPE html>
<html lang="en">
<head>
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
    margin-left: 50px;
    margin-right: 50px;
    margin-top: 10px;
    height: 300px;
    border-radius: 50px;
    padding: 30px;
    
}
.column1 {
  float: left;
  width: 50%;
}
 
.box1{
    background-color: #FFFFFFb9;
    margin-left: 50px;
    margin-top: 15px;
    height: 300px;
    border-radius: 50px;
    padding: 30px;
    
}
.box2{
    background-color: #FFFFFFb9;
    margin-right: 50px;
    margin-top: 15px;
    height: 300px;
    border-radius: 50px;
    padding: 30px;
    
}
.box3{
    background-color: #FF9F9FB9;
    margin-left: 20px;
    margin-right:20px;
    margin-top: 10px;
    margin-bottom: 20px;
    height: 200px;
    border-radius: 50px;
    padding: 30px;
}
p{
  margin-left: 70px;
  font-size: 30px;
  font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
  color: #58006E;
}

    /*.box:hover{background: #C9C9CC; color: #fff;}
    .box1:hover{background: #b0b0ff; color: #fff;}
    .box2:hover{background: #b0b0ff; color: #fff;}*/
</style>
</head>
<body>
<div style="background-image: linear-gradient(#91FFE5,#CB8DF5);background-repeat: no-repeat; background-size: 100% 80%px;">


        <div style="height: 800px;" >
        <br>
        <p>
          ONLINE INTERNSHIP MANAGEMENT SYSTEM
        </p>
          <div class="row" >
          <div class="column">
              <div class="box">
                <div style="text-align: end;">
                    <a class="btn btn-default" style="background-color: #B700FF; color: #fff" href=?controller=Tiiang&action=searchTo>--อัพโหลดประกาศ--</a> 
                </div>
                <h4>Announce</h4>
                <a href="?controller=pages&action=index">อ่านต่อ...</a> <br>
                
              </div> 
          </div>
          <div class="column">
              <div class="box">
                <div style="text-align: end;">
                    <a class="btn btn-default" style="background-color: #B700FF; color: #fff" href=?controller=Tiiang&action=searchTo>--อัพโหลดเอกสาร--</a> 
                </div>
                <h4>Document</h4>
                <a href="?controller=pages&action=index">โหลดเอกสาร</a>
              </div> 
          </div>    
        </div>
        </div>
</div>
</body>
</html>