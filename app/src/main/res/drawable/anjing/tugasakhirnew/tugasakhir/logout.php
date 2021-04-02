<?php 
	session_start();
	session_destroy();
?>
<script type="text/javascript">
		alert("Anda yakin ingin keluar ?");
		document.location.href="login.php";
</script>