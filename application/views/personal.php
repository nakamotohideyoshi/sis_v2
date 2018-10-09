<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "https://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="https://www.w3.org/1999/xhtml">
	<?php
if (isset($this->session->userdata['logged_in'])) {
$username = ($this->session->userdata['logged_in']['username']);
$email = ($this->session->userdata['logged_in']['email']);
$soc = ($this->session->userdata['logged_in']['soc']);
} else {
header("location: ".base_url());
}
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Personal Information</title>
 <link href="<?php echo base_url(); ?>/css/style.css" rel="stylesheet" type="text/css" />
 <link href="<?php echo base_url(); ?>css/classes.css" rel="stylesheet" type="text/css" />
 <link href="<?php echo base_url(); ?>css/personal.css" rel="stylesheet" type="text/css" />

 <style>
.container {
       overflow: hidden;
   /* background-color: #00abeb; */
    background-color: rgba(0,0,0,0.42);
    background-image: -webkit-linear-gradient(rgba(51,51,51,0.7),rgba(0,0,0,0.7) 75%,rgba(0,0,0,0.7));
    font-family: Arial;
    width: 1050px;px;
    margin: 0 auto;
    
    border-radius: 5px;
    font: bold 25px Trebuchet MS;
    padding-left: 20px;
      margin-bottom: 40px;
}

.container a {
	    border-radius: 7px;
      float: left;
    /* font-size: 25px; */
    font: bold 25px Trebuchet MS;
    color: white;
    text-align: center;
    padding: 16px 16px;
    text-decoration: none;
}

.dropdown {
    float: left;
    overflow: hidden;
}

.dropdown .dropbtn {
    cursor: pointer;
      
    border: none;
    outline: none;
    color: white;
   
    background-color: inherit;
    font: bold 25px Trebuchet MS;
    padding: 16px 16px;
}

.container a:hover, .dropdown:hover .dropbtn {
    
    border-radius: 7px;
    background-color: #f9db14;
    
    color: green;
}

.dropdown-content {
    display: none;
    
    font: bold 25px Trebuchet MS;
    position: absolute;
    background-color: rgba(0,0,0,0.8);
        background-image: -webkit-linear-gradient(rgba(51,51,51,0.7),rgba(0,0,0,0.7) 75%,rgba(0,0,0,0.7));
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
        border: solid 1px;
}

.dropdown-content a {
	border-radius: 7px;
    float: none;
    color: white;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {
      background-color: #f9db14;
     color: green;
}



.show {
    display: block;
}


.dropdown2 {
    float: left;
    overflow: hidden;
}

.dropdown2 .dropbtn2 {
    cursor: pointer;
      
    border: none;
    outline: none;
    color: white;
   
    background-color: inherit;
    font: bold 25px Trebuchet MS;
    padding: 16px 16px;
}

.container a:hover, .dropdown2:hover .dropbtn2 {
    
    border-radius: 7px;
    background-color: #f9db14;
    color: green;
}

.dropdown-content2 {
    display: none;
    
    font: bold 25px Trebuchet MS;
    position: absolute;
    background-color: #00abeb;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
        border: solid 1px;
}

.dropdown-content2 a {
    float: none;
    color: white;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}


.dropdown-content2 a:hover {
      background-color: #f9db14;
     color: green;
}
.show {
    display: block;
}
#logout{
	margin-left: 10px;
}
</style>
</head>

<body>
	 <h4>Crowley's Ridge College</h4>
	<div class="container">
        <div class="dropdown2">
            <button class="dropbtn2" onclick="myFunction2()">Admissions</button>
            <div class="dropdown-content" id="myDropdown2">
              <a href="<?php echo base_url().'user'; ?>/adm">Status</a>               
            </div>
        </div>
          <a href="<?php echo base_url().'user'; ?>/second">Business</a>
          <a href="<?php echo base_url().'user'; ?>/first">Classes</a>
          <a href="<?php echo base_url().'user'; ?>/seven">Files</a>

        <div class="dropdown">
            <button class="dropbtn" onclick="myFunction()">Financial Aid</button>
            <div class="dropdown-content" id="myDropdown">
              <a href="<?php echo base_url().'user'; ?>/five">Awards and Charge</a>
              <a href="<?php echo base_url().'user'; ?>/six">Financial Aid Status</a>          
            </div>
        </div>
          <a href="<?php echo base_url().'user'; ?>/four">Personal Info</a>
          <a href="<?php echo base_url().'user'; ?>/third">Transcript</a>
    </div>

		
		<div id="wrapper">
			<div><b id="logout"><a href="logout">Logout</a></b></div>
			<div><b id="logout"><a href="https://www.crc.edu/crc_alumni/alumni_form.html" target="_blank">Update Information</a></b></div>
			<h1>Personal Information</h1>
			<?php foreach ($personal as $personal_info): ?> 
			 <h2><?php echo $personal_info['SOCSECNUM']; ?> </h2>
			 <div class="namedate_wrapper">
					 <div class="name_wrapper">

					 	<div class="name">
						 	 <span class="first_name">FirstName:</span>
			                 <input type="text"  class="first_name" value=<?php echo $personal_info['Firstname']; ?> >
			             </div>
			             <div class="name">
			                 <span class="middl_name">MiddleName:</span>
			                 <input type="text" class="middle_name" value=<?php echo $personal_info['Middlename']; ?> >
			             </div>
			             <div class="name">
			                 <span class="last_name">LastName:</span>
			                 <input type="text" class="last_name" value=<?php echo $personal_info['Lastname']; ?> >
			             </div>
			             <div class="name">
						 	 <span class="sex">Sex:</span>
			                 <input type="text" class="sex" value=<?php echo $personal_info['SEX']; ?> >
			             </div>
			             <div class="name">
			                 <span class="birth">Birthdate:</span>
			                 <input type="text" class="birth" value=<?php echo $personal_info['BIRTHDATE']; ?> >
			             </div>
			             
				          	<div class="name">
				          		 
				                 <span class="driver">Driver License:</span>
				                 <input type="text" class="driver"  value=<?php echo $personal_info['DriversLicenseNumber']; ?> >
				             </div>
	           			
			         </div>
			         <div class = "b_wrapper">
			          <div class="address_wrapper">
			         	<div class="name">
						 	 <span class="addres">Address:</span>
			                 <spn class="address_info"><?php echo $personal_info['Address']; ?></sapn>
			             </div>
			             <div class="name">
			                 <span class ="city">City:</span>
			                 <input type="text" class="city"  value= <?php echo $personal_info['PERCITY']; ?> >
			                 
			             </div>
			             <div class="name">
			             	<span class="state">State:</span>
			                 <input type="text" class="state"  value= <?php echo $personal_info['PERSTATE']; ?> >
			                 <span class="zipcode">Zipcode:</span>
			                 <input type="text" class="zipcode"  value= <?php echo $personal_info['Zip']; ?> >
			             </div>
			             <div class="name">
			          		 <span class="email">Email:</span>
			                 <input type="text" class="Email"  value=<?php echo $personal_info['emailaddress']; ?> >
			                 
			             </div>
			         </div>
			         <div class="phone_wrapper">

			         	<div class="name">
						 	 <span class="phone">Phone Number:</span>
			                 <spn class="address_info"><?php echo $personal_info['CURPHONE']; ?> </sapn>
			             </div>
			             <div class="name">
			                 <span class="cell">Cell Phone:</span>
			                 <spn class="address_info"><?php echo $personal_info['CellPhone']; ?></sapn>
			             </div>
	             

	         		</div>
			     </div>
	     	</div>
	        
	         
	          
	         <div class="act_wrapper">
	         	
	         	<h3>ACT</h3>
	         	<div class="top">
		         	<div class="name">
					 	 <span class="english">English:</span>
		                 <input type="text" class="act" value=<?php echo $personal_info['ACTENG']; ?> >
		             </div>
		             <div class="name">
	                 <span class="socsic">SocSicence:</span>
	                 <input type="text" class="act"  value=<?php echo $personal_info['ACTSOCSCI']; ?> >
	             </div>
	             <div class="name">
	                 <span class="compo">Composite:</span>
	                 <input type="text" class="act"  value=<?php echo $personal_info['ACTCOMPOSI']; ?> >
	             </div>
		             <div class="name">
		             	<span clss="ged">Ged: </span>
	                 <input type="text"  class="act" value=<?php echo $personal_info['GED']; ?> >
	                
	             </div>
	         </div>
	         	 

	         	<div class="bottom">
	         		<div class="name">
	                 <span class="reading">Reading:</span>
	                 <input type="text" class="act"  value=<?php echo $personal_info['ACTREADING']; ?> >
	             </div>
	              <div class="name">
	                 <span class="nat">NatSicence:</span>
	                 <input type="text" class="act"  value=<?php echo $personal_info['ACTNATSCI']; ?> >
	             </div>
	             <div class="name">
	                 <span class="readcomp">ReadComp:</span>
	                 <input type="text" class="act"  value=<?php echo $personal_info['READCOMP']; ?> >
	             </div>
	             <div class="name">
	                  <span class="math">Math:</span>
	                 <input type="text" class="act" value=<?php echo $personal_info['ACTMATH']; ?> >
	             </div>
	         	</div>
	         	
	            
	             
	             
	        
	             
	            
	             
	             
	         
	        

	         </div>



			 
			<?php endforeach;
			?>

		</div>

	
	<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
   
}
function myFunction2() {
    document.getElementById("myDropdown2").classList.toggle("show");
   
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(e) {
  if (!e.target.matches('.dropbtn')) {
    var myDropdown = document.getElementById("myDropdown");
      if (myDropdown.classList.contains('show')) {
        myDropdown.classList.remove('show');
      }
  }
  if (!e.target.matches('.dropbtn2')) {
    var myDropdown = document.getElementById("myDropdown2");
      if (myDropdown.classList.contains('show')) {
        myDropdown.classList.remove('show');
      }
  }
}
</script>

</body>
</html>
