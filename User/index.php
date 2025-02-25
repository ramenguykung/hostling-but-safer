<?php
include("h.php");
include("../condb.php");
?>
<!DOCTYPE html>
<head>
  
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <!-- <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet"> -->
    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
  
  <!-- <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" > 
    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script> -->
    <title>BC House</title>
    <link href="../หน้าบ้าน/Navbar.css?v=1.0" rel="stylesheet" > 
    <link href="../หน้าบ้าน/index.css?v=1.0" rel="stylesheet" > 

</head>
<body class="hold-transition skin-purple sidebar-mini">
<?php include('ตัวเสริม.php');?>
<?php
     
     include('navbar.php');
     ?>
   <br>
   
   
 

 


  <div class="container">
    <div class="row">
      <div class="col-md-12" style="margin-top: 10px">
        <div class="row">
            <?php
           $act = (isset($_GET['act']) ? $_GET['act'] : '');
            // $q = $_GET['q'];
            // if($act=='showbytype'){
            // include('list_prd_by_type.php');
            // }else 
            // โค้ดส่วนนี้ไม่ใช้เพราะทำต่อไม่เป็น
            // if($q!=''){
            // include("show_product_q.php");
            // }else

             if($act=='add'){
            include("ตัวแก้ของแก้ไขโปรไฟล์.php");
            }else if($act=='Pr'){
            

             
              
              include("Profile.php");






            }else if($act=='Edit'){

              include("EditProfile.php");

            }else{

            

            }


            ?>

    
     
          </div>
        </div>
      </div>
    </div>


</body>
</html>
<?php include('script4.php');?> 