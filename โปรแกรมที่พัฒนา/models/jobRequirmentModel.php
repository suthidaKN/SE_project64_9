<?php
class JobRequirment{
    public $JobID;
    public $JobTypeID;
    public $JobTypeName;
    public $JobDate;
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
    public $approvedID;
    public $approvedName;
    public $passID;
    public $passName;
    public $cID;
    public $cName;
    public $cAddress;
    public $cStreet;
    public $amphureID;
    public $amphureName;
    public $provinceID;
    public $provinceName;
    public $JobPosition;
    public $JobBossName;
    public $JobBossPosition;
    public $JobCoordinatorName;
    public $JobCoordinatorTel;
    public $JobCoordinatorEmail;
    public $JobStartDate;
    public $JobEndDate;
    public $JobPay;
    public $JobAccommodation;
    public $JApproveDate;
    public $reason;
    public $doc_file;
    public $dateCreate;

    public function __construct($doc_file,$dateCreate,$reason,$JApproveDate,$JobID,$JobTypeID,$JobTypeName,$JobDate,$stuID,$stuFN, $stuLN,$stuPhone,$stuFB,$titleID,$titleName,$pID,$pTitle,$pFN,$pLN,$pEmail,$pPhone,$approvedID,$approvedName,$passID,$passName,$cID,$cName,$cAddress,$cStreet,$amphureID,$amphureName,$provinceID,$provinceName,$JobPosition,$JobBossName,$JobBossPosition,$JobCoordinatorName,$JobCoordinatorTel,$JobCoordinatorEmail,$JobStartDate,$JobEndDate,$JobPay,$JobAccommodation)
    {
        $this->JobID = $JobID;
        $this->JobTypeID = $JobTypeID;
        $this->JobTypeName = $JobTypeName;
        $this->JobDate = $JobDate;
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
        $this->approvedID = $approvedID;
        $this->approvedName = $approvedName;
        $this->passID = $passID;
        $this->passName = $passName;
        $this->cID = $cID;
        $this->cName = $cName;
        $this->cAddress = $cAddress;
        $this->cStreet = $cStreet;
        $this->amphureID = $amphureID;
        $this->amphureName = $amphureName;
        $this->provinceID = $provinceID;
        $this->provinceName = $provinceName;
        $this->JobPosition = $JobPosition;
        $this->JobBossName = $JobBossName;
        $this->JobBossPosition = $JobBossPosition;
        $this->JobCoordinatorName = $JobCoordinatorName;
        $this->JobCoordinatorTel = $JobCoordinatorTel;
        $this->JobCoordinatorEmail = $JobCoordinatorEmail;
        $this->JobStartDate = $JobStartDate;
        $this->JobEndDate = $JobEndDate;
        $this->JobPay = $JobPay;
        $this->JobAccommodation = $JobAccommodation;
        $this->JApproveDate = $JApproveDate;
        $this->reason = $reason;
        $this->doc_file = $doc_file;
        $this->dateCreate=$dateCreate;
    }

    public static function getAll(){

        $JobRequirmentlist = [];
        require("./connection_connect.php");
        $sql = "SELECT *FROM jobrequirment
        LEFT JOIN students ON students.stuID = jobrequirment.JStu
        LEFT JOIN company  ON company.CompanyID = jobrequirment.JCompany
        LEFT JOIN prof  ON prof.pID = jobrequirment.JProf
        LEFT JOIN jobtype  ON jobtype.JobTypeID = jobrequirment.Jtype
        LEFT JOIN title  ON title.titleID = students.stuTitle
        LEFT JOIN appproved  ON  appproved.aID = jobrequirment.JApprove
        LEFT JOIN pass  ON pass.PassID = jobrequirment.JPass
        LEFT JOIN amphures on amphures.amphure_id = company.CTumbon
        LEFT JOIN provinces ON provinces.province_id = amphures.province_id
        LEFT JOIN tbl_pdf on tbl_pdf.doc_name = jobrequirment.JID
        order by students.stuID";
        $result = $conn->query($sql);
        while($my_row = $result->fetch_assoc()){

            $JobID = $my_row['JID'];
            $JobTypeID = $my_row['JobTypeID'];
            $JobTypeName = $my_row['JobTypeName'];
            $JobDate = $my_row['JDate'];
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
            $approvedID = $my_row['aID'];
            $approvedName = $my_row['aName'];
            $passID = $my_row['PassID'];
            $passName = $my_row['PassName'];
            $cID = $my_row['CompanyID'];
            $cName = $my_row['CompanyName'];
            $cAddress = $my_row['CAddress'];
            $cStreet = $my_row['CStreet'];
            $amphureID = $my_row['amphure_id'];
            $amphureName = $my_row['amphure_name_th'];
            $provinceID = $my_row['province_id'];
            $provinceName = $my_row['province_name_th'];
            $JobPosition = $my_row['JPosition'];
            $JobBossName = $my_row['JBossName'];
            $JobBossPosition = $my_row['JBossPosition'];
            $JobCoordinatorName = $my_row['JCoordinatorName'];
            $JobCoordinatorTel = $my_row['JCoordinatorTel'];
            $JobCoordinatorEmail = $my_row['JCoordinatorEmail'];
            $JobStartDate = $my_row['JStartDate'];
            $JobEndDate = $my_row['JEndDate'];
            $JobPay = $my_row['JPay'];
            $JobAccommodation = $my_row['JAccommodation'];
            $reason = $my_row['reason'];
            $JApproveDate = $my_row['JApproveDate'];
            $doc_file = $my_row['doc_file'];
            $dateCreate = $my_row['dateCreate'];
            $JobRequirmentlist[] = new JobRequirment($doc_file,$dateCreate,$reason,$JApproveDate,$JobID,$JobTypeID,$JobTypeName,$JobDate,$stuID,$stuFN, $stuLN,$stuPhone,$stuFB,$titleID,$titleName,$pID,$pTitle,$pFN,$pLN,$pEmail,$pPhone,$approvedID,$approvedName,$passID,$passName,$cID,$cName,$cAddress,$cStreet,$amphureID,$amphureName,$provinceID,$provinceName,$JobPosition,$JobBossName,$JobBossPosition,$JobCoordinatorName,$JobCoordinatorTel,$JobCoordinatorEmail,$JobStartDate,$JobEndDate,$JobPay,$JobAccommodation);
        }
        require("./connection_close.php");
        return $JobRequirmentlist;
    }

    public static function getID($ID){
        $JobRequirmentlist = [];
        require("./connection_connect.php");
        $sql = "SELECT *FROM jobrequirment
        LEFT JOIN students ON students.stuID = jobrequirment.JStu
        LEFT JOIN company  ON company.CompanyID = jobrequirment.JCompany
        LEFT JOIN prof  ON prof.pID = jobrequirment.JProf
        LEFT JOIN jobtype  ON jobtype.JobTypeID = jobrequirment.Jtype
        LEFT JOIN title  ON title.titleID = students.stuTitle
        LEFT JOIN appproved  ON  appproved.aID = jobrequirment.JApprove
        LEFT JOIN pass  ON pass.PassID = jobrequirment.JPass
        LEFT JOIN amphures on amphures.amphure_id = company.CTumbon
        LEFT JOIN provinces ON provinces.province_id = amphures.province_id
        LEFT JOIN tbl_pdf on tbl_pdf.doc_name = jobrequirment.JID
        WHERE jobrequirment.JID = '$ID'";
        $result = $conn->query($sql);
        $my_row = $result->fetch_assoc();
        $JobID = $my_row['JID'];
        $JobTypeID = $my_row['JobTypeID'];
        $JobTypeName = $my_row['JobTypeName'];
        $JobDate = $my_row['JDate'];
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
        $approvedID = $my_row['aID'];
        $approvedName = $my_row['aName'];
        $passID = $my_row['PassID'];
        $passName = $my_row['PassName'];
        $cID = $my_row['CompanyID'];
        $cName = $my_row['CompanyName'];
        $cAddress = $my_row['CAddress'];
        $cStreet = $my_row['CStreet'];
        $amphureID = $my_row['amphure_id'];
        $amphureName = $my_row['amphure_name_th'];
        $provinceID = $my_row['province_id'];
        $provinceName = $my_row['province_name_th'];
        $JobPosition = $my_row['JPosition'];
        $JobBossName = $my_row['JBossName'];
        $JobBossPosition = $my_row['JBossPosition'];
        $JobCoordinatorName = $my_row['JCoordinatorName'];
        $JobCoordinatorTel = $my_row['JCoordinatorTel'];
        $JobCoordinatorEmail = $my_row['JCoordinatorEmail'];
        $JobStartDate = $my_row['JStartDate'];
        $JobEndDate = $my_row['JEndDate'];
        $JobPay = $my_row['JPay'];
        $JobAccommodation = $my_row['JAccommodation'];
        $JApproveDate = $my_row['JApproveDate'];
        $reason = $my_row['reason'];
        $doc_file = $my_row['doc_file'];
        $dateCreate = $my_row['dateCreate'];
        require("./connection_close.php");
        return new JobRequirment($doc_file,$dateCreate,$reason,$JApproveDate,$JobID,$JobTypeID,$JobTypeName,$JobDate,$stuID,$stuFN, $stuLN,$stuPhone,$stuFB,$titleID,$titleName,$pID,$pTitle,$pFN,$pLN,$pEmail,$pPhone,$approvedID,$approvedName,$passID,$passName,$cID,$cName,$cAddress,$cStreet,$amphureID,$amphureName,$provinceID,$provinceName,$JobPosition,$JobBossName,$JobBossPosition,$JobCoordinatorName,$JobCoordinatorTel,$JobCoordinatorEmail,$JobStartDate,$JobEndDate,$JobPay,$JobAccommodation);
    }

    public static function search($key){

        $JobRequirmentlist = [];
        require("./connection_connect.php");
        $sql = "SELECT *FROM jobrequirment
        LEFT JOIN students ON students.stuID = jobrequirment.JStu
        LEFT JOIN company  ON company.CompanyID = jobrequirment.JCompany
        LEFT JOIN prof  ON prof.pID = jobrequirment.JProf
        LEFT JOIN jobtype  ON jobtype.JobTypeID = jobrequirment.Jtype
        LEFT JOIN title  ON title.titleID = students.stuTitle
        LEFT JOIN appproved  ON  appproved.aID = jobrequirment.JApprove
        LEFT JOIN pass  ON pass.PassID = jobrequirment.JPass
        LEFT JOIN amphures on amphures.amphure_id = company.CTumbon
        LEFT JOIN provinces ON provinces.province_id = amphures.province_id
        LEFT JOIN tbl_pdf on tbl_pdf.doc_name = jobrequirment.JID
        WHERE students.stuFN like '%$key%' 
        or jobtype.JobTypeName like '%$key%'
        or students.stuID like '%$key%'
        or appproved.aName like '$key'
        or company.CompanyName like '%$key%'
        or students.stuYear like '%$key%'
        or jobrequirment.JDate like '%$key%'
        order by students.stuID";
        $result = $conn->query($sql);
        while($my_row = $result->fetch_assoc()){

            $JobID = $my_row['JID'];
            $JobTypeID = $my_row['JobTypeID'];
            $JobTypeName = $my_row['JobTypeName'];
            $JobDate = $my_row['JDate'];
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
            $approvedID = $my_row['aID'];
            $approvedName = $my_row['aName'];
            $passID = $my_row['PassID'];
            $passName = $my_row['PassName'];
            $cID = $my_row['CompanyID'];
            $cName = $my_row['CompanyName'];
            $cAddress = $my_row['CAddress'];
            $cStreet = $my_row['CStreet'];
            $amphureID = $my_row['amphure_id'];
            $amphureName = $my_row['amphure_name_th'];
            $provinceID = $my_row['province_id'];
            $provinceName = $my_row['province_name_th'];
            $JobPosition = $my_row['JPosition'];
            $JobBossName = $my_row['JBossName'];
            $JobBossPosition = $my_row['JBossPosition'];
            $JobCoordinatorName = $my_row['JCoordinatorName'];
            $JobCoordinatorTel = $my_row['JCoordinatorTel'];
            $JobCoordinatorEmail = $my_row['JCoordinatorEmail'];
            $JobStartDate = $my_row['JStartDate'];
            $JobEndDate = $my_row['JEndDate'];
            $JobPay = $my_row['JPay'];
            $JobAccommodation = $my_row['JAccommodation'];
            $reason = $my_row['reason'];
            $JApproveDate = $my_row['JApproveDate'];
            $doc_file = $my_row['doc_file'];
            $dateCreate = $my_row['dateCreate'];
            $JobRequirmentlist[] = new JobRequirment($doc_file,$dateCreate,$reason,$JApproveDate,$JobID,$JobTypeID,$JobTypeName,$JobDate,$stuID,$stuFN, $stuLN,$stuPhone,$stuFB,$titleID,$titleName,$pID,$pTitle,$pFN,$pLN,$pEmail,$pPhone,$approvedID,$approvedName,$passID,$passName,$cID,$cName,$cAddress,$cStreet,$amphureID,$amphureName,$provinceID,$provinceName,$JobPosition,$JobBossName,$JobBossPosition,$JobCoordinatorName,$JobCoordinatorTel,$JobCoordinatorEmail,$JobStartDate,$JobEndDate,$JobPay,$JobAccommodation);
        }
        require("./connection_close.php");
        return $JobRequirmentlist;
    }

    public static function searchNull(){

        $JobRequirmentlist = [];
        require("./connection_connect.php");
        $sql = "SELECT *FROM jobrequirment
        LEFT JOIN students ON students.stuID = jobrequirment.JStu
        LEFT JOIN company  ON company.CompanyID = jobrequirment.JCompany
        LEFT JOIN prof  ON prof.pID = jobrequirment.JProf
        LEFT JOIN jobtype  ON jobtype.JobTypeID = jobrequirment.Jtype
        LEFT JOIN title  ON title.titleID = students.stuTitle
        LEFT JOIN appproved  ON  appproved.aID = jobrequirment.JApprove
        LEFT JOIN pass  ON pass.PassID = jobrequirment.JPass
        LEFT JOIN amphures on amphures.amphure_id = company.CTumbon
        LEFT JOIN provinces ON provinces.province_id = amphures.province_id
        LEFT JOIN tbl_pdf on tbl_pdf.doc_name = jobrequirment.JID
        WHERE jobrequirment.JApprove is null
        order by students.stuID";
        $result = $conn->query($sql);
        while($my_row = $result->fetch_assoc()){

            $JobID = $my_row['JID'];
            $JobTypeID = $my_row['JobTypeID'];
            $JobTypeName = $my_row['JobTypeName'];
            $JobDate = $my_row['JDate'];
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
            $approvedID = $my_row['aID'];
            $approvedName = $my_row['aName'];
            $passID = $my_row['PassID'];
            $passName = $my_row['PassName'];
            $cID = $my_row['CompanyID'];
            $cName = $my_row['CompanyName'];
            $cAddress = $my_row['CAddress'];
            $cStreet = $my_row['CStreet'];
            $amphureID = $my_row['amphure_id'];
            $amphureName = $my_row['amphure_name_th'];
            $provinceID = $my_row['province_id'];
            $provinceName = $my_row['province_name_th'];
            $JobPosition = $my_row['JPosition'];
            $JobBossName = $my_row['JBossName'];
            $JobBossPosition = $my_row['JBossPosition'];
            $JobCoordinatorName = $my_row['JCoordinatorName'];
            $JobCoordinatorTel = $my_row['JCoordinatorTel'];
            $JobCoordinatorEmail = $my_row['JCoordinatorEmail'];
            $JobStartDate = $my_row['JStartDate'];
            $JobEndDate = $my_row['JEndDate'];
            $JobPay = $my_row['JPay'];
            $JobAccommodation = $my_row['JAccommodation'];
            $JApproveDate = $my_row['JApproveDate'];
            $reason = $my_row['reason'];
            $doc_file = $my_row['doc_file'];
            $dateCreate = $my_row['dateCreate'];
            $JobRequirmentlist[] = new JobRequirment($doc_file,$dateCreate,$reason,$JApproveDate,$JobID,$JobTypeID,$JobTypeName,$JobDate,$stuID,$stuFN, $stuLN,$stuPhone,$stuFB,$titleID,$titleName,$pID,$pTitle,$pFN,$pLN,$pEmail,$pPhone,$approvedID,$approvedName,$passID,$passName,$cID,$cName,$cAddress,$cStreet,$amphureID,$amphureName,$provinceID,$provinceName,$JobPosition,$JobBossName,$JobBossPosition,$JobCoordinatorName,$JobCoordinatorTel,$JobCoordinatorEmail,$JobStartDate,$JobEndDate,$JobPay,$JobAccommodation);
        }
        require("./connection_close.php");
        return $JobRequirmentlist;
    }

    public static function approve($ID,$key,$date){

        require("./connection_connect.php");
        $sql = "UPDATE `jobrequirment` SET `JApprove` = '$key' , `JApproveDate` = '$date' WHERE `jobrequirment`.`JID` = '$ID' ;";
        $result = $conn->query($sql);
        require("./connection_close.php");
        echo "approve";
        return $result;
    }
    public static function approveReason($reason,$ID){

        require("./connection_connect.php");
        $sql = "UPDATE `jobrequirment` SET `reason` = '$reason' 
        WHERE `jobrequirment`.`JID` = '$ID' ;";
        $result = $conn->query($sql);
        require("./connection_close.php");
        echo "approve";
        return $result;
    }
    public static function Add($JID,$Jtype,$JDate,$JStu,$JPosition,$JBossName,$JBossPosition,$JCompany,$JCoordinatorName,$JCoordinatorTel,$JCoordinatorEmail,$JStartDate,$JEndDate,$JPay,$JAccommodation){
        require("./connection_connect.php");
        $sql="INSERT INTO `jobrequirment` (`JID`, `Jtype`, `JDate`, `JStu`, `JPosition`, `JBossName`, `JBossPosition`, `JCompany`, `JCoordinatorName`, `JCoordinatorTel`, `JCoordinatorEmail`, `JStartDate`, `JEndDate`, `JPay`, `JAccommodation`, `JProf`, `JApprove`, `JPass`, `JApproveDate`, `reason`) 
        VALUES ('$JID', '$Jtype', '$JDate', '$JStu', '$JPosition', '$JBossName', '$JBossPosition', '$JCompany', '$JCoordinatorName', '$JCoordinatorTel', '$JCoordinatorEmail', '$JStartDate', '$JEndDate', '$JPay', '$JAccommodation', NULL, NULL, NULL, NULL, NULL);";
        $result = $conn->query($sql);
        require("./connection_close.php");
        return $result;
    }
    public static function getIDstudent($ID){
        $JobRequirmentlist = [];
        require("./connection_connect.php");
        $sql = "SELECT *FROM jobrequirment
        LEFT JOIN students ON students.stuID = jobrequirment.JStu
        LEFT JOIN company  ON company.CompanyID = jobrequirment.JCompany
        LEFT JOIN prof  ON prof.pID = jobrequirment.JProf
        LEFT JOIN jobtype  ON jobtype.JobTypeID = jobrequirment.Jtype
        LEFT JOIN title  ON title.titleID = students.stuTitle
        LEFT JOIN appproved  ON  appproved.aID = jobrequirment.JApprove
        LEFT JOIN pass  ON pass.PassID = jobrequirment.JPass
        LEFT JOIN amphures on amphures.amphure_id = company.CTumbon
        LEFT JOIN provinces ON provinces.province_id = amphures.province_id
        LEFT JOIN tbl_pdf on tbl_pdf.doc_name = jobrequirment.JID
        WHERE students.stuID = '$ID'";
        $result = $conn->query($sql);
        $my_row = $result->fetch_assoc();
        $JobID = $my_row['JID'];
        $JobTypeID = $my_row['JobTypeID'];
        $JobTypeName = $my_row['JobTypeName'];
        $JobDate = $my_row['JDate'];
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
        $approvedID = $my_row['aID'];
        $approvedName = $my_row['aName'];
        $passID = $my_row['PassID'];
        $passName = $my_row['PassName'];
        $cID = $my_row['CompanyID'];
        $cName = $my_row['CompanyName'];
        $cAddress = $my_row['CAddress'];
        $cStreet = $my_row['CStreet'];
        $amphureID = $my_row['amphure_id'];
        $amphureName = $my_row['amphure_name_th'];
        $provinceID = $my_row['province_id'];
        $provinceName = $my_row['province_name_th'];
        $JobPosition = $my_row['JPosition'];
        $JobBossName = $my_row['JBossName'];
        $JobBossPosition = $my_row['JBossPosition'];
        $JobCoordinatorName = $my_row['JCoordinatorName'];
        $JobCoordinatorTel = $my_row['JCoordinatorTel'];
        $JobCoordinatorEmail = $my_row['JCoordinatorEmail'];
        $JobStartDate = $my_row['JStartDate'];
        $JobEndDate = $my_row['JEndDate'];
        $JobPay = $my_row['JPay'];
        $JobAccommodation = $my_row['JAccommodation'];
        $JApproveDate = $my_row['JApproveDate'];
        $reason = $my_row['reason'];
        $doc_file = $my_row['doc_file'];
        $dateCreate = $my_row['dateCreate'];
        require("./connection_close.php");
        return new JobRequirment($doc_file,$dateCreate,$reason,$JApproveDate,$JobID,$JobTypeID,$JobTypeName,$JobDate,$stuID,$stuFN, $stuLN,$stuPhone,$stuFB,$titleID,$titleName,$pID,$pTitle,$pFN,$pLN,$pEmail,$pPhone,$approvedID,$approvedName,$passID,$passName,$cID,$cName,$cAddress,$cStreet,$amphureID,$amphureName,$provinceID,$provinceName,$JobPosition,$JobBossName,$JobBossPosition,$JobCoordinatorName,$JobCoordinatorTel,$JobCoordinatorEmail,$JobStartDate,$JobEndDate,$JobPay,$JobAccommodation);
    }
    public static function getCompany(){

        $JobRequirmentlist = [];
        require("./connection_connect.php");
        $sql = "SELECT *FROM jobrequirment
        LEFT JOIN students ON students.stuID = jobrequirment.JStu
        LEFT JOIN company  ON company.CompanyID = jobrequirment.JCompany
        LEFT JOIN prof  ON prof.pID = jobrequirment.JProf
        LEFT JOIN jobtype  ON jobtype.JobTypeID = jobrequirment.Jtype
        LEFT JOIN title  ON title.titleID = students.stuTitle
        LEFT JOIN appproved  ON  appproved.aID = jobrequirment.JApprove
        LEFT JOIN pass  ON pass.PassID = jobrequirment.JPass
        LEFT JOIN amphures on amphures.amphure_id = company.CTumbon
        LEFT JOIN provinces ON provinces.province_id = amphures.province_id
        LEFT JOIN tbl_pdf on tbl_pdf.doc_name = jobrequirment.JID
        GROUP by company.CompanyID";
        $result = $conn->query($sql);
        while($my_row = $result->fetch_assoc()){

            $JobID = $my_row['JID'];
            $JobTypeID = $my_row['JobTypeID'];
            $JobTypeName = $my_row['JobTypeName'];
            $JobDate = $my_row['JDate'];
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
            $approvedID = $my_row['aID'];
            $approvedName = $my_row['aName'];
            $passID = $my_row['PassID'];
            $passName = $my_row['PassName'];
            $cID = $my_row['CompanyID'];
            $cName = $my_row['CompanyName'];
            $cAddress = $my_row['CAddress'];
            $cStreet = $my_row['CStreet'];
            $amphureID = $my_row['amphure_id'];
            $amphureName = $my_row['amphure_name_th'];
            $provinceID = $my_row['province_id'];
            $provinceName = $my_row['province_name_th'];
            $JobPosition = $my_row['JPosition'];
            $JobBossName = $my_row['JBossName'];
            $JobBossPosition = $my_row['JBossPosition'];
            $JobCoordinatorName = $my_row['JCoordinatorName'];
            $JobCoordinatorTel = $my_row['JCoordinatorTel'];
            $JobCoordinatorEmail = $my_row['JCoordinatorEmail'];
            $JobStartDate = $my_row['JStartDate'];
            $JobEndDate = $my_row['JEndDate'];
            $JobPay = $my_row['JPay'];
            $JobAccommodation = $my_row['JAccommodation'];
            $reason = $my_row['reason'];
            $JApproveDate = $my_row['JApproveDate'];
            $doc_file = $my_row['doc_file'];
            $dateCreate = $my_row['dateCreate'];
            $JobRequirmentlist[] = new JobRequirment($doc_file,$dateCreate,$reason,$JApproveDate,$JobID,$JobTypeID,$JobTypeName,$JobDate,$stuID,$stuFN, $stuLN,$stuPhone,$stuFB,$titleID,$titleName,$pID,$pTitle,$pFN,$pLN,$pEmail,$pPhone,$approvedID,$approvedName,$passID,$passName,$cID,$cName,$cAddress,$cStreet,$amphureID,$amphureName,$provinceID,$provinceName,$JobPosition,$JobBossName,$JobBossPosition,$JobCoordinatorName,$JobCoordinatorTel,$JobCoordinatorEmail,$JobStartDate,$JobEndDate,$JobPay,$JobAccommodation);
        }
        require("./connection_close.php");
        return $JobRequirmentlist;
    }
    public static function sentCountAll(){
        require("./connection_connect.php");
        $sql = "SELECT *from jobrequirment";
        $result = $conn->query($sql);
        $row=$result->fetch_all();
        $row = count($row);
        require("./connection_close.php");
        return $row;
    }
    public static function getJobReqStudent($ID){

        $JobRequirmentlist = [];
        require("./connection_connect.php");
        $sql = "SELECT *FROM jobrequirment
        LEFT JOIN students ON students.stuID = jobrequirment.JStu
        LEFT JOIN company  ON company.CompanyID = jobrequirment.JCompany
        LEFT JOIN prof  ON prof.pID = jobrequirment.JProf
        LEFT JOIN jobtype  ON jobtype.JobTypeID = jobrequirment.Jtype
        LEFT JOIN title  ON title.titleID = students.stuTitle
        LEFT JOIN appproved  ON  appproved.aID = jobrequirment.JApprove
        LEFT JOIN pass  ON pass.PassID = jobrequirment.JPass
        LEFT JOIN amphures on amphures.amphure_id = company.CTumbon
        LEFT JOIN provinces ON provinces.province_id = amphures.province_id
        LEFT JOIN tbl_pdf on tbl_pdf.doc_name = jobrequirment.JID
        WHERE students.stuID = '$ID'";
        $result = $conn->query($sql);
        while($my_row = $result->fetch_assoc()){

            $JobID = $my_row['JID'];
            $JobTypeID = $my_row['JobTypeID'];
            $JobTypeName = $my_row['JobTypeName'];
            $JobDate = $my_row['JDate'];
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
            $approvedID = $my_row['aID'];
            $approvedName = $my_row['aName'];
            $passID = $my_row['PassID'];
            $passName = $my_row['PassName'];
            $cID = $my_row['CompanyID'];
            $cName = $my_row['CompanyName'];
            $cAddress = $my_row['CAddress'];
            $cStreet = $my_row['CStreet'];
            $amphureID = $my_row['amphure_id'];
            $amphureName = $my_row['amphure_name_th'];
            $provinceID = $my_row['province_id'];
            $provinceName = $my_row['province_name_th'];
            $JobPosition = $my_row['JPosition'];
            $JobBossName = $my_row['JBossName'];
            $JobBossPosition = $my_row['JBossPosition'];
            $JobCoordinatorName = $my_row['JCoordinatorName'];
            $JobCoordinatorTel = $my_row['JCoordinatorTel'];
            $JobCoordinatorEmail = $my_row['JCoordinatorEmail'];
            $JobStartDate = $my_row['JStartDate'];
            $JobEndDate = $my_row['JEndDate'];
            $JobPay = $my_row['JPay'];
            $JobAccommodation = $my_row['JAccommodation'];
            $reason = $my_row['reason'];
            $JApproveDate = $my_row['JApproveDate'];
            $doc_file = $my_row['doc_file'];
            $dateCreate = $my_row['dateCreate'];
            $JobRequirmentlist[] = new JobRequirment($doc_file,$dateCreate,$reason,$JApproveDate,$JobID,$JobTypeID,$JobTypeName,$JobDate,$stuID,$stuFN, $stuLN,$stuPhone,$stuFB,$titleID,$titleName,$pID,$pTitle,$pFN,$pLN,$pEmail,$pPhone,$approvedID,$approvedName,$passID,$passName,$cID,$cName,$cAddress,$cStreet,$amphureID,$amphureName,$provinceID,$provinceName,$JobPosition,$JobBossName,$JobBossPosition,$JobCoordinatorName,$JobCoordinatorTel,$JobCoordinatorEmail,$JobStartDate,$JobEndDate,$JobPay,$JobAccommodation);
        }
        require("./connection_close.php");
        return $JobRequirmentlist;
    }

    // $JobID;
    // $JobTypeID;
    // $JobTypeName;
    // $JobDate;
    // $stuID;
    // $stuFN;
    // $stuLN;
    // $stuPhone;
    // $stuFB;
    // $titleID;
    // $titleName;
    // $pID;
    // $pTitle;
    // $pFN;
    // $pLN;
    // $pEmail;
    // $pPhone;
    // $approvedID;
    // $approvedName;
    // $passID;
    // $passName;
    // $cID;
    // $cName;
    // $cAddress;
    // $cStreet;
    // $districtsID;
    // $zipcode;
    // $districtsName;
    // $amphureID;
    // $amphureName;
    // $provinceID;
    // $provinceName;
    // $JobPosition;
    // $JobBossName;
    // $JobBossPosition;
    // $JobCoordinatorName;
    // $JobCoordinatorTel;
    // $JobCoordinatorEmail;
    // $JobStartDate;
    // $JobEndDate;
    // $JobPay;
    // $JobAccommodation;
}
?>