<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Laravel - www.malasngoding.com</title>
</head>
<body>
 
	<h3>www.malasngoding.com</h3>
	<p>Seri Tutorial Laravel Lengkap Dari Dasar</p>
	<p>Ini adalah view blog. ada di route blog.</p>
    <?php 
    $nama = "Budi";
    echo "Hello $nama"; ?>
    <br>
    {{ "Hello " . $nama }}
    <br>
    {{ date_default_timezone_set('Asia/Jakarta') }}
    {{ date('Y-m-d H:i:s') }}
  
 
</body>
</html>