<?php 
    function Location($url)
                        { ?>
                            <script type ="text/javascript">
                            window.location = "<?=$url?>";
                            </script>
<?php }?>
<?php
  //Buoc 1
  $conn=  mysqli_connect('localhost','id11249213_root','chienboston123','id11249213_ntt');
//buoc2: kiem tra va xu ly loi neu co
if(!$conn)//hieu: conn khac TRUE
{
   die('Error...'.mysql_connect_error());
}
else {
    if (!isset($_GET['userid'])) {
        die("Thông số bị thiếu!");  
      }
      
      $userid = intval($_GET['userid']);
   //buoc 3: Thuc hien truy van du lieu
    $sql="DELETE from users where userid = '$userid'";
    $result =mysqli_query($conn,$sql);
    location("../quanlythanhvien.php"); 
}
?>