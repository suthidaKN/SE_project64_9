<?php
    class PagesController
    {
       public function home(){
            require_once("./views/pages/home.php");
        }
        public function error(){   
            require_once("./views/pages/error.php"); 
        }       
        public function company() {
            $CompanyList = Company::getAll();
            require_once("./views/pages/company.php");
        }
        public function logout(){
            require_once("./views/pages/Logout.php");
        }
        public function detailCompany(){
            $key = $_GET['key'];
            $com = Company::getID($key);
            require_once("./views/pages/detailCompany.php");
        }
        public function searchCompany(){
            $key = $_GET['key'];
            $CompanyList = Company::search($key);
            require_once("./views/pages/company.php");
        }
    }
?>