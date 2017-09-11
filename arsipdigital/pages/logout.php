<?php
if(isset($_SESSION['pengguna'])){
	unset($_SESSION['pengguna']);
}
?>
<script>
document.location='login.php';
</script>