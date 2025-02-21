<?php
include('h.php');
include("condb.php");
?>
<!DOCTYPE html>
<head>
 

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

 
    <!-- <title>Sidebar Example</title> -->
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" > 
    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
    <link href="../csss/as.css" rel="stylesheet" > 

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   
    <link rel="stylesheet" href="login/css/style.css">

   




</head>
<body>

<!-- <div class="your-element">
   <p> asdasdasddasdsadasdasdasads</p>
</div> -->
     
      <?php
     
  include('navbar.php');
  ?>
<br>



 
 
 
 
 <br><br>

   
        <!-- <div class="content"> -->
    
  

        <div class="container">
    <div class="row">
    <div class="col-md-12" style="margin-top: 10px">
    <div class="row">

  
            <?php
            $act = (isset($_GET['act']) ? $_GET['act'] : '');

            //  $q = $_GET['q'];
            // if($act=='showbytype'){
            // include('list_prd_by_type.php');
            // }else 
           
            // if($q!=''){
            //   include('ค้นหา/show_product55.php');
            // }else
           
            if($act=='add'){  ?>
            
              <?php    include("member_form_add.php"); ?>
         


             <?php  }else{   ?>
				


             
            
          
            <?php    } ?>
          
         
            <div class="dt">
          <p>สู้ๆนะ</p>
          </div>



          </div>
          </div>
          </div>
          <!-- </div> -->

   
          
     
   
    
 

  
</body>
</html>
