<?php include('header.php')?>
<section>

<?php
  $la_url = $_GET['url'];
  $json = file_get_contents($la_url);
  $datos = json_decode($json,true);
?>

<h3>PHP+GeoJSON:</h3>

<p>En esta página vemos el detalle de</p>
<h1><?php print($datos['properties']['mag']);?></h1>
<h2><?php print($datos['properties']['place']);?></h2>

<?php if($datos["properties"]["mag"] >=6 ){?>
  <div class="alert alert-danger"><p>¡ALERTA! Camina hacia una zona segura.</p></div>
  <?php };?>

<?php if($datos["properties"]["mag"] >=5 ){?>
    <div class="alert alert-danger"><p>Manten la calma.</p></div>
    <?php };?>

<strong><?php print($datos['properties']['place']);?></strong></p>




<div class="alert alert-danger">
<p>Genere una ficha donde se muestren los datos más importantes del movimiento sístimo que se observa en detalle.</p>
</div>

</section>
<?php include('footer.php');?>
