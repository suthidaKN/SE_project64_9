<?php
class Student{
    public $User;
    public $stuID;
    public $stuFN;
    public $stuLN;
    public $stuYear;
    public $stuPhone;
    public $stuFB;
    public $stuTitle;
    public $titleID;
    public $titleName;
    public $Password;

    public function __construct( $User,$stuID, $stuFN,$stuLN, $stuYear,$stuPhone,$stuFB,$stuTitle, $titleID,$titleName,$Password){
        $this->User=$User;
        $this->stuID=$stuID;
        $this->stuFN=$stuFN;
        $this->stuLN=$stuLN;
        $this->stuYear=$stuYear;
        $this->stuPhone=$stuPhone;
        $this->stuFB=$stuFB;
        $this->stuTitle=$stuTitle;
        $this->titleID=$titleID;
        $this->titleName=$titleName;
        $this->Password=$Password;
    }
    public static function getAll(){
        $studentList=[];
        require("./connection_connect.php");
        $sql = "SELECT * FROM students ,title, user
        WHERE title.titleID = students.stuTitle AND user.User=students.User
        GROUP BY students.stuID";
        $result = $conn->query($sql);
        while($row=$result->fetch_assoc()){
            $User = $row['User'];
            $stuID = $row['stuID']; 
            $stuFN = $row['stuFN'];
            $stuLN = $row['stuLN'];
            $stuYear = $row['stuYear'];
            $stuPhone = $row['stuPhone'];
            $stuFB = $row['stuFB'];
            $stuTitle = $row['stuTitle'];
            $titleID = $row['titleID'];
            $titleName = $row['titleName'];
            $Password = $row['Password'];

            $studentlList[] = new Student($User,$stuID,$stuFN,$stuLN,$stuYear,$stuPhone,$stuFB,$stuTitle,$titleID,$titleName,$Password);

        }
        require("./connection_close.php");
        return $studentList;
    }
    public static function get($stuID){
        require("./connection_connect.php");
        $sql ="SELECT * FROM students ,title, user
        WHERE title.titleID = students.stuTitle AND user.User=students.User
        GROUP BY students.stuID";
        $result = $conn->query($sql);
        while($row=$result->fetch_assoc()){
            $User = $row['User'];
            $stuID = $row['stuID']; 
            $stuFN = $row['stuFN'];
            $stuLN = $row['stuLN'];
            $stuYear = $row['stuYear'];
            $stuPhone = $row['stuPhone'];
            $stuFB = $row['stuFB'];
            $stuTitle = $row['stuTitle'];
            $titleID = $row['titleID'];
            $titleName = $row['titleName'];
            $Password = $row['Password'];

            $studentlList[] = new Student($User,$stuID,$stuFN,$stuLN,$stuYear,$stuPhone,$stuFB,$stuTitle,$titleID,$titleName,$Password);

        }
        require("./connection_close.php");
        return $studentList;
    }
}
    
?>