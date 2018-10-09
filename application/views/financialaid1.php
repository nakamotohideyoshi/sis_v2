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
 <title>Financial Aid Status</title>
 <link href="<?php echo base_url(); ?>css/style.css" rel="stylesheet" type="text/css" />

 <link href="<?php echo base_url(); ?>css/financialaid.css" rel="stylesheet" type="text/css" />
 <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
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

<body style = "background: #29282B;
    font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
    font-size: 62.5%;
    line-height: 1;
    color: #585858;
    padding: 22px 10px;
    padding-bottom: 55px;">
    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" id="myModal">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
       <div class="modal-header">
        <h1> Submitted! </h1>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style = "margin-top: -99px;">
          <span aria-hidden="true">&times;</span>
         </button>
      </div>
      <div class="modal-body">
        <center style = "font-size: 14px;"> It will take one business day for these changes to show on the Financial Aid status page.</center>
      </div>
    </div>
  </div>
</div> 

     <h4 style = "font-family: 'Amarante', Tahoma, sans-serif;
    font-weight: bold;
    font-size: 7.4em;
    line-height: 1.7em;
    color: white;
    /* margin-bottom: 0px; */
    text-align: center;
    margin-top: 10px;"> Crowley's Ridge College</h4>
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
                 <a href="<?php echo base_url().'user'; ?>/six/<?php echo $year_list['Year']; ?>"><?php echo $year_list['Year']; ?></a>
                 <?php 


               
            }
         ?>
         
          
          
        </div>
      </div>
  </div>
  <h1>Financial Aid Status</h1>
  
  
    	<div class="underline">
            </div>
<?php foreach ($financialaids as $financialaid):


            # code...
        ?>
        <div class="container3">
            <?php echo form_open( base_url().'user/nine/'.$financialaid['ItemName']); ?>
            <div class="title">
                <span><?php echo $financialaid['ItemName Long']; ?></span> 
            </div>
            <div class ="container_wrapper">

            <div class="information">
                <div class="items">
                    <div class="item_wrapper">
                        <div class="date_wrapper">
                            <div class="year"> 
                                <span><?php echo $financialaid['Year']; ?></span>                           
                            </div>
                            <div class="date">  
                                <span><?php echo $financialaid['date']; ?></span>                           
                            </div>
                        </div>
                        <div class="itemstatus" style="background-color: <?php echo $financialaid['Color']; ?>;">
                            <span><?php echo $financialaid['ItemStatus']; ?></span> 
                        </div>
                    </div>
                    <div class="fix" <?php if($financialaid['ItemStatus'] != "Web Response"){ ?> style="display: none;" <?php } ?>>
                        
                        <input type="hidden" name="id" id="id" value="<?php echo $financialaid['id']; ?>"/>
                         

                         <input type="submit" class="fix_btn" value=" Fix Now " name="submit"/><br />   

                       
                    

                       
                    </div>

                </div>

                <div class="itemname">
                    <div class="itemnamelong">
                        <?php if($financialaid['DollarAmount'] != NULL){
                            ?>
                            <span><?php echo $financialaid['DollarAmount']; ?></span> 

                             
                        
                        <?php } ?>
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
                $string = preg_replace($url, '<a href="$0" target="_blank" title="$0">$0</a>', $financialaid['ItemStatus Long']);
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
  <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js'></script>
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

<script type="text/javascript">

  $(window).load(function() {
    $('#myModal').modal('show');
  });
 
</script>	

</body>
</html>
