<html>
<head>
<title>Sửa Thành Viên</title>
<style type="text/css">
form {
    border:  black solid 1px;
    width: 80%;
    height: 600px;
    background-image: url('images/brg.jpg');
    border-radius: 10px;
    margin: auto;
    padding-left: 300px ;
    color:#fff;
    background-size: cover;
    background-position: center center;

    
    
}

input,#a {
    margin: 10px;
    border-radius: 10px;
    border: none;
    padding: 5px;
    background-color:rgb(179, 149, 51);
    color:#fff;
}
input[name="update"]{
   width:150px; 
}

</style>
</head>
<body>
<?php 

$conn=  mysqli_connect('localhost','id11249213_root','chienboston123','id11249213_ntt');
    //buoc2: kiem tra va xu ly loi neu co
    if(!$conn)//hieu: conn khac TRUE
    {
       die('Error...'.mysql_connect_error());
    }else{
        if (!isset($_GET['userid'])) {
            die("Thông số bị thiếu!");  
          }
          
          $userid = intval($_GET['userid']);
       //buoc 3: Thuc hien truy van du lieu
        $sql="SELECT * from users where userid = '$userid'" or die("Lỗi truy vấn.");
        $result = mysqli_query($conn, $sql) or die( mysqli_error($conn));
        $rs = mysqli_fetch_array($result);
    
    }
?>

<form action="xl_edit.php" method="post" >
<h1>Cập nhập người dùng</h1>
<input type="hidden" name="userid" value="<?php echo $rs['userid'];?>"><br> 
    FirstName:<input type="text" name="first_name" value="<?php echo $rs['first_name'];?>" required><br>
    LastName:<input type="text" name="last_name" value="<?php echo $rs['last_name'];?>" required><br>
    Email:<input style="margin-left:39px;" type="text" name="email" value="<?php echo $rs['email'];?>" required><br>
    Password: <input type="password" name="password" value="<?php echo $rs['password'];?>" required><br>
    UserLevel:<input type="text" name="user_level" value="<?php echo $rs['user_level'];?>" required><br>
    <input type="submit" name="update" value="Cập nhật"> <a id="a" href='javascript: history.go(-1)'>Trở lại</a>";
</form>
</body>
</html>