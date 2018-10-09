<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "https://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="https://www.w3.org/1999/xhtml">
<head>
		<?php
if (isset($this->session->userdata['logged_in'])) {
$username = ($this->session->userdata['logged_in']['username']);
$email = ($this->session->userdata['logged_in']['email']);
$soc = ($this->session->userdata['logged_in']['soc']);
} else {
header("location: ".base_url());
}
?>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Transcript - Unofficial</title>
 <link href="<?php echo base_url(); ?>/css/style.css" rel="stylesheet" type="text/css" />
 
 <link href="<?php echo base_url(); ?>/css/transcripts.css" rel="stylesheet" type="text/css" />

<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro|Open+Sans+Condensed:300|Raleway' rel='stylesheet' type='text/css'>
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
  <h1>Transcript - Unofficial</h1> 

   <?php 
					        $this->load->database();
					        $this->db->select_max('Year', 'maxyear');
					        $this->db->select_min('Year', 'minyear');
					        $this->db->where('SOCSECNUM', $soc);
					        $query = $this->db->get('cordat4p');
					        //$query = $this->db->query("SELECT * FROM cordat4;");
					       // echo $query->num_rows();
					        
					        $m_unit_att = 0;
					       
					        $m_unit_pass = 0;
					      
					         $m_unit_points = 0;

					       foreach ($query->result_array() as $row) {
					        	
					        for($year = (int)$row['minyear']; $year<= (int)$row['maxyear']; $year++){
					        	
					        	for ($term = 10; $term <= 50; $term += 10){
					        		$this->db->select('*');
					        	$this->db->where('SOCSECNUM', $soc);
					        	$this->db->where('Year', $year);
					        	$this->db->where('TERM', $term);
					        	$query = $this->db->get('cordat4p');
					        	if($query->result_array()) {

					        		?>
					  <table id="keywords">
					    <thead>
					      <tr class="tb_title">
					        <th><span>Course</span></th>
					        <th><span>Description</span></th>
					        <th><span>Hrs Att</span></th>
					        <th><span>Hrs Pass</span></th>
					        <th><span>Grade</span></th>
					        <th><span>Honor Pts</span></th>
					      
					        
					      </tr>
					    </thead>
					      
					        		


					    <tbody>
					    	
					      

					    	<tr class="tb_year">
						        <td class="tb_year"><?php if($term == 10) echo  "SP"."    ".$year; 
						        if($term == 20) echo  "S1"." ".$year; 
						        if($term == 30) echo  "S2"." ".$year; 
						        if($term == 40) echo  "FA"." ".$year; 
						        if($term == 50) echo  "WI"." ".$year; 
						        ?></td>
						        <td class="tb_year"></td>
						        <td class="tb_year"></td>
						        <td class="tb_year"></td>
						        <td class="tb_year"></td>
						        <td class="tb_year"></td>
					        
					      	</tr>
					      
					    	
					    	<?php 
					  
					    	$c_unit_att = 0;
					       
					        $c_unit_pass = 0;
					     
					        $c_unit_points = 0;
					    	foreach($query->result_array() as $row1) { 
					    		
					        
					    		?>
					      <tr class="tb_detail">
					        <td ><?php echo  $row1['DISCIPLINE']."-".$row1['COURSENO']; ?></td>
					        <td class="description"><?php echo  $row1['Description']; ?></td>
					        <td ><?php if($row1['GRADE'] == "A"){ echo $row1['HOURSCRED']; $c_unit_att += (INT) $row1['HOURSCRED']; }
					        else if($row1['GRADE'] == "B"){ echo $row1['HOURSCRED']; $c_unit_att += (INT) $row1['HOURSCRED']; }
					        else if($row1['GRADE'] == "C"){ echo $row1['HOURSCRED']; $c_unit_att += (INT) $row1['HOURSCRED']; }
					        else if($row1['GRADE'] == "D"){ echo $row1['HOURSCRED']; $c_unit_att += (INT) $row1['HOURSCRED']; }
					        else if($row1['GRADE'] == "F"){ echo $row1['HOURSCRED']; $c_unit_att += (INT) $row1['HOURSCRED']; }
					       
					       else if($row1['GRADE'] == "P"){ echo $row1['HOURSCRED']; $c_unit_att += 0; }
					       else if($row1['GRADE'] == "W"){ echo 0; $c_unit_att += 0; }
					       else if($row1['GRADE'] == null){ echo $row1['HOURSCRED']; $c_unit_att += 0; }
					       else  { echo 0; $c_unit_att += 0; } ?></td>

					        <td ><?php if($row1['GRADE'] == "A"){ echo $row1['HOURSCRED']; $c_unit_pass += (INT) $row1['HOURSCRED']; }
					        else if($row1['GRADE'] == "B"){ echo $row1['HOURSCRED']; $c_unit_pass += (INT) $row1['HOURSCRED']; }
					        else if($row1['GRADE'] == "C"){ echo $row1['HOURSCRED']; $c_unit_pass += (INT) $row1['HOURSCRED']; }
					        else if($row1['GRADE'] == "D"){ echo $row1['HOURSCRED']; $c_unit_pass += (INT) $row1['HOURSCRED']; }
					        else if($row1['GRADE'] == "P"){ echo $row1['HOURSCRED']; $c_unit_pass += (INT) $row1['HOURSCRED']; }
					        else if($row1['GRADE'] == "F"){ echo 0; $c_unit_pass += 0; }
					       
					       else if($row1['GRADE'] == "W"){ echo 0; $c_unit_pass += 0; }
					       else if($row1['GRADE'] == null){ echo 0; $c_unit_att += 0; }

					       else { echo 0; $c_unit_pass += 0; } ?></td>
					        <td ><?php echo  $row1['GRADE']; ?></td>
					        <td ><?php if($row1['GRADE'] == "A"){ echo 4 * (INT) $row1['HOURSCRED']; $c_unit_points += 4 * (INT) $row1['HOURSCRED']; }
					        else if($row1['GRADE'] == "B"){ echo 3 * (INT) $row1['HOURSCRED']; $c_unit_points += 3 * (INT) $row1['HOURSCRED']; }
					        else if($row1['GRADE'] == "C"){ echo 2 * (INT) $row1['HOURSCRED']; $c_unit_points += 2 * (INT) $row1['HOURSCRED']; }
else if($row1['GRADE'] == "D"){ echo (INT) $row1['HOURSCRED']; $c_unit_points += (INT) $row1['HOURSCRED']; }
								        		         
					        
					       else  echo 0; $c_unit_points += 0; ?></td>
					        
					      </tr>

					      
					        
					     <?php } ?>
					     </tbody>
					   

					  </table>
					  <table id="keywords1">
					 	<tbody class="sectb">
							      <tr class="second_tb">
							        <td class="space_td"></td>
							        <td >UNIT ATTEMPT</td>
							        <td >UNIT PASSED</td>
							        <td >POINTS</td>
							        <td >AVERAGE</td>
							        
							      </tr>
							      <tr class="second_tb">
							        <td >CURRENT</td>
							        <td ><?php echo $c_unit_att;  $m_unit_att += $c_unit_att;?></td>
							        <td ><?php echo $c_unit_pass; $m_unit_pass += $c_unit_pass;?></td>
							        <td ><?php echo $c_unit_points; $m_unit_points += $c_unit_points;?></td>
							        <td ><?php if($c_unit_att != 0) echo number_format($c_unit_points/$c_unit_att, 3); else echo 0;?>
							        	</td>
							        
							      </tr>
							      <tr class="second_tb">
							        <td >CUMULATIVE</td>
							        <td ><?php echo $m_unit_att; ?></td>
							        <td ><?php echo $m_unit_pass; ?></td>
							        <td ><?php echo $m_unit_points; ?></td>
							        <td ><?php  if($m_unit_att != 0) echo number_format($m_unit_points/$m_unit_att, 3); else echo 0; ?></td>
							        
							      </tr>
						</tbody>
					  
				</table>
					  <?php
					}


					        	}


					        }

					         for($year = (int)$row['maxyear']; $year<= (int)$row['maxyear']+1; $year++){
					        	
					        	for ($term = 10; $term <= 50; $term += 10){
					        		$this->db->select('*');
					        	$this->db->where('SOCSECNUM', $soc);
					        	$this->db->where('Year', $year);

					            if($term == 10)
					        	$this->db->where('TERM', 'SP');
					        	else if($term == 20)
					        	$this->db->where('TERM', 'S1');
					        	else if($term == 30)
					        	$this->db->where('TERM', 'S2');
					        	else if($term == 40)
					        	$this->db->where('TERM', 'FA');
					        	else
					        	$this->db->where('TERM', 'WI');

					        	$query = $this->db->get('cordat4');
					        	if($query->result_array()) {

					        		?>
  
					  <table id="keywords">
					    <thead>
					      <tr class="tb_title">
					        <th><span>Course</span></th>
					        <th><span>Description</span></th>
					        <th><span>Hrs Att</span></th>
					        <th><span>Hrs Pass</span></th>
					        <th><span>Grade</span></th>
					        <th><span>Honor Pts</span></th>
					      
					        
					      </tr>
					    </thead>
					      
					        		


					    <tbody>
					    	
					      


					    	<tr class="tb_year">
						        <td class="tb_year"><?php if($term == 10) echo  "SP"."    ".$year; 
						        if($term == 20) echo  "S1"." ".$year; 
						        if($term == 30) echo  "S2"." ".$year; 
						        if($term == 40) echo  "FA"." ".$year; 
						        if($term == 50) echo  "WI"." ".$year; 
						        ?></td>
						        <td class="tb_year"></td>
						        <td class="tb_year"></td>
						        <td class="tb_year"></td>
						        <td class="tb_year"></td>
						        <td class="tb_year"></td>
					        
					      	</tr>
					     
					    	<?php 
					  
					    	$c_unit_att = 0;
					       
					        $c_unit_pass = 0;
					     
					        $c_unit_points = 0;
					    	foreach($query->result_array() as $row1) { 
					    		
					        
					    		?>
					      <tr class="tb_detail">
					        <td ><?php echo  $row1['DISCIPLINE']."-".$row1['COURSENO']; ?></td>
					        <td class="description"><?php echo  $row1['Description']; ?></td></td>
					        <td ><?php if($row1['GRADE'] == "A"){ echo $row1['HOURSCRED']; $c_unit_att += (INT) $row1['HOURSCRED']; }
					        else if($row1['GRADE'] == "B"){ echo $row1['HOURSCRED']; $c_unit_att += (INT) $row1['HOURSCRED']; }
					        else if($row1['GRADE'] == "C"){ echo $row1['HOURSCRED']; $c_unit_att += (INT) $row1['HOURSCRED']; }
					        else if($row1['GRADE'] == "D"){ echo $row1['HOURSCRED']; $c_unit_att += (INT) $row1['HOURSCRED']; }
					        else if($row1['GRADE'] == "F"){ echo $row1['HOURSCRED']; $c_unit_att += (INT) $row1['HOURSCRED']; }
					        else if($row1['GRADE'] == "P"){ echo $row1['HOURSCRED']; $c_unit_att += 0; }
					       
					      else if($row1['GRADE'] == "W"){ echo 0; $c_unit_att += 0; }
					       else if($row1['GRADE'] == null){ echo $row1['HOURSCRED']; $c_unit_att += 0; }
					       else  { echo 0; $c_unit_att += 0; } ?></td>

					        <td ><?php if($row1['GRADE'] == "A"){ echo $row1['HOURSCRED']; $c_unit_pass += (INT) $row1['HOURSCRED']; }
					        else if($row1['GRADE'] == "B"){ echo $row1['HOURSCRED']; $c_unit_pass += (INT) $row1['HOURSCRED']; }
					        else if($row1['GRADE'] == "C"){ echo $row1['HOURSCRED']; $c_unit_pass += (INT) $row1['HOURSCRED']; }
					        else if($row1['GRADE'] == "D"){ echo $row1['HOURSCRED']; $c_unit_pass += (INT) $row1['HOURSCRED']; }
					        else if($row1['GRADE'] == "P"){ echo $row1['HOURSCRED']; $c_unit_att += (INT) $row1['HOURSCRED']; }
					        else if($row1['GRADE'] == "F"){ echo 0; $c_unit_pass += 0; }
					       
					         else if($row1['GRADE'] == "W"){ echo 0; $c_unit_pass += 0; }
					       else if($row1['GRADE'] == null){ echo 0; $c_unit_att += 0; }

					       else { echo 0; $c_unit_pass += 0; } ?></td>
					        <td ><?php
					        if($row1['GRADE'] == null) echo "IP";
					        else  echo  $row1['GRADE']; ?></td>
					        <td ><?php if($row1['GRADE'] == "A"){ echo 4 * (INT) $row1['HOURSCRED']; $c_unit_points += 4 * (INT) $row1['HOURSCRED']; }
					        else if($row1['GRADE'] == "B"){ echo 3 * (INT) $row1['HOURSCRED']; $c_unit_points += 3 * (INT) $row1['HOURSCRED']; }
					        else if($row1['GRADE'] == "C"){ echo 2 * (INT) $row1['HOURSCRED']; $c_unit_points += 2 * (INT) $row1['HOURSCRED']; }
					        else if($row1['GRADE'] == "D"){ echo (INT) $row1['HOURSCRED']; $c_unit_points += (INT) $row1['HOURSCRED']; }
					        
					       else 
					        echo 0; $c_unit_points += 0; ?></td>
					        
					      </tr>

					      
					        
					     <?php } ?>
					     </tbody>
					   

					  </table>
					  <table id="keywords1">
					 	<tbody class="sectb">
							      <tr class="second_tb">
							        <td class="space_td"></td>
							        <td >UNIT ATTEMPT</td>
							        <td >UNIT PASSED</td>
							        <td >POINTS</td>
							        <td >AVERAGE</td>
							        
							      </tr>
							      <tr class="second_tb">
							        <td >CURRENT</td>
							        <td ><?php echo $c_unit_att;  $m_unit_att += $c_unit_att;?></td>
							        <td ><?php echo $c_unit_pass; $m_unit_pass += $c_unit_pass;?></td>
							        <td ><?php echo $c_unit_points; $m_unit_points += $c_unit_points;?></td>
							        <td ><?php 
							        if ($c_unit_att == 0) echo 0;
							        else echo number_format($c_unit_points/$c_unit_att, 3);?></td>
							        
							      </tr>
							      <tr class="second_tb">
							        <td >CUMULATIVE</td>
							        <td ><?php echo $m_unit_att; ?></td>
							        <td ><?php echo $m_unit_pass; ?></td>
							        <td ><?php echo $m_unit_points; ?></td>
							        <td ><?php if($m_unit_att != 0) echo number_format($m_unit_points/$m_unit_att, 3); 
							        else echo 0;?></td>
							        
							      </tr>
						</tbody>
					  
				</table>
					  <?php
					}


					        	}


					        }
}

					        
					        ?>
					 
 </div>

</body>

	

</body>
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
</html>
