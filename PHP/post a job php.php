<?php
require 'config.php';
if(isset($_POST["submit"])){

    $Title=$_POST["Title"];
    $Type=$_POST["Type"];
    $Description=$_POST["Description"];
    $Location=$_POST["Location"];
    $Responsibilities=$_POST["Responsibilities"];
    $EQualification=$_POST["Qualifications"];
    $RExperience=$_POST["Experience"];
    $Salary=$_POST["Salary"];
    $Currency=$_POST["Currency"];
    $RSkills=$_POST["Skills"];
    $Certifications=$_POST["Certifications"];
    $License=$_POST["License"];
    $CLevel=$_POST["Level"];
    $DApply=$_POST["date"];
   


   $stmt = $conn->prepare("INSERT INT0 `post a job`(JTitle,JType,JDescription,JLocation,JResponsibilities,JEQualification,JRExperience,JSalary,JCurrency,JRSkills,JCertifications,JLicense,JCLevel,JDApply)VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
   $stmt->bind_param("ssssssssssssss", $Title,$Type,$Description,$Location,$Responsibilities,$EQualification,$RExperience,$Salary,$Currency, $RSkills,$Certification,$License,$CLevel,$DApply);
   $stmt->execute();
   
   echo "Data Successfully";


   $stmt->close();
   $con->close();

}
?>