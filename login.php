<?php
include("header.php");
?>

<form action="handleLogin.php" method="post">
<input type="text" placeholder="Username" name="username" /><br />
<input type="password" placeholder="Password" name="password" /><br />
<input type="submit" value="logga in" />

</form>

<?php 
include("footer.php");
?>