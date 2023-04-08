<?php 
session_start();
include('includes/config.php');
error_reporting(0);
if(strlen($_SESSION['login'])==0)
  { 
header('location:index.php');
}
else{

if($_GET['action']='del')
{
$postid=intval($_GET['pid']);
$sql = 'SELECT hoten, sdt, empail, noidung FROM employee';
mysql_select_db('newsportal');
$retval = mysql_query( $sql, $con );

if(! $retval )
{
   die('Không thể lấy dữ liệu: ' . mysql_error());
}

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xuất file</title>
</head>
<body>
                <form method="POST" >
                    <div>
                        <p>Họ và tên</p>
                    </div>
                </form>
</body>
</html>
<?php } ?>