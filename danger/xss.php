<?php
// xss.php
echo strip_tags($_GET['someparam']);
?>