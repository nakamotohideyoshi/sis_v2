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
 <title>Classes</title>
 <link href="<?php echo base_url(); ?>css/style.css" rel="stylesheet" type="text/css" />
 <link href="<?php echo base_url(); ?>css/classes.css" rel="stylesheet" type="text/css" />
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
<body>
 <div id="wrapper">
    <div><b id="logout"><a href="logout">Logout</a></b></div>
  <h1>Permanent Classes Taken</h1>
  
  <table id="keywords" cellspacing="0" cellpadding="0">
    <thead>
      <tr>
        <th><span>DISCIPLINE</span></th>
        <th><span>COURSENO</span></th>
        <th><span>SECTION</span></th>
        <th><span>Hours</span></th>
        <th><span>DESCRIPTION</span></th>
        <th><span>Term</span></th>
        <th><span>Year</span></th>
        <th><span>Grade</span></th>
        <th><span>GradeNum</span></th>
        <th><span>Transfer</span></th>
        <th><span>College</span></th>

        
      </tr>
    </thead>
    <tbody>
    	

    	<?php foreach ($classesp as $classes):


    		# code...
    	?>
      <tr>
        <td class="disc"><?php echo $classes['DISCIPLINE']; ?> </td>
        <td class="courseno"><?php echo $classes['COURSENO']; ?></td>
        <td lass="section"><?php echo $classes['SECTION']; ?></td>
        <td class="hours"><?php echo $classes['HOURSCRED']; ?></td>
        <td class="descript"><?php echo $classes['Description']; ?></td>
        <td class="term"><?php if($classes['TERM'] == "10") echo "SP";
        else if($classes['TERM'] == "20") echo "S1";
        else if($classes['TERM'] == "30") echo "S2";
        else if($classes['TERM'] == "40") echo "FA";
        else if($classes['TERM'] == "50") echo "WI";
        else echo $classes['TERM']; ?></td>
        <td class="year"><?php if((int)$classes['Year']>=65) echo $classes['Year'];
        else echo ((int)$classes['Year']+2000);
        ?></td>
    

        <td class="grade">
            <?php if ($classes['GRADE'] == null) echo "IP";
        else echo $classes['GRADE'];
         ?></td>
        <td class="gradenum"><?php echo $classes['GradeNum']; ?></td>
        <td class="transfer"><?php echo $classes['Transfer']; ?></td>
        <td class="college"><?php echo $classes['College']; ?></td>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
 </div> 
</body>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="<?php echo base_url(); ?>js/jquery.tablesorter.min.js"></script>

    <script src="<?php echo base_url(); ?>js/index.js"></script>	
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
