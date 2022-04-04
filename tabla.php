<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href= "dist/css/estilo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
  
    <center>
        <h2 id="boleta">Boleteria Esperanza</h2>
    </center>
<table class="table">
<thead>
  <tr>
<th>Nombre</th>
<th>Ficho</th>
<th>500</th>
<th>1000</th>
<th>2000</th>
<th>4cifras</th>
<th>500</th>
<th>1000</th>
<th>2000</th>
<th>4cifras</th>
<th>500</th>
<th>1000</th>
<th>2000</th>
<th>4cifras</th>
<th>Debe</th>
<th>Total</th>
<th>Saldo</th>
</tr>
</thead>
<tbody>
  <?php
 $datos=array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1);
  foreach($datos as $fila){ 
    
  
  ?>
<tr>
<td>Andres</td>
<td>100</td>
<td><input id="entrada"></input></td>
<td><input id="entrada"></input></td>
<td><input id="entrada"></input></td>
<td><input id="entrada"></input></td>
<td><input id="entrada"></input></td>
<td><input id="entrada"></input></td>
<td><input id="entrada"></input></td>
<td><input id="entrada"></input></td>
<td><input id="salida"></input></td>
<td><input id="salida"></input></td>
<td><input id="salida"></input></td>
<td><input id="salida"></input></td>
<td><select name="" id="">
<option value=""></option>
  <option value="">Pago</option>
<option value="">Debe</option>
</select></td>
<td><input id="salida"></input></td>

<td><input id="saldo"></input></td>
</tr>
<?php
  }
  ?>
</tbody>


</table>
</div>

<!--------------------------------->
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  //$.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
</body>


</html>

