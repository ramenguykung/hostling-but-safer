<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Popup</title>
    <style>
        /* สไตล์รูปภาพพื้นฐาน */
        .placeholder {
            width: 250px;
            height: 200px;
        }

        /* สไตล์ปุ่ม */
        .view-button {
            display: inline-block;
            margin-top: 10px;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        .view-button:hover {
            background-color: #45a049;
        }

        /* ป๊อปอัปเริ่มต้นซ่อน */
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

        /* แสดงป๊อปอัป */
        .popup.active {
            display: flex;
        }

        .popup img {
            max-width: 80%;
            max-height: 80%;
            border: 2px solid white;
            border-radius: 10px;
        }

        /* ปุ่มปิด */
        .close-btn {
            position: absolute;
            top: 20px;
            right: 20px;
            font-size: 2rem;
            color: white;
            cursor: pointer;
            text-decoration: none;
        }
    </style>
</head>
<body>
<br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>

    <!-- รูปภาพ -->
    <img src="../user_img/payman.png" class="placeholder" alt="logo">

    <!-- ปุ่มสำหรับเปิดป๊อปอัป -->
    <button class="view-button" onclick="showPopup()">View Image</button>

    <!-- ป๊อปอัป -->
    <div id="popup2" class="popup">
        <span class="close-btn" onclick="hidePopup()">&times;</span>
        <img src="../user_img/payman.png" alt="logo">
    </div>

    <script>
        // แสดงป๊อปอัป
        function showPopup() {
            const popup = document.getElementById('popup2');
            popup.classList.add('active');
        }

        // ปิดป๊อปอัป
        function hidePopup() {
            const popup = document.getElementById('popup2');
            popup.classList.remove('active');
        }
    </script>

</body>
</html>
