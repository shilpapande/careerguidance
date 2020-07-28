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

    
    $username=$_POST['uname'];  
    $upassword=$_POST['pname']; 
    //echo "$username";
    //echo "$upassword";

    

    $sql1 = "SELECT username,upassword from logindetail"; 
    $result = $conn->query($sql1); 
   
    while($row = $result->fetch_assoc()){

          if($row["username"]==$username){
            
              if($row["upassword"]==$upassword)
               {
     
    
  ?>
 
<html>
<head>
  <style>
    h1 {
        color: blue;
        font-family: verdana;
        font-size: 200%;
    }
    p  {
      border: 2px solid powderblue;
      border-width:medium;
        color: black;
        font-family: courier;
        font-size: 90%;
     }
  </style>
  <title>Students Conselling </title>
</head>
<body>
  <h1>  <center><b> Students Please Fill in the Information</b> </center></h1>
  <p> 
    <b> 1.ENTER NAME:</b><br>

    <form action="login1.php" method="POST">
      <label> First name:</label><br>
      <input type="text" id="fname" name="fname" value="" ><br>
      <label for="lname">Last name:</label><br>
      <input type="text" id="lname" name="lname" value=""><br>
    </p>
  
  <p>
    <b>2.SELECT GENDER</b><br>
  
      <input type="radio" id="male" name="gender" value="male">
      <label for="male">Male</label><br>
      <input type="radio" id="female" name="gender" value="female">
      <label for="female">Female</label><br>
      <input type="radio" id="other" name="gender" value="other">
      <label for="other">Other</label><br>
  </p>

  <p>
    <b>3.ENTER BIRTHDAY</b><br>
      <label for="birthday">Birthday:</label>
      <input type="date" id="birthday" name="birthday"><br>
  </p>
  
  <p>
    <b>4.ENTER EMAIL</b><br>
      <label for="email">email:</label> 
      <input type="email" id="email" name="email"><br>
  </p>

  <p>
    <b>5.ENTER PHONE NUMBER  </b><br>
    <label for="phone no">phone no:</label>
      <input type="phone no" id="phone no" name="phone"><br>
  </p>
  
  <p>
    <b>6.ENTER ADDRESS</b><br>
    <label for="Address">Address:</label>
      <input type="Address" id="Address" name="addr"><br>
  </p>
    <P>
    <b>7.SELECT YEAR </b><br>
      <input type="radio" id="year1" name="year" value="year1">
     <label for="year1">year1</label><br>
    <input type="radio" id="year2" name="year" value="year2">
      <label for="year2">year2</label><br>
    <input type="radio" id="year3" name="year" value="year3">
      <label for="year3">year3</label><br>
    <input type="radio" id="year4" name="year" value="year4">
      <label for="year4">year4</label><br>
  </p>
  <p>
    <b>8.SELECT BRANCH</b><br>
    <input type="radio" id="Branch" name="branch" value="CS">
      <label for="CS">CS</label><br>
    <input type="radio" id="Branch" name="branch" value="EC">
      <label for="EC">EC</label><br>
    <input type="radio" id="Branch" name="branch" value="ME">
      <label for="ME">ME</label><br>
    <input type="radio" id="Branch" name="branch" value="CV">
      <label for="CV">CV</label><br>
  </p>
  <p>
    <b>9.ENTER CGPA</b><br>

    <label for="cgpa">Enter your cgpa:</label>
      <input type="cgpa" id="cgpa" name="cgpa"><br>
  </p>
  <p>
    <b>10.You are best in</b><br>
    <input type="radio" id="Skill set" name="skill" value="Python">
      <label for="Python">Python</label><br> 
 
    <input type="radio" id="Skill set" name="skill" value="C">
      <label for="C">C</label><br> 
    <input type="radio" id="Skill set" name="skill" value="Java">
      <label for="Java">Java</label><br> 
  </p>

<p>
    <b>11.Skill Set(Specify like C,C++,Java</b><br>
    <label for="skillnew">skill</label></br>
      <input type="text" id="skillnew" name="skillnew"><br>
  </p>

  <p>
    <b>12.Accomplishments</b><br>
    <label for="Accom">Accomplishments</label></br>
      <input type="text"  name="accom"><br>
  </p>


  <p>
    <b>13.Goal</b><br>
    <label for="goal">Goal</label></br>
      <input type="text"  name="goal"><br>
  </p>

     <input type="submit" value="Submit">
      <input type="reset"><br>
   
    
</form> 

</body>
</html>

<?php

  break;
}
else 
                echo "Wrong User name and passowrd";
        
    }
}
?>