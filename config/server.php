<?php

error_reporting(0);

if(isset($_POST['signup']))
{
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $emp_code = $_POST['emp_code'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    $check_query = "SELECT * FROM employees WHERE EmpCode='$emp_code' OR EmpEmail='$email' LIMIT 1";
    $result = mysqli_query($con, $check_query);
    $check = mysqli_fetch_assoc($result);
    
    if($check) 
    { 
        if ($check['EmpCode'] === $emp_code) 
        {
            echo "<script>alert('Emp Code already exists.')</script>";
        }

        if ($check['EmpEmail'] === $email) 
        {
            echo "<script>alert('E-mail already exists')</script>";
        }
    
       
    }

    elseif($password != $cpassword)
    {
        echo "<script>alert('Passwords do not match.')</script>";
    }

    elseif(strlen($password) < 6)
    {
        echo "<script>alert('Password must be at least 6 characters long')</script>";
    }

    else
    {
        $query=mysqli_query($con, "INSERT INTO employees(EmpFname, EmpLname, EmpCode, EmpEmail, EmpPassword) VALUE ('$fname', '$lname', '$emp_code', '$email', '$password' )");

        if ($query) 
        {
            echo "<script>alert('You have successfully registered.')</script>";
        }

        else
        {
            echo "<script>alert('Something Went Wrong. Please try again.')</script>";
        }
    }
}


if(isset($_POST['login']))
{
    $email = $_POST['email'];
    $password = $_POST['password'];
    $query = mysqli_query($con,"SELECT ID FROM employees WHERE EmpEmail='$email' AND EmpPassword='$password' ");

    $ret = mysqli_fetch_array($query);

    if($ret > 0)
    {
        $_SESSION['uid'] = $ret['ID'];
        header('location: welcome.php');
    }

}

if(isset($_POST['update']))
{
    $eid = $_SESSION['uid'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $emp_work_position = $_POST['emp_work_position'];
    $emp_code = $_POST['emp_code'];
    $emp_dept = $_POST['emp_dept'];
    $emp_designation = $_POST['emp_designation'];
    $emp_joining = $_POST['emp_joining_date'];
    $gender= $_POST['gender'];

    if($fname == "" || $lname == "")
    {
        $fname = $row['EmpFname'];
        $lname = $row['EmpLname'];
        echo "<script>alert('First name and Last name required!')</script>";
    } 

    else
    {
        $query = mysqli_query($con, "UPDATE employees SET EmpFname='$fname', EmpLname='$lname', EmpCode='$emp_code', EmpDept='$emp_dept', EmpDesignation='$emp_designation', EmpWorkPosition='$emp_work_position', EmpJoining='$emp_joining', EmpGender='$gender' WHERE ID='$eid'");
    
        if ($query) 
        {
            echo "<script>alert('Your profile has been updated.')</script>";
        }
            
        else
        {
            echo "<script>alert('Something Went Wrong. Please try again.')</script>";
        }
    }       
    
}


if(isset($_POST['education']))
{ 
    $eid = $_SESSION['uid'];
    $hs_name = $_POST['hs-name'];
    $hs_graduated_department = $_POST['hs-graduated-department'];
    $hs_graduation_date = $_POST['hs-graduation-date'];
    $hs_achievements_certificates = $_POST['hs-achievements-certificates'];
    $university_name = $_POST['university-name'];
    $colleges = $_POST['colleges'];
    $degree_achieved = $_POST['degree-achieved'];
    $university_graduation_date = $_POST['university-graduation-date'];
    $university_projects_certificates = $_POST['university-projects-certificates'];
    
    $select_education=mysqli_query($con,"SELECT * FROM education WHERE EmpID=$eid");
    $row=mysqli_fetch_array($select_education);
    if($row>0)
    {
        $query = mysqli_query($con, "UPDATE education SET hsName='$hs_name', hsGradDep='$hs_graduated_department', hsGradDate='$hs_graduation_date', hsAchievementsCertificates='$hs_achievements_certificates', 
        uName='$university_name', colleges='$colleges', degreeAchieved='$degree_achieved', uGradDate='$university_graduation_date', uProjectsCertificates='$university_projects_certificates' WHERE EmpID='$eid'");

        echo "<script>alert('Your education data has been updated.')</script>";
    }

    else
    {
        $query = mysqli_query($con, "INSERT INTO education(EmpID, hsName, hsGradDep, hsGradDate, hsAchievementsCertificates, uName, colleges, degreeAchieved, uGradDate, uProjectsCertificates) VALUES ('$eid', '$hs_name', '$hs_graduated_department', '$hs_graduation_date', '$hs_achievements_certificates', '$university_name', '$colleges', '$degree_achieved', '$university_graduation_date', '$university_projects_certificates')");
        echo "<script>alert('Your education data has been inserted.')</script>";
    }    
        
        
}   

if(isset($_POST['experience']))
{ 
    $eid = $_SESSION['uid'];
    $companyName1 = $_POST['company-name'];
    $workPosition1 = $_POST['work-position'];
    $workDuration1 = $_POST['work-duration'];
    $usedProgramsTools1 = $_POST['used-programs-tools'];
    $companyName2 = $_POST['company-name2'];
    $workPosition2 = $_POST['work-position2'];
    $workDuration2 = $_POST['work-duration2'];
    $usedProgramsTools2 = $_POST['used-programs-tools2'];
    $companyName3 = $_POST['company-name3'];
    $workPosition3 = $_POST['work-position3'];
    $workDuration3 = $_POST['work-duration3'];
    $usedProgramsTools3 = $_POST['used-programs-tools3'];

    $select_experience=mysqli_query($con,"SELECT * FROM experience WHERE EmpID=$eid");
    $row=mysqli_fetch_array($select_experience);

    if($row>0)
    {
        $query = mysqli_query($con, "UPDATE experience SET CompanyName1='$companyName1', WorkPosition1='$workPosition1', WorkDuration1='$workDuration1', UsedProgramsTools1='$usedProgramsTools1', 
        CompanyName2='$companyName2', WorkPosition2='$workPosition2', WorkDuration2='$workDuration2', UsedProgramsTools2='$usedProgramsTools2',
        CompanyName3='$companyName3', WorkPosition3='$workPosition3', WorkDuration3='$workDuration3', UsedProgramsTools3='$usedProgramsTools3' WHERE EmpID='$eid'");
        echo "<script>alert('Your experience data has been updated.')</script>";
    }

    else
    {
        $query = mysqli_query($con, "INSERT INTO experience(EmpID, CompanyName1, WorkPosition1, WorkDuration1, UsedProgramsTools1,
        CompanyName2, WorkPosition2, WorkDuration2, UsedProgramsTools2,
        CompanyName3, WorkPosition3, WorkDuration3, UsedProgramsTools3) 
        VALUES ('$eid', '$companyName1', '$workPosition1', '$workDuration1', '$usedProgramsTools1', 
        '$companyName2', '$workPosition2', '$workDuration2', '$usedProgramsTools2', 
        '$companyName3', '$workPosition3', '$workDuration3', '$usedProgramsTools3')");
        echo "<script>alert('Your experience data has been inserted.')</script>";
    }          
}   


if(isset($_POST['changePass']))
{
    $empid=$_SESSION['uid'];
    $currentPass=$_POST['currentPass'];
    $newPass=$_POST['newPass'];
    $confirmPass=$_POST['confirmPass'];
    $query = mysqli_query($con,"SELECT ID FROM employees WHERE ID='$empid' AND EmpPassword='$currentPass'");
    $row = mysqli_fetch_array($query);

    if($row > 0)
    {
        if($newPass != $confirmPass)
        {
            echo "<script>alert('Password does not match.')</script>";
        }

        if(strlen($newPass) < 6)
        {
            echo "<script>alert('Password must be at least 6 characters long')</script>";
        }

        elseif($currentPass == $newPass)
        {
            echo "<script>alert('You have entered your old password.')</script>";
        }
        
        else
        {
            $query = mysqli_query($con,"UPDATE employees SET EmpPassword='$newPass' WHERE ID='$empid'");
            echo "<script>alert('Your password successully changed.')</script>";
        }
        
    }
    
    else 
    {
        echo "<script>alert('Your current password is wrong!')</script>";
    }
}


?>