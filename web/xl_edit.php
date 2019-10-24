<?php 
    function Location($url)
                        { ?>
                            <script type ="text/javascript">
                            window.location = "<?=$url?>";
                            </script>
<?php }?>
<?php
$conn=  mysqli_connect('localhost','root','','ntt');
if(!$conn)
    {
       die('Error...'.mysql_connect_error());
    }
    

if(isset($_POST['update'])){
    $userid = mysqli_real_escape_string($conn, $_POST['userid']); 
    $firstname = mysqli_real_escape_string($conn, $_POST['first_name']); 
    $lastname = mysqli_real_escape_string($conn, $_POST['last_name']); 
    $email = mysqli_real_escape_string($conn, $_POST['email']); 
    $password = mysqli_real_escape_string($conn, $_POST['password']); 
    $userlevel = mysqli_real_escape_string($conn, $_POST['user_level']); 
    $hashed_password = password_hash($password, PASSWORD_BCRYPT);
    
    $sql= mysqli_query($conn,"update users 
                                set first_name = '$firstname', last_name = '$lastname', email = '$email',password = '$hashed_password', user_level ='$userlevel' 
                                where userid ='$userid'") or die('Error!!!');
        if($sql){
            location("thanhvien.php"); 
    }else{
        echo 'Ban phải điền đầy đủ các thông tin.';
    }
}
    
?>