<?php
class csv extends mysqli
{
    public function __construct()
   {
      parent::__construct("localhost","root","","placement");
      if($this->connect_error){
      echo "fail to connect:".$this->connect_error;
      }
   }
   public function import($file)
   {
      $file = fopen($file,'r');
      while($row= fgetcsv($file) ) {
      $value="'".implode("','",$row)."'";
      $q="INSERT INTO `studentdetails`(`Regd_No`, `Name`, `Branch`, `Year_o_ Passing`, `D.O.B`, `Gender`, `Category`, `Student_Mobile_No`, `Email_ID`, `Name_of_the_Parent`, `Parent_Mobile_No`, `10th%`, `10th_YoP`, `12th%`, `Dip%`, `B.Tech_CGPA`, `Total_Backlogs`, `Interested_for_Placement`, `Aadhar No`, `Section`) VALUES (".$value.")";
      if($this->query($q) ) {
       $this->state_csv=true;
      }else{
          $this->state_csv=false;
          //echo $this->error;
       }
      
      }
     if($this->state_csv){
         echo "<script type='text/javascript'>";
    echo "alert('successfully imported')";
    echo "</script>";
 
     }else {
    echo "<script type='text/javascript'>";
    echo "alert('something went wrong check file')";
    echo "</script>";
     }
   
          
    }
}
?>