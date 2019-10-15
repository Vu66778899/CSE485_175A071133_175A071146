<!DOCTYPE html>
<html lang="en">
<head>
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="Css/StyleLogin.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">

 
</head>
<body>
          <div class="name" >
              <a href="#"><img src="" alt="logo-hvnh" style="width: 100%;"></a>
            </div>
            <form method="post" action="login.php">
            <div id="hidden" class="alert-danger">
                Tài khoản hoặc mật khẩu chưa chính xác
            </div>  
              <div class="input-group">
                  <i class="fas fa-user" style="font-size: 30px;"></i>
                  <input type="text" id="name" name="username" placeholder="Tên người dùng"><br>
              </div>        
              <div class="input-group">
                  <i class="fas fa-key" style="font-size: 25px;"></i>
                  <input type="password" id="pass" name="password" placeholder="Mật khẩu">
              </div>        
              <div class="input">
                  <input type="checkbox" name="ghi-nho" value="ghi-nho">Ghi nhớ
              </div>
              <div class="input-group">         
                  <button type="button" name="login" id="login" class="btn">Đăng nhập</button>
              </div>
              
            </form>
</body>
<script src="../Admin/JS/jquery-3.3.1.min.js"></script>
<script src="../Admin/JS/bootstrap.min.js"></script>
<script src="../Admin/JS/login.js"></script>
</html>