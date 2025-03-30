<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Popup</title>
    <style>
        /* สไตล์สำหรับรูปภาพ */
        .thumbnail {
            width: 150px;
            cursor: pointer;
            transition: transform 0.3s ease;
        }

        .thumbnail:hover {
            transform: scale(1.1);
        }

        /* สไตล์สำหรับป๊อปอัป */
        .popup {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            justify-content: center;
            align-items: center;
            z-index: 1000;
        }

        .popup img {
            max-width: 90%;
            max-height: 90%;
            border: 2px solid #fff;
            border-radius: 10px;
        }

        .popup:target {
            display: flex;
        }

        /* ปุ่มปิด */
        .close-btn {
            position: absolute;
            top: 20px;
            right: 20px;
            color: white;
            font-size: 2rem;
            text-decoration: none;
        }
    </style>
</head>

<body>

    <!-- รูปภาพ -->
    <a href="#popup1">
        <img src="your-image1.jpg" alt="Image 1" class="thumbnail">
    </a>
    <a href="#popup2">
        <img src="your-image2.jpg" alt="Image 2" class="thumbnail">
    </a>

    <!-- ป๊อปอัปสำหรับรูปภาพที่ 1 -->
    <div id="popup1" class="popup">
        <a href="#" class="close-btn">&times;</a>
        <img src="your-image1.jpg" alt="Popup Image 1">
    </div>

    <!-- ป๊อปอัปสำหรับรูปภาพที่ 2 -->
    <div id="popup2" class="popup">
        <a href="#" class="close-btn">&times;</a>
        <img src="your-image2.jpg" alt="Popup Image 2">
    </div>

</body>

</html>