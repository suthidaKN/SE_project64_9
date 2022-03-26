<?php
class Company{
    public $CompanyID;
    public $CompanyName;
    public $CAddress;
    public $CStreet;
    public $amphure_id;
    public $amphure_name_th;
    public $provinceid;
    public $province_name_th;
    public $CType;
    public $CPhone;
    public $CFax;
    public $CManager;
    public $CMngPosition;
    public $CCoordinator;
    public $CCoorPosition;
    public $CCoorDepartment;
    public $CCoorPhone;
    public $CCoorEmail;
    public $CRecivePostion;
    public $CJobDescription;
    public $CNumber;
    public $CSkillReq;


    public function __construct($CompanyID,$CompanyName, $CTumbon,$CAddress,$CStreet,$amphure_id,$amphure_name_th,$province_id,
    $province_name_th,$CType,$CPhone,$CFax,$CManager,$CMngPosition,$CCoordinator,$CCoorPosition,$CCoorDepartment,$CCoorPhone,$CCoorEmail,
    $CRecivePostion,$CJobDescription,$CNumber,$CSkillReq){
        $this->CompanyID=$CompanyID;
        $this->CompanyName=$CompanyName;
        $this->CAddress=$CAddress;
        $this->CStreet=$CStreet;
        $this->amphure_id=$amphure_id;
        $this->amphure_name_th=$amphure_name_th;
        $this->province_id=$province_id;
        $this->province_name_th=$province_name_th;
        $this->CType=$CType;
        $this->CTumbon = $CTumbon;
        $this->CPhone=$CPhone;
        $this->CFax=$CFax;
        $this->CManager=$CManager;
        $this->CMngPosition=$CMngPosition;
        $this->CCoordinator=$CCoordinator;
        $this->CCoorPosition= $CCoorPosition;
        $this->CCoorDepartment=$CCoorDepartment;
        $this->CCoorPhone=$CCoorPhone;
        $this->CCoorEmail= $CCoorEmail;
        $this->CRecivePostion=$CRecivePostion;
        $this->CJobDescription=$CJobDescription;
        $this->CNumber=$CNumber;
        $this->CSkillReq=$CSkillReq;
    
    }
    public static function getID($ID){
        require("./connection_connect.php");
        $sql = "SELECT * FROM company 
        LEFT JOIN amphures on amphures.amphure_id = company.CTumbon
        LEFT JOIN provinces ON provinces.province_id = amphures.province_id
        where company.CompanyID = '$ID'";
        $result = $conn->query($sql);
        $row=$result->fetch_assoc();
            $CompanyID = $row['CompanyID'];
            $CompanyName = $row['CompanyName']; 
            $CTumbon = $row['CTumbon'];
            $CAddress = $row['CAddress'];
            $CStreet = $row['CStreet'];
            $amphure_id = $row['amphure_id'];
            $amphure_name_th = $row['amphure_name_th'];
            $province_id = $row['province_id'];
            $province_name_th = $row['province_name_th'];
            $CType = $row['CType'];
            $CPhone = $row['CPhone'];
            $CFax = $row['CFax'];
            $CManager = $row['CManager'];
            $CMngPosition = $row['CMngPosition'];
            $CCoordinator = $row['CCoordinator'];
            $CCoorPosition = $row['CCoorPosition'];
            $CCoorDepartment = $row['CCoorDepartment'];
            $CCoorPhone = $row['CCoorPhone'];
            $CCoorEmail = $row['CCoorEmail'];
            $CRecivePostion = $row['CReceivePosition'];
            $CJobDescription = $row['CJobDescription'];
            $CNumber = $row['CNumber'];
            $CSkillReq = $row['CSkillReq'];
        
            require("./connection_close.php");
            return new Company($CompanyID,$CompanyName, $CAddress,$CStreet, $CTumbon,$amphure_id,$amphure_name_th,$province_id,
            $province_name_th,$CType,$CPhone,$CFax,$CManager,$CMngPosition,$CCoordinator,$CCoorPosition,$CCoorDepartment,$CCoorPhone,$CCoorEmail,
            $CRecivePostion,$CJobDescription,$CNumber,$CSkillReq);
       
    }
    public static function getAll(){
        $companyList=[];
        require("./connection_connect.php");
        $sql = "SELECT * FROM company 
        LEFT JOIN amphures on amphures.amphure_id = company.CTumbon
        LEFT JOIN provinces ON provinces.province_id = amphures.province_id";
        $result = $conn->query($sql);
        while($row=$result->fetch_assoc()){
            $CompanyID = $row['CompanyID'];
            $CompanyName = $row['CompanyName']; 
            $CTumbon = $row['CTumbon'];
            $CAddress = $row['CAddress'];
            $CStreet = $row['CStreet'];
            $amphure_id = $row['amphure_id'];
            $amphure_name_th = $row['amphure_name_th'];
            $province_id = $row['province_id'];
            $province_name_th = $row['province_name_th'];
            $CType = $row['CType'];
            $CPhone = $row['CPhone'];
            $CFax = $row['CFax'];
            $CManager = $row['CManager'];
            $CMngPosition = $row['CMngPosition'];
            $CCoordinator = $row['CCoordinator'];
            $CCoorPosition = $row['CCoorPosition'];
            $CCoorDepartment = $row['CCoorDepartment'];
            $CCoorPhone = $row['CCoorPhone'];
            $CCoorEmail = $row['CCoorEmail'];
            $CRecivePostion = $row['CReceivePosition'];
            $CJobDescription = $row['CJobDescription'];
            $CNumber = $row['CNumber'];
            $CSkillReq = $row['CSkillReq'];
        

            $companyList[] = new Company($CompanyID,$CompanyName, $CAddress,$CStreet, $CTumbon,$amphure_id,$amphure_name_th,$province_id,
            $province_name_th,$CType,$CPhone,$CFax,$CManager,$CMngPosition,$CCoordinator,$CCoorPosition,$CCoorDepartment,$CCoorPhone,$CCoorEmail,
            $CRecivePostion,$CJobDescription,$CNumber,$CSkillReq);
        }
        require("./connection_close.php");
        return $companyList;
    }
    public static function Add($CID,$CompanyName, $CAddress,$CStreet, $CTumbon,$CType,$CPhone,$CFax,$CManager,$CMngPosition,$CCoordinator,$CCoorPosition,$CCoorDepartment,$CCoorPhone,$CCoorEmail,$CRecivePostion,$CJobDescription,$CNumber,$CSkillReq){
        require("./connection_connect.php");
        $sql = "INSERT INTO `company` (`CompanyID`, `CompanyName`, `CAddress`, `CStreet`, `CTumbon`, `CType`, `CPhone`, `CFax`, `CManager`, `CMngPosition`, `CCoordinator`, `CCoorPosition`, `CCoorDepartment`, `CCoorPhone`, `CCoorEmail`, `CReceivePosition`, `CJobDescription`, `CNumber`, `CSkillReq`)
         VALUES ('$CID', '$CompanyName', '$CAddress', '$CStreet',' $CTumbon','$CType', '$CPhone', '$CFax', '$CManager', '$CMngPosition', '$CCoordinator', '$CCoorPosition', '$CCoorDepartment',
           '$CCoorPhone', '$CCoorEmail', '$CRecivePostion', '$CJobDescription', '$CNumber','$CSkillReq');";
        $result = $conn->query($sql);
        require("./connection_close.php");
        return $result;
        }

        public static function search($key){
            $companyList=[];
            require("./connection_connect.php");
            $sql = "SELECT * FROM company 
            LEFT JOIN amphures on amphures.amphure_id = company.CTumbon
            LEFT JOIN provinces ON provinces.province_id = amphures.province_id
            WHERE company.CompanyName LIKE '%$key%' or amphures.amphure_name_th LIKE '%$key%' or provinces.province_name_th LIKE '%$key%'";
            $result = $conn->query($sql);
            while($row=$result->fetch_assoc()){
                $CompanyID = $row['CompanyID'];
                $CompanyName = $row['CompanyName']; 
                $CAddress = $row['CAddress'];
                $CStreet = $row['CStreet'];
                $CTumbon = $row['CTumbon'];
                $amphure_id = $row['amphure_id'];
                $amphure_name_th = $row['amphure_name_th'];
                $province_id = $row['province_id'];
                $province_name_th = $row['province_name_th'];
                $CType = $row['CType'];
                $CPhone = $row['CPhone'];
                $CFax = $row['CFax'];
                $CManager = $row['CManager'];
                $CMngPosition = $row['CMngPosition'];
                $CCoordinator = $row['CCoordinator'];
                $CCoorPosition = $row['CCoorPosition'];
                $CCoorDepartment = $row['CCoorDepartment'];
                $CCoorPhone = $row['CCoorPhone'];
                $CCoorEmail = $row['CCoorEmail'];
                $CRecivePostion = $row['CReceivePosition'];
                $CJobDescription = $row['CJobDescription'];
                $CNumber = $row['CNumber'];
                $CSkillReq = $row['CSkillReq'];
            
    
                $companyList[] = new Company($CompanyID,$CompanyName, $CAddress,$CStreet, $CTumbon,$amphure_id,$amphure_name_th,$province_id,
                $province_name_th,$CType,$CPhone,$CFax,$CManager,$CMngPosition,$CCoordinator,$CCoorPosition,$CCoorDepartment,$CCoorPhone,$CCoorEmail,
                $CRecivePostion,$CJobDescription,$CNumber,$CSkillReq);
            }
            require("./connection_close.php");
            return $companyList;
        }
        public static function CountCompanyAll(){
            require("./connection_connect.php");
            $sql = "SELECT *from company";
            $result = $conn->query($sql);
            $row=$result->fetch_all();
            $row = count($row);
            require("./connection_close.php");
            return $row;
        }

        public static function delete($ID){
            require("./connection_connect.php");
            $sql = "DELETE FROM company WHERE `company`.`CompanyID` = '$ID'";
            $result = $conn->query($sql);
            require("./connection_close.php");
            return $result;
        }
        public static function get($ID){
            require("./connection_connect.php");
            $sql = "SELECT CompanyID FROM company WHERE `company`.`CompanyID` = '$ID'";
            $result = $conn->query($sql);
            require("./connection_close.php");
            return $result;
        }

}