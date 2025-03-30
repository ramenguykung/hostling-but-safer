<?php
include("h.php");
include("condb.php");
?>
<!DOCTYPE html>

<head>
  <link href="./หน้าบ้าน/Home.css?v=1.0" rel="stylesheet">
</head>

<body>

  <?php include('navbarnew.php'); ?>

  <div class="divhome">

    <div class="divhome2">
      <div class="title-bannerH">
        <img src="./imgs/imgmain.jpg" width="1410" height="800" class="imgmainH" alt="">
        <h1 class="textimgH">หอพัก BC</h1>
      </div>
    </div>

    <div class="storyboard-slideH">

      <div class="top-navigationH">
        <h1 class="texttopmain">Overview</h1>
        <a href="Reviews.php">
          <h1 class="texttop"> Feedback</h1>
        </a>
      </div>

      <div class="middle-holderH">

        <div class="flex-row-div">
          <img src="./imgs/IMG5.jpg" width="440" height="520" class="imgflex-row-div" alt="">
          <div class="buttoonsimgflex-row-div">
          </div>
        </div>

        <div class="storyboard-text-rightbutton">
          <div class="textstoryboard-text-rightbutton">
            <h1 class="textstoryboard-text-rightbuttonmain">Overview</h1>
            <h1 class="textstoryboard-text"> ห้องพักใกล้ มหาวิทยาลัยเทคโนโลยีพระจอมเกล้าพระนครเหนือ ศูนย์กรุงเทพ เป็นอาคารห้องพัก มี 2 อาคาร
              ประกอบด้วยอาคารหนึ่ง จำนวน 18 ห้อง เป็นห้องพัดลม และอาคารสอง จำนวน 6 ห้อง เป็นห้องแอร์</h1>
            <h1 class="textstoryboard-text-rightbuttonmain">Facilities</h1>
            <h1 class="textstoryboard-text"> อาคารตึก 1 มี Facilities คือ ตู้เสื้อผ้า เตียงนอน ฝักบัว โต๊ะ1ตัว พัดลม
              <br> อาคารตึก 2 มี Facilities คือ ตู้เสื้อผ้า เตียงนอน ฝักบัว โต๊ะ2ตัว แอร์ ระเบียงหลังห้อง
            </h1>
          </div>
        </div>
      </div>
    </div>

    <div class="divimgsH">
      <div class="flex-column-divH">
        <div class="imgss">
          <img src="./imgs/IMG1.jpg" width="312" height="320" class="imgsss" alt="">
        </div>
        <div class="imgss">
          <img src="./imgs/IMG2.jpg" width="312" height="320" class="imgsss" alt="">
        </div>
        <div class="imgss">
          <img src="./imgs/IMG3.jpg" width="312" height="320" class="imgsss" alt="">
        </div>
        <div class="imgss">
          <img src="./imgs/IMG4.jpg" width="312" height="320" class="imgsss" alt="">
        </div>
      </div>
    </div>

    <div class="storyboard-text-facilities">
      <h>Facilities in the building</h>
      <div class="storyboard-facilities">
        <img src="./imgs/bin.svg" alt="Bin">
        <img src="./imgs/cctv.svg" alt="CCTV">
        <img src="./imgs/fire.svg" alt="Fire Safety">
        <img src="./imgs/seven.svg" alt="Seven Eleven">
        <img src="./imgs/washing.svg" alt="Washing Machine">
        <img src="./imgs/water dispenser.svg" alt="Water Dispenser">
      </div>
    </div>
  </div>

</body>

</html>