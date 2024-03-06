<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit(); 
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>UKI</title>
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
	<div class="login-container">
	<h2>UKI TKJ</h2>
        <div class="login-header bordered">
            <a href="index.php">depan</a> | <a href="galeri.php">galeri</a>
        </div>
		<hr>
<form action="upload.php" enctype="multipart/form-data" method="post">
<div class="login-field">
                <label for="username">Judul</label>
               <input type="text" name="judul" />
                <i class="icon-user"></i>
            </div>
			<div class="login-field">
                <label for="gambar">Gambar</label>
               <input type="file" name="userfile" size="40" />
                <i class="icon-lock"></i>
     <div class="login-button clearfix">
                <label class="checkbox pull-left">
                <a href="logout.php" class="btn btn-block red">Logout</a>
                </label>
				
                <button name="submit"  type="submit" class="pull-right btn btn-large blue">Upload Image </button>
				<input type="hidden" name="MAX_FILE_SIZE" value="2000000" />
            </div>
            </div>
 <div id="forgot-passwod" class="modal fade" tabindex="1" data-width="760">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i></button>
        <h3>Visit Us again</h3>
    </div>
    <div class="modal-body">
        <div class="row-fluid">
            <div class="span12">
                <div class="form_row">
                    <label class="field_name">Email address</label>
                    <div class="field">
                        <div class="row-fluid">
                            <div class="span8">
                                <input type="text" class="span12" name="email" placeholder="example@domain.com">
                            </div>
                            <div class="span4">
                                <a href="http://localhost/hris_kaltim_dev/login-v4.html#" class="btn btn-block blue">Reset password</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</form>
</body>
</html>
