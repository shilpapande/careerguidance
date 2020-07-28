<head>
	<style>
		h1 {
			  color: blue;
			  font-family: verdana;
 			  font-size: 100%;
		}
		p  {
			border: 2px solid powderblue;
			border-width:medium;
  			color: black;
  			font-family: courier;
  			font-size: 90%;
		 }
	</style>
	<title>Booking appointment with Counselor </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

/* Create four equal columns that floats next to each other */
.column {
  float: left;
  width: 25%;
  padding: 10px;
  height: 400px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
</style>
</head>
<body>
	<h1>  <center><b> Booking appointment with Counselor</b> </center></h1>
	 
	<p><b>Select date and time for appoinment</b></p>
	<b><label for="Conselling">Date:</label></b>
  		<input type="Date" id="date" name="appoinemnt date"><br>
	<b><label for="appt">Choose a time for your meeting:</label></b>

	<input type="time" id="appt" name="appt"
       min="09:00" max="18:00" required>

	<small>Office hours are 9am to 6pm</small>
	<p><b><center>Select Counselor</center></b></p>
	<h2>Four Counselors available</h2>

<div class="row">
  <div class="column" style="background-color:#aaa;">
    <h2>Dr.PNSingh</h2>
    <p><div class="card">
  <img src="DrPNSingh.jpg" alt="DrPNSingh" style="width:25%">
  <h1>Professor</h1>
  <p class="title">Professor, CMRIT</p>
  <p>VTU</p>
  <a href="#"><i class="fa fa-dribbble"></i></a>
  <a href="#"><i class="fa fa-twitter"></i></a>
  <a href="#"><i class="fa fa-linkedin"></i></a>
  <a href="#"><i class="fa fa-facebook"></i></a>
  <p><button onclick="document.location='https://sites.google.com/a/cmrit.ac.in/dr-p-n-singh//'">Profile</button></p>
 <button onclick="document.location='Confirmation.htm'">Book appoinment with Counsellor!</button>
</div></p>
  </div>
  <div class="column" style="background-color:#bbb;">
    <h2>Dr.BNM</h2>
    <p><div class="card">
  <img src="bnm.jpg" alt="bnm" style="width:25%">
  <h1>Vice principal</h1>
  <p class="title">Vice principal, CMRIT</p>
  <p>VTU</p>
  <a href="#"><i class="fa fa-dribbble"></i></a>
  <a href="#"><i class="fa fa-twitter"></i></a>
  <a href="#"><i class="fa fa-linkedin"></i></a>
  <a href="#"><i class="fa fa-facebook"></i></a>
  <p><button onclick="document.location='https://sites.google.com/a/cmrit.ac.in/dr-b-narasimha-murthy/'">Profile</button></p>
 <button onclick="document.location='Confirmation.htm'">Book appoinment with Counsellor!</button>
</div></p>
  </div>
  <div class="column" style="background-color:#ccc;">
    <h2>Dr.Gomathi</h2>
    <p><div class="card">
  <img src="gomati.jpg" alt="gomati" style="width:25%">
  <h1>MCA HOD</h1>
  <p class="title">MCA HOD, CMRIT</p>
  <p>VTU</p>
  <a href="#"><i class="fa fa-dribbble"></i></a>
  <a href="#"><i class="fa fa-twitter"></i></a>
  <a href="#"><i class="fa fa-linkedin"></i></a>
  <a href="#"><i class="fa fa-facebook"></i></a>
  <p><button onclick="document.location='https://sites.google.com/a/cmrit.ac.in/tgomathi/home'">Profile</button></p>
  <button onclick="document.location='Confirmation.htm'">Book appoinment with Counsellor!</button>
</div></p>
  </div>
  <div class="column" style="background-color:#ddd;">
    <h2>Dr. Fazlur Rahaman</h2>
    <p><div class="card">
  <img src="Fazlur.jpg" alt="Dr.Fazlur" style="width:25%">
  <h1>Professor</h1>
  <p class="title">HOD chemistry, CMRIT</p>
  <p>VTU</p>
  <a href="#"><i class="fa fa-dribbble"></i></a>
  <a href="#"><i class="fa fa-twitter"></i></a>
  <a href="#"><i class="fa fa-linkedin"></i></a>
  <a href="#"><i class="fa fa-facebook"></i></a>
  <p><button onclick="document.location='https://sites.google.com/a/cmrit.ac.in/fazlur-rahaman2014/'">Profile</button></p>
 <button onclick="document.location='Confirmation.htm'">Book appoinment with Counsellor!</button>
</div></p>
  </div>
</div>




</div>	

</body>
</html>
