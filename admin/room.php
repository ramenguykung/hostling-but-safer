<?php include('h.php');?>
<body class="hold-transition skin-purple sidebar-mini">
  <div class="wrapper">
    <!-- Main Header -->
    <?php include('menutop.php');?>
        <?php include('menu_l.php');?>
    <div class="content-wrapper">
      <section class="content-header">
        <h1>
        <i class="glyphicon glyphicon-check hidden-xs"></i> <span class="hidden-xs">Room</span> 

        </h1>
      </section>
      <section class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="box">
              <div class="row">
                <div class="col-sm-12">
                  <div class="box-body">
                    <?php
                    $act = (isset($_GET['act']) ? $_GET['act'] : '');
                    if($act == 'add1'){
                        include('room_from_add_building_1.php');
                    }else if($act == 'add2'){
                        include('room_from_add_building_2.php');


                    } elseif ($act == 'edit1') {
                        include('room_edit_building_1.php');
                    }elseif ($act == 'edit2') {
                    
                      include('room_edit_building_2.php');
                    
                    
                    }else if($act == 'building_1'){

                      include('room_list_building_1.php');

                    }else if($act == 'building_2'){

                      include('room_list_building_2.php');

                    }
                    
                    
                    else{
                        include('room_list.php');
                    }
                  ?>                   
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </body>
  </html>
  <?php include('footerjs.php');?>



