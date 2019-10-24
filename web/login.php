
<?php
    session_start();
//Xử lý đăng nhập
if (isset($_POST['dangnhap'])) 
{
    //Kết nối tới database
    $conn = mysqli_connect('localhost','root','','ntt');
     
    //Lấy dữ liệu nhập vào
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $password = mysqli_real_escape_string($conn,$_POST['password']);
     
    //Kiểm tra đã nhập đủ tên đăng nhập với mật khẩu chưa
    if (!$email || !$password) {
        echo "Vui lòng nhập đầy đủ tên đăng nhập và mật khẩu. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
     
    // mã hóa pasword
    // $hashed_password = password_hash($password, PASSWORD_DEFAULT);
     
    //Kiểm tra tên đăng nhập có tồn tại không
    $query = "SELECT userid, password, first_name, user_level FROM users WHERE email=?";
    $q = mysqli_stmt_init($conn);
    mysqli_stmt_prepare($q, $query);

      // bind $id to SQL Statement
    mysqli_stmt_bind_param($q, "s", $email); 

     // execute query
     
     mysqli_stmt_execute($q);

$result = mysqli_stmt_get_result($q);

$row = mysqli_fetch_array($result, MYSQLI_NUM);
if (mysqli_num_rows($result) == 1) {
//if one database row (record) matches the input:-
// Start the session, fetch the record and insert the 
// values in an array 
if (password_verify($password, $row[1])) {          //#2
session_start();				  				
// Ensure that the user level is an integer. 
$_SESSION['user_level'] = (int) $row[3];
// Use a ternary operation to set the URL             #3
$url = ($_SESSION['user_level'] === 1) ? 'web/logout.php' :
'members.php'; 
header('Location: ' . $url); 
// Make the browser load either the members or the admin page
} else { // No password match was made.
$errors[] = 'E-mail/Password entered does not match our records. ';
$errors[] = 'Perhaps you need to register, just click the Register ';
$errors[] = 'button on the header menu';
}
} else { // No e-mail match was made.
$errors[] = 'E-mail/Password entered does not match our records. ';
$errors[] = 'Perhaps you need to register, just click the Register ';
$errors[] = 'button on the header menu';
}
   
    //So sánh 2 mật khẩu có trùng khớp hay không
    
   
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
        <form action='' method='post'>
            Email:<input type="text" name="email"><br/>
            Password: <input type="password" name="password"><br/>
            <input type='submit' name="dangnhap" value='Đăng nhập' />
            <a href='dangky.php' title='Đăng ký'>Đăng ký</a>
        </form>
    </body>
</html>