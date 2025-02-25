<?php
include('h.php');
include("condb.php");
?>
<!DOCTYPE html>
<head>
 

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">



 
    <!-- <title>Sidebar Example</title> -->
    
    <link href="./หน้าบ้าน/css/as.css?v=1.0" rel="stylesheet" > 
    <link href="./หน้าบ้าน/Navbar.css?v=1.0" rel="stylesheet" > 

  
   
    

   




</head>
<body>
<?php include('ตัวเสริม.php');?>

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
          
         
            
          <p class="ssa">สู้ๆนะ</p>
          <p class="hh" > 55 </p>
          
          <p class="hh" >555</p>
         



          </div>
          </div>
          </div>
          <!-- </div> -->

   
          
     
   
    
 

  
</body>
</html>
