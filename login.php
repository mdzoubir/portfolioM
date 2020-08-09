<?php
session_start();
include('conn.php');
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $requit = "SELECT * FROM admin WHERE Username='$username' AND password='$password'";
    $result = mysqli_query($conn, $requit);
    if(mysqli_num_rows($result)>0){
        $_SESSION['username']=$username;
        header("LOCATION:dashbord.php");
    } else{
        $none= ' username or password invalid';
    }
}





include('view/includes/header.php');
?>

<div class="header">
<?php include('view/includes/navbar.php');?>
    <div class="login">
        <div>
            <img src="assets/images/log.webp" alt="">
            <h3 class="text">LOGIN</h3>
        </div>
        <p class="noconn"><?php if(isset($none)){echo $none;} ?></p>
        <form class="otp" action="" method="POST">
            <div>
                <label for="">User name</label>
                <input type="text" placeholder="User name" name="username">
            </div>
            <div>
                <label for="">Password</label>
                <input type="password" placeholder="password" name="password">
            </div>
            <input type="submit" class="submit" value="Login" name="submit">
        </form>
    </div>    

</div>








<?php
include('view/includes/footer.php');

?>