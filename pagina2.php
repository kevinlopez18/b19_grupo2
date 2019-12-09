<?php
session_start();
if (!isset($_SESSION["login"]) )
{
    header("location: pagina1.php");
}
?>

<html>
<header>
</header>
<body>

<a href= "logout.php"> Ceraar Sesion </a>
</body>
</html>

