<?php require_once('condb.php');
$query_typeprd = "SELECT * FROM tbl_type ORDER BY type_id ASC";
$typeprd =mysqli_query($con, $query_typeprd) or die ("Error in query: $query_typeprd " . mysqli_error());
// echo($query_typeprd);
// exit();
$row_typeprd = mysqli_fetch_assoc($typeprd);
$totalRows_typeprd = mysqli_num_rows($typeprd);
?>

<?php include('ตัวเสริม.php');?>


    <div class="col-md-12">
      <!-- fixed-top -->
      <nav class="navbar navbar-expand-lg    navbar-info  "   data-spy="affix" >
      <!-- bg-light  -->
 
   

       
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        &nbsp;


        <div class="container-fluid">
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">

        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"   style="font-size: 30px;">
        <font style="color:rgb(0, 9, 184) " > เมนู</font> 
        </a>

        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="btn btn-Light" href="index.php" role="button" style="font-size: 18px;">
         <font style="color:rgb(0, 9, 184) " > หน้าหลัก </font> 
        </a>
          <a class="btn btn-Light" href="index.php?act=add" role="button" style="font-size: 18px;">
          <font style="color:rgb(0, 9, 184) " > สมัครสมาชิกเพื่อซื้อสินค้า</font>   
          
          </a>

          <div class="dropdown-divider"></div>
          
          <form class="form-inline my-2 my-lg-0" name="qp" action="index.php" method="GET">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" name="q">
            <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
          </form>          
         
        </div>
      </li>


      </ul>

    
</div>
</div>




      

        
      
     
            
            <?php include('ตัวเสริมnavber.php');?>

          
            <a  class="btn btn-Light active " href="form_login.php" style="font-size: 15px;"> 
       
       login | เข้าสู่ระบบ</a>
                                  
          </ul>

          
        
       
        </div>
      </nav>
   
</div>
