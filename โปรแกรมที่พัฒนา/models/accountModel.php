<?php
class Account{
    public $user;
    public $pass;
    public $stuID;
    public $stuFN;
    public $stuLN;
    public $stuPhone;
    public $stuFB;
    public $titleID;
    public $titleName;
    public $pID;
    public $pTitle;
    public $pFN;
    public $pLN;
    public $pEmail;
    public $pPhone;
    public $oID;
    public $oFN;
    public $oLN;

    public function __construct($user,$pass,$stuID,$stuFN,$stuLN,$stuPhone,$stuFB,$titleID,$titleName,$pID,$pTitle,$pFN,$pLN,$pEmail,$pPhone,$oID,$oFN,$oLN)
    {
        $this->user = $user;
        $this->pass = $pass;
        $this->stuID = $stuID;
        $this->stuFN = $stuFN;
        $this->stuLN = $stuLN;
        $this->stuPhone = $stuPhone;
        $this->stuFB = $stuFB;
        $this->titleID = $titleID;
        $this->titleName = $titleName;
        $this->pID = $pID;
        $this->pTitle = $pTitle;
        $this->pFN = $pFN;
        $this->pLN = $pLN;
        $this->pEmail = $pEmail;
        $this->pPhone = $pPhone;
        $this->oID = $oID;
        $this->oFN = $oFN;
        $this->oLN = $oLN;
    }

    public static function getID($ID){
   
        require("./connection_connect.php");
        $sql = "SELECT * FROM `user` 
        LEFT JOIN officer on officer.User = user.User
        LEFT JOIN students on students.User = user.User
        LEFT JOIN prof on prof.User = user.User
        LEFT JOIN title on title.titleID = students.stuTitle
        WHERE students.User = '$ID' 
        or prof.User = '$ID'
        or officer.User  = '$ID'";
        $result = $conn->query($sql);
        $my_row = $result->fetch_assoc();
        $user = $my_row['User'];
        $pass = $my_row['Password'];
        $stuID = $my_row['stuID'];
        $stuFN = $my_row['stuFN'];
        $stuLN = $my_row['stuLN'];
        $stuPhone = $my_row['stuPhone'];
        $stuFB = $my_row['stuFB'];
        $titleID = $my_row['titleID'];
        $titleName = $my_row['titleName'];
        $pID = $my_row['pID'];
        $pTitle = $my_row['pTitle'];
        $pFN = $my_row['pName'];
        $pLN = $my_row['pLastname'];
        $pEmail = $my_row['pEmail'];
        $pPhone = $my_row['pPhone'];
        $oID = $my_row['oID'];
        $oFN = $my_row['oName'];
        $oLN = $my_row['oLastname'];
        require("./connection_close.php");
        return new Account($user,$pass,$stuID,$stuFN,$stuLN,$stuPhone,$stuFB,$titleID,$titleName,$pID,$pTitle,$pFN,$pLN,$pEmail,$pPhone,$oID,$oFN,$oLN);

    }

}
?>
