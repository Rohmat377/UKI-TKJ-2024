<?php
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Galeri</title>
<link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/stylesheet.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	 <style>
		body { 
		  background: url(css/12.jpg) no-repeat center center fixed; 
		  -webkit-background-size: cover;
		  -moz-background-size: cover;
		  -o-background-size: cover;
		  background-size: cover;
		}
	</style>
</head>

<body style="">
<div class="login-container2" style="height: 20%; width: 50%; overflow-y: scroll; background-color: #ffffff;">
	<h2>Uki TJKT 2024</h2>
        <div class="login-header bordered">
            <a href="index.php">depan</a> | <a href="galeri.php">galeri</a>
        </div>
		<hr>
		<h3>Halaman Galeri</h3>
<?php
include('db.php');
if( !empty($_REQUEST['j']) ){
	$msg = '<div style="background:#F6F3C0;text-align:center;color:#999;">';
	$msg .= 'Gambar baru telah ditambahkan | <strong>' . $_REQUEST['j'];
	$msg .= '</strong></div>';
	echo $msg;
}
$query = "SELECT * FROM gambar";
$query = mysqli_query( $conn,$query );
if(!$query){
	die( mysqli_error($conn) );
}
while( $rows = mysqli_fetch_row($query) ){
	?>
	<p>
	<img src="<?php echo $url_folder_gambar . $rows[2];?>" width="100" />
	</p>
	<p class="text"><?php echo $rows[1]; ?></p>
	<hr />
<?php
}
?>
</div>
</body>
</html>
