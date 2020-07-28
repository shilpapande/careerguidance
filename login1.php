<?php

$servername = "localhost"; 
  $username = "root"; 
  $password = ""; 
  $dbname="mydata"; 
  $conn = new mysqli($servername, $username, $password, $dbname); 
  if ($conn->connect_error) { 
  //  die "error"; 
  } 
  else { 
  echo"Database connected Sucessfully<br>"; 
  } 


if(isset($_POST['fname']))
{ 
   $fname = $_POST['fname'];
   //echo "Hi, $fname";
}
//echo "shilpa here login1 php";

if(isset($_POST['lname']))
{ 
   $lname = $_POST['lname'];
   //echo "Hi, $lname";
}

if(isset($_POST['gender']))
{ 
   $gender = $_POST['gender'];
   //echo "Hi, $gender";
}
if(isset($_POST['birthday']))
{ 
   $birthday = $_POST['birthday'];
   //echo "Hi, $birthday";
}
if(isset($_POST['email']))
{ 
   $email = $_POST['email'];
   //echo "Hi, $email";
}  
if(isset($_POST['phone']))
{ 
   $phone = $_POST['phone'];
   //echo "Hi, $phone";
}
if(isset($_POST['addr']))
{ 
   $addr = $_POST['addr'];
   //echo "Hi, $addr";
} 
if(isset($_POST['year']))
{ 
   $year = $_POST['year'];
   //echo "Hi, $year";
}
if(isset($_POST['branch']))
{ 
   $branch = $_POST['branch'];
   //echo "Hi, $branch";
}
if(isset($_POST['cgpa']))
{ 
   $cgpa = $_POST['cgpa'];
   //echo "Hi, $cgpa";
}
if(isset($_POST['skill']))
{ 
   $skill = $_POST['skill'];
   //echo "Hi, $skill";
}
$flag=1;


if(isset($_POST['skillnew']))
{ 
   $skillnew = $_POST['skillnew'];
   //echo "$skillnew";
}


if(isset($_POST['accom']))
{ 
   $accom = $_POST['accom'];
   //echo "$accom";
}

if(isset($_POST['goal']))
{ 
   $goal = $_POST['goal'];
   //echo "Hi, $goal";
}


$sql = "INSERT INTO details_new (fname,lname,gender,birthday,email,phone,addr,year,branch,cgpa,skill,flag,skillset,accom,goal) VALUES ('$fname','$lname','$gender','$birthday','$email','$phone','$addr','$year','$branch','$cgpa','$skill','$flag','$skillnew','$accom','$goal')"; 

    if ($conn->query($sql) === TRUE) { 
      echo "New record created successfully"; 
    } 
    else { 
      echo "Error in inserting the record in Database"; 
    } 
  

?>
<html>
<body>
<form action="Counsellor.php" method="POST">
  
  <input type="submit"  name="submit" value="Submit" ><br>
</form>
  </body>
  </html>