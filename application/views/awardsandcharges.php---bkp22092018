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
 <title>Awards and Charges</title>
 <link href="<?php echo base_url(); ?>css/style.css" rel="stylesheet" type="text/css" />
 <link href="<?php echo base_url(); ?>css/awardsandcharges.css" rel="stylesheet" type="text/css" />

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
.container1 {
    overflow: hidden;
    background-color: rgba(0,0,0,0.42);
    background-image: -webkit-linear-gradient(rgba(51,51,51,0.7),rgba(0,0,0,0.7) 75%,rgba(0,0,0,0.7));
    font-family: Arial;
    width:268px;
    margin: 50px auto;
    border-radius: 5px;
    font: bold 14px Trebuchet MS;
    padding-left: 20px;
    padding-right: 20px;
    margin-bottom: 40px;
}

.container1 a {
      float: left;
    /* font-size: 25px; */
    font: bold 14px Trebuchet MS;
    color: white;
    text-align: center;
    padding: 10px 16px;
    text-decoration: none;
}

.dropdown1 {
    float: left;
    overflow: hidden;
}

.dropdown1 .dropbtn1 {
    cursor: pointer;
      
    border: none;
    outline: none;
    color: white;
   
    background-color: inherit;
    font: bold 14px Trebuchet MS;
    padding: 10px 16px;
}

.dropdown1:hover .dropbtn1 {
    
    
    background-color: #f9db14;
    color: green;
}

.dropdown-content1 {
    display: none;
    
    font: bold 14px Trebuchet MS;
    position: absolute;
    background-color: rgba(0,0,0,0.42);
    background-image: -webkit-linear-gradient(rgba(51,51,51,0.7),rgba(0,0,0,0.7) 75%,rgba(0,0,0,0.7));
    min-width: 120px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
        border: solid 1px;
}

.dropdown-content1 a {
    float: none;
    color: white;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content1 a:hover {
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
    <div><b id="logout"><a href="<?php echo base_url().'user'; ?>/logout">Logout</a></b></div>
    <div class="container1">
         <a>Select Year:</a>
    <div class="dropdown1">
        <button class="dropbtn1" onclick="myFunction1()"><?php echo $select_year; ?> &dtrif; </button>
        <div class="dropdown-content1" id="myDropdown1">
            <?php foreach ($year_lists as $year_list) {
                ?>
                 <a href="<?php echo base_url().'user'; ?>/five/<?php echo $year_list['Year']; ?>"><?php echo $year_list['Year']; ?></a>
                 <?php 


               
            }
         ?>
         
          
          
        </div>
      </div>
  </div>
  <h1>Awards</h1>


  
  <table id="keywords" cellspacing="0" cellpadding="0">
    <thead>
      <tr>
        <th><span>Awards</span></th>
        <th><span>Amount</span></th>
        <th><span>Status</span></th>
       <!-- <th><span>Hours</span></th>
        <th><span>DESCRIPTION</span></th>
        <th><span>Term</span></th>
        <th><span>Year</span></th>
        <th><span>Grade</span></th>
        <th><span>GradeNum</span></th>
        <th><span>Transfer</span></th> 
        <th><span>College</span></th>
-->
        
      </tr>
    </thead>
    <tbody>
    	

    	<?php $t_award = 0.0; foreach ($awards as $award):


    		# code...
    	?>
      <tr>
        <td class="awards"><?php echo $award['nameofscholarship']; ?> </td>
        <td class="amount"><?php echo '$'.number_format(((float)substr($award['DollarAmount'],1)),2);
        $t_award += (float)substr($award['DollarAmount'],1); ?></td>
        <td lass="status"><?php  echo $award['status']; ?></td>
    <!--    <td class="hours"><?php //echo $classes['HOURSCRED']; ?></td>
        <td class="descript"><?php //echo $classes['Description']; ?></td>
        <td class="term"><?php /* if($classes['TERM'] == "10") echo "SP";
        if($classes['TERM'] == "20") echo "S1";
        if($classes['TERM'] == "30") echo "S2";
        if($classes['TERM'] == "40") echo "FA";
        if($classes['TERM'] == "50") echo "WI"; */ ?></td>
        <td class="year"><?php //if((int)$classes['Year']>=65) echo $classes['Year'];
       // else echo ((int)$classes['Year']+2000);
        ?></td>
    

        <td class="grade">
            <?php //if ($classes['GRADE'] == null) echo "IP";
       // else echo $classes['GRADE'];
         ?></td>
        <td class="gradenum"><?php// echo $classes['GradeNum']; ?></td>
        <td class="transfer"><?php //echo $classes['Transfer']; ?></td>
        <td class="college"><?php// echo $classes['College']; ?></td>
    -->
      </tr>

      <?php endforeach; ?>
    </tbody>
  </table>
  <h1>Total Awards = <?php echo '$'.number_format($t_award,2);?></h1>

  <h1>Charges</h1>
  
  <table id="keywords" cellspacing="0" cellpadding="0">
    <thead>
      <tr>
        <th><span>Charges</span></th>
        <th><span>Amounts</span></th>
        <th><span>Status</span></th>
   <!--     <th><span>Hours</span></th>
        <th><span>DESCRIPTION</span></th>
        <th><span>Term</span></th>
        <th><span>Year</span></th>
        <th><span>Grade</span></th>
        <th><span>GradeNum</span></th>
        <th><span>Transfer</span></th>
        <th><span>College</span></th>
-->
        
      </tr>
    </thead>
    <tbody>
        

        <?php $t_charge=0.0; foreach ($charges as $charge):


            # code...
        ?>
      <tr>
        <td class="charges"><?php echo $charge['nameofcost']; ?> </td>
        <td class="amounts"><?php echo '$'.number_format(((float)substr($charge['DollarAmount'], 2, strlen($charge['DollarAmount'])-3)),2);
        $t_charge += (float)substr($charge['DollarAmount'], 2, strlen($charge['DollarAmount'])-3); ?></td>
        <td lass="status"><?php echo $charge['Status']; ?></td>
   <!--     <td class="hours"><?php //echo $classes['HOURSCRED']; ?></td>
        <td class="descript"><?php //echo $classes['Description']; ?></td>
        <td class="term"><?php// if($classes['TERM'] == "10") echo "SP";
       // if($classes['TERM'] == "20") echo "S1";
       // if($classes['TERM'] == "30") echo "S2";
        //if($classes['TERM'] == "40") echo "FA";
        //if($classes['TERM'] == "50") echo "WI"; ?></td>
        <td class="year"><?php //if((int)$classes['Year']>=65) echo $classes['Year'];
       // else echo ((int)$classes['Year']+2000);
        ?></td>
    

        <td class="grade">
            <?php //if ($classes['GRADE'] == null)// echo "IP";
        //else echo $classes['GRADE'];
         ?></td>
        <td class="gradenum"><?php //echo $classes['GradeNum']; ?></td>
        <td class="transfer"><?php// echo $classes['Transfer']; ?></td>
        <td class="college"><?php //echo $classes['College']; ?></td>
    -->
      </tr>
      <?php endforeach; ?>
      
    </tbody>
  </table>
  <h1>Total Charges = <?php echo '$'.number_format($t_charge,2);?></h1>

  <?php if($t_award - $t_charge > 0) { ?>
  <h1>Projected Balance Refund = <?php echo '$'.number_format(($t_award-$t_charge),2);?></h1>

  <?php

  }
  else if($t_award - $t_charge > 0) { ?>
  <h1>Projected Balance = <?php echo '$'.number_format(0,2);?></h1>
  <?php 
}
else {
  ?>
<h1>Projected Balance Owed = <?php echo '$'.number_format(($t_charge-$t_award),2);?></h1>
<?php } ?>

 </div> 
</body>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>


   
    <script>
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}
function myFunction1() {
    document.getElementById("myDropdown1").classList.toggle("show");
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
  if (!e.target.matches('.dropbtn1')) {
    var myDropdown = document.getElementById("myDropdown1");
      if (myDropdown.classList.contains('show')) {
        myDropdown.classList.remove('show');
      }
  }
}
</script>	

</body>
</html>
