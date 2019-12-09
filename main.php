<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>CIT</title>
	<link rel="stylesheet" type="text/css" href="js/jquery-easyui-1.8.8/themes/default/easyui.css">
	<link rel="stylesheet" type="text/css" href="js/jquery-easyui-1.8.8/themes/icon.css">
	<script type="text/javascript" src="js/jquery-easyui-1.8.8/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery-easyui-1.8.8/jquery.easyui.min.js"></script>
    <script type="text/javascript" src="js/jquery-easyui-1.8.8/locale/easyui-lang-es.js"></script>
    <link rel="stylesheet" type="text/css" href="css/proyecto.css">
</head>

<?php
session_start();
if (!isset($_SESSION['usuario']) )
{
    header("location: login.php");
}
?>
<body class="easyui-layout">

        <div data-options="region:'north'" style="height:60px"> 
        <img src="imagenes/cit.jpg"  height="50px"> </img>
        <div class = "titulousuario">
        Usuario: <?php echo $_SESSION['usuario']; ?>
        <a href ="login.php"> Salir </a>

        </div>
        </div>
        <div data-options="region:'south',split:true" style="height:50px;"></div>
       
       <div data-options="region:'west',split:true" title="Menu" style="width:200px;">
       
       <ul class="easyui-tree">
           <li>
               <span>Menu Principal</span>
               <ul>
                   <li>
                       <span>Seguridad</span>
                       <ul>
                           <li>
                               <span>Rol de Usuarios</span>
                           </li>
                           <li>
                               <span>Usuario</span>
                           </li>
                           <li>
                               <span>Accesos</span>
                           </li>
                       </ul>
                   </li>
                   <li>
                       <span>Administración</span>

                       <ul>
                           <li> <a href="main.php?pagina=eventos"> Eventos </a></li>
                           
                       </ul>
                   </li>
                   <li>index.html</li>
                   <li>about.html</li>
                   <li>welcome.html</li>
               </ul>
           </li>
       </ul>

       </div>
       <div data-options="region:'center' ">
      <?php
//include('eventos.php');

if(isset($_GET['pagina'])){
    $pagina=$_GET['pagina'];
    switch ($pagina) {
        case "eventos":
            include('eventos.php');
            break;
        case "blue":
            echo "Your favorite color is blue!";
            break;
        case "green":
            echo "Your favorite color is green!";
            break;
        default:
            echo "Lo sentimos, esta página no se encuentra";
    }
}

      ?>
       </div>


</body>
</html>

