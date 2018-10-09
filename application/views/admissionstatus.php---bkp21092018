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
 <title>Admission Status</title>
 <link href="<?php echo base_url(); ?>css/style.css" rel="stylesheet" type="text/css" />

 <link href="<?php echo base_url(); ?>css/financialaid.css" rel="stylesheet" type="text/css" />
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

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
}

/* The Close Button */
.close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}
.container1 {
    overflow: hidden;
    background-color: #00abeb;
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
    background-color: #00abeb;
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
     
  <h1>Admission Status</h1>
  
  
    	<div class="underline">
            </div>
<?php foreach ($admissionstatus as $financialaid):


            # code...
        ?>
        <div class="container3">
            <?php echo form_open( base_url().'user/admfix'); ?>
            <div class="title">
                <span><?php echo $financialaid['itemnamelong']; ?></span> 
            </div>
            <div class ="container_wrapper">

            <div class="information">
                <div class="items">
                    <div class="item_wrapper">
                        <div class="date_wrapper">
                            
                            <div class="date">  
                                <span><?php echo $financialaid['Date']; ?></span>
                                <input type="hidden" name="itemname" id="itemname" value="<?php echo $financialaid['ItemName']; ?>"/>
                                <input type="hidden" name="id" id="id" value="<?php echo $financialaid['id']; ?>"/>                           
                            </div>
                        </div>
                        <div class="itemstatus" style="background-color: <?php echo $financialaid['Color']; ?>;">
                            <span><?php echo $financialaid['ItemStatus']; ?></span> 
                        </div>
                    </div>
                    <div class="fix" <?php if($financialaid['ItemStatus'] != "Web Response"){ ?> style="display: none;" <?php } ?>>

                        
                         

                         <input type="submit" class="fix_btn" value=" Fix Now " name="submit"/><br />   

                       
                    

                       
                    </div>

                </div>

                <div class="itemname">
                    <div class="itemnamelong">
                        
                    </div>
                    <div class="checkbox">
                        <img src="<?php echo base_url(); ?>css/<?php if($financialaid['Color'] == "Green") echo "check";
                        else echo "uncheck"; ?>.jpg">
                    </div>
                </div>

            </div>
            <div class="status">
                <span><?php  
                $url = '~(?:(https?)://([^\s<]+)|(www\.[^\s<]+?\.[^\s<]+))(?<![\.,:])~i'; 
                $string = preg_replace($url, '<a href="$0" target="_blank" title="$0">$0</a>', $financialaid['itemstatuslong']);
                echo $string;
                                

                ?></span>

            </div>

            </div>
             <?php echo form_close(); ?>
        </div>
        <div class="underline"></div>
        

    	
      
       
      
    
       
      <?php endforeach; ?>
 
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
