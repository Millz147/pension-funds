<?php
session_start();
session_destroy();
echo "<script>alert('Successfully Logout');</script>";

?>
<script type="text/javascript">window.location="../index.php";</script>


<?php
?>