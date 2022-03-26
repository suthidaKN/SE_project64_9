<?php
    class ProfController
    {
       public function home(){
            require_once("./views/Prof/homeProf.php");
        }     
        public function company() {
            $CompanyList = Company::getAll();
            require_once("./views/Prof/companyProf.php");
        }
        public function request() {
            $JobRequirment_List = JobRequirment::getAll();
            require_once("./views/Prof/request.php");
        }
        public function search(){
            $key = $_GET['key'];
            if(substr($key, 2,1)=='/'){
                $key = substr($key, -4)."-".substr($key, 0,2)."-".substr($key, 3,2);
            }
           
            if($key == 'รอการตรวจสอบ'){
                $JobRequirment_List = JobRequirment::searchNull();
            }
            else{
                $JobRequirment_List = JobRequirment::search($key);
            }
            require_once("./views/Prof/request.php");
        }
        public function detail(){
            $ID = $_GET['ID'];
            $JobRequirment = JobRequirment::getID($ID);
            require_once("./views/Prof/detail.php");
        }
        public function newCompany(){
            require_once("./views/prof/addCompany.php");
        }
        public function approve(){
            $key = $_GET['key'];
            $ID = $_GET['ID'];
            echo "key = $key id = $ID";
            date_default_timezone_set('asia/bangkok');
            $date = date('Y-m-d');
            JobRequirment::approve($ID,$key,$date);
            ProfController::request();
        }
        public function searchCompany(){
            $key = $_GET['key'];
            $CompanyList = Company::search($key);
            require_once("./views/Prof/companyProf.php");
        }
        public function detailCompany(){
            $key = $_GET['key'];
            $com = Company::getID($key);
            require_once("./views/prof/detailCompany.php");
        }
    }
?>