<?php
    class StudentController
    {
        public function newRequirement() {
            //echo "stuSontroller";
            
            $account = Account::getID($_SESSION["user"]);
            $JobRequirment = JobRequirment::getJobReqStudent($account->stuID);
            $maxJobReqStuID= 0;
            
            foreach($JobRequirment as $J){
                
                settype($J->JobID,"integer" );
                $CID = $J->JobID;
                if($maxJobReqStuID < $CID ){
                    $maxJobReqStuID = $CID;
                }

            }
            $JID = JobRequirment::sentCountAll();
            $company = Company::getAll();
            //echo $maxJobReqStuID;
            $student = JobRequirment::getID($maxJobReqStuID);
            $JobRequirmentList=JobRequirment::getCompany();
            require_once("./views/student/requestStudent.php");
        }
        public function newCompany(){
        
            require_once("./views/student/addCompany.php");
        }
        
        public function checkStatus(){
            $account = Account::getID($_SESSION["user"]);
            $JobRequirment = JobRequirment::getJobReqStudent($account->stuID);
            $maxJobReqStuID= 0;
            foreach($JobRequirment as $J){
                
                settype($J->JobID,"integer" );
                $CID = $J->JobID;
                if($maxJobReqStuID < $CID ){
                    $maxJobReqStuID = $CID;
                    //echo $maxJobReqStuID;
                }

            }
            //echo $maxJobReqStuID;
            $JobRequirment = JobRequirment::getID($maxJobReqStuID);
            //echo is_null($student->approvedName);
            require_once("./views/student/status.php");
        }

        public function detailStatus(){
            
            $account = Account::getID($_SESSION["user"]);
            $JobRequirment = JobRequirment::getJobReqStudent($account->stuID);
            $maxJobReqStuID= 0;
            foreach($JobRequirment as $J){
                
                settype($J->JobID,"integer" );
                $CID = $J->JobID;
                if($maxJobReqStuID < $CID ){
                    $maxJobReqStuID = $CID;
                    //echo $maxJobReqStuID;
                }

            }
            //echo $maxJobReqStuID;
            $JobRequirment = JobRequirment::getID($maxJobReqStuID);
            //echo is_null($student->approvedName);
            require_once("./views/student/requirmentStatus.php");
        }     
    }
?>