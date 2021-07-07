<?php 
include('php/connect.php');
session_start();
  switch(@$_GET['vista']){
    case 'Principal':
    if (!isset($_SESSION["tipo"])) {
      $tipo='default';
      $clase='hold-transition skin-blue layout-top-nav';
      $Menu='vistas/nav-user.php';
      $divIn='<div class="container">';
      $divFi='</div';  
    }else{
      $tipo=$_SESSION["tipo"];
      if ($tipo==1) {
        $usuario=$_SESSION['usuario_ingreso'];
        $Menu='vistas/nav-admin.php';
        $clase='hold-transition skin-blue sidebar-mini';
        $divIn=''; 
        $divFi='';
      }
      if ($tipo==2 || $tipo==5 || $tipo==6 || $tipo==7) {
        $usuario=$_SESSION['usuario_ingreso'];
        $Menu='vistas/nav-user.php';
        $clase='hold-transition skin-blue layout-top-nav';
        $divIn='<div class="container">';
        $divFi='</div';
      }
    }           
    $vista=('vistas/principal.php');
    break;
    case 'Activities':
    if (!isset($_SESSION["tipo"])) {
      $tipo='default';
      $clase='hold-transition skin-blue layout-top-nav';
      $Menu='vistas/nav-user.php';
      $divIn='<div class="container">';
      $divFi='</div';  
    }else{
      $tipo=$_SESSION["tipo"];
      if ($tipo==1) {
        $usuario=$_SESSION['usuario_ingreso'];
        $Menu='vistas/nav-admin.php';
        $clase='hold-transition skin-blue sidebar-mini';
        $divIn=''; 
        $divFi='';
      }
    }      
      $vista=('vistas/cargas/index.php');
    break;
    case 'Carreras':
    if (!isset($_SESSION["tipo"])) {
      $tipo='default';
      $clase='hold-transition skin-blue layout-top-nav';
      $Menu='vistas/nav-user.php';
      $divIn='<div class="container">';
      $divFi='</div';  
    }else{
      $tipo=$_SESSION["tipo"];
      if ($tipo==1) {
        $usuario=$_SESSION['usuario_ingreso'];
        $Menu='vistas/nav-admin.php';
        $clase='hold-transition skin-blue sidebar-mini';
        $divIn=''; 
        $divFi='';
      }
    }      
      $vista=('vistas/carrera/index.php');
    break;
    case 'Alumnos': 
    if (!isset($_SESSION["tipo"])) {
      $tipo='default';
      $clase='hold-transition skin-blue layout-top-nav';
      $Menu='vistas/nav-user.php';
      $divIn='<div class="container">';
      $divFi='</div';  
    }else{
      $tipo=$_SESSION["tipo"];
      if ($tipo==1) {
        $usuario=$_SESSION['usuario_ingreso'];
        $Menu='vistas/nav-admin.php';
        $clase='hold-transition skin-blue sidebar-mini';
        $divIn=''; 
        $divFi='';
      }
    }       
      $vista=('vistas/alumno/index.php');
    break;
    case 'Personal':
    if (!isset($_SESSION["tipo"])) {
      $tipo='default';
      $clase='hold-transition skin-blue layout-top-nav';
      $Menu='vistas/nav-user.php';
      $divIn='<div class="container">';
      $divFi='</div';  
    }else{
      $tipo=$_SESSION["tipo"];
      if ($tipo==1) {
        $usuario=$_SESSION['usuario_ingreso'];
        $Menu='vistas/nav-admin.php';
        $clase='hold-transition skin-blue sidebar-mini';
        $divIn=''; 
        $divFi='';
      }
    }      
      $vista=('vistas/personal/index.php');
    break;
    case 'Actividad':
    if (!isset($_SESSION["tipo"])) {
      $tipo='default';
      $clase='hold-transition skin-blue layout-top-nav';
      $Menu='vistas/nav-user.php';
      $divIn='<div class="container">';
      $divFi='</div';  
    }else{
      $tipo=$_SESSION["tipo"];
      if ($tipo==1) {
        $usuario=$_SESSION['usuario_ingreso'];
        $Menu='vistas/nav-admin.php';
        $clase='hold-transition skin-blue sidebar-mini';
        $divIn=''; 
        $divFi='';
      }
    }      
      $vista=('vistas/actividad/index.php');
    break;
    case 'Coordinadores':
    if (!isset($_SESSION["tipo"])) {
      $tipo='default';
      $clase='hold-transition skin-blue layout-top-nav';
      $Menu='vistas/nav-user.php';
      $divIn='<div class="container">';
      $divFi='</div';  
    }else{
      $tipo=$_SESSION["tipo"];
      if ($tipo==1) {
        $usuario=$_SESSION['usuario_ingreso'];
        $Menu='vistas/nav-admin.php';
        $clase='hold-transition skin-blue sidebar-mini';
        $divIn=''; 
        $divFi='';
      }
    }      
      $vista=('vistas/coordinar/index.php');
    break;                            
    case 'x_salir':
      session_destroy();
      echo "<script> window.location='?vista=default'; </script>";
    break;
    default:
    if (!isset($_SESSION["tipo"])) {
      $tipo='default';
      $Menu='vistas/nav-user.php';
      $clase='hold-transition skin-blue layout-top-nav';
      $divIn='<div class="container">';
      $divFi='</div';      
    }else{
      $tipo=$_SESSION["tipo"];
      $usuario=$_SESSION['usuario_ingreso'];
      $Menu='vistas/nav-user.php';
      $clase='hold-transition skin-blue layout-top-nav';
      $divIn='<div class="container">';
      $divFi='</div';
    }
    $vista=('vistas/default.php');

    break;  
} 
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>TecNM | Instituto Tecnológico de Tlaxiaco</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="components/font-awesome/css/font-awesome.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="components/select2/css/select2.min.css">
  <link rel="stylesheet" type="text/css" href="components/datatables.net-bs/dataTables.bootstrap.min.css">
   <!-- Google Font -->
  <!--link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic"-->
</head>
<body class="<?php echo $clase;?>">
  <div class="wrapper">
    <?php  require_once $Menu; ?>
    <div class="content-wrapper">
      <?php echo $divIn;?>
          <?php
            include $vista;
          ?>        
      <?php echo $divFi;?>
    </div>
    <footer class="main-footer">
      <?php echo $divIn;?>
        <div class="pull-right hidden-xs">
          
        </div>
        <!--strong>Copyright &copy; 2020 <a href="https://tecnm.mx">TecNM</a>-</strong-->
      <?php echo $divFi;?>
    </footer>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="components/jquery/jquery.min.js"></script>
<script src="components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="components/select2/js/select2.full.min.js"></script>
<script src="dist/js/adminlte.min.js"></script>
<script src="dist/js/demo.js"></script>  
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/dataTables.bootstrap.min.js"></script>    
</body>
</html>
<script src="js/funciones.js"></script>

<?php if(@$_GET['vista']=='Activities'){ ?>
<script src="js/actividad.js"></script>
<?php } ?>
<?php if(@$_GET['vista']=='Carreras'){ ?>
<script src="js/carrera.js"></script>
<?php } ?>
<?php if(@$_GET['vista']=='Alumnos'){ ?>
<script src="js/alumno.js"></script>
<?php } ?>
<?php if(@$_GET['vista']=='Personal'){ ?>
<script src="js/personal.js"></script>
<?php } ?>
<?php if(@$_GET['vista']=='Actividad'){ ?>
<script src="js/actividad2.js"></script>
<?php } ?>

<?php if(@$_GET['vista']=='Coordinadores'){ ?>
<script src="js/coordinar.js"></script>
<?php } ?>
