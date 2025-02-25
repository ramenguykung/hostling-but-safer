<?php 
session_start();
if(isset($_POST['Email'])){
    // connection
    include("condb.php");

    // รับค่า user & mem_password
    $Email = mysqli_real_escape_string($con, $_POST['Email']);
    $Password = mysqli_real_escape_string($con, $_POST['Password']);

    // query สำหรับ user
    $sqlUser = "SELECT * FROM user WHERE Email ='".$Email."' AND user_password='".$Password."'";
    $resultUser = mysqli_query($con, $sqlUser);

    // query สำหรับ admin
    $sqlAdmin = "SELECT * FROM Web_admin WHERE Email ='".$Email."' AND admin_Password='".$Password."'";
    $resultAdmin = mysqli_query($con, $sqlAdmin);

    if(mysqli_num_rows($resultUser) == 1){
        $rowUser = mysqli_fetch_array($resultUser);
        $_SESSION["Id_User"] = $rowUser["Id_User"];
        $_SESSION["m_level"] = $rowUser["m_level"];
        $_SESSION["user_name"] = $rowUser["user_name"];
        $_SESSION["user_img"] = $rowUser["user_img"];

        if($rowUser['m_level'] == "User"){
            Header("Location: User/");
        }

    } else if(mysqli_num_rows($resultAdmin) == 1){
        $rowAdmin = mysqli_fetch_array($resultAdmin);
        $_SESSION["Id_Admin"] = $rowAdmin["Id_Admin"];
        $_SESSION["m_level"] = $rowAdmin["m_level"];

        if($rowAdmin['m_level'] == "admin"){
            Header("Location: admin/");
        }

    } else {
        echo "<script>";
        echo "alert(\" user หรือ password ไม่ถูกต้อง\");"; 
        echo "window.history.back()";
        echo "</script>";
    }

} else {
    Header("Location: index.php"); // user & mem_password incorrect back to login again
}
?>
