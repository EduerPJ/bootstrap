<div class="container">
  <?=form_open("/codigofacilito/recibirdatos")?>

  <?
    $nombre = [
      'name' => 'nombre',
      'placeholder' => 'Escribe tu nombre'
    ];

    $videos = [
      'name' => 'videos',
      'placeholder' => 'Cantidad de videos',
    ];
    $texto = [
      'name' => 'descripción',
    ];
  ?>

  <?= form_label('Nombre: ', 'nombre')?>
  <?= form_input($nombre)?>
  <br>
  <br>
  <?= form_label('Número de vídeos: ', 'videos')?>
  <?= form_input($videos)?>
  <br>
  <br>
  <?= form_label('Descriptción: ', 'descripcion')?>
  <br>
  <?= form_textarea('Descripción')?>
  <br>
  <br>

  <hr>
</div>