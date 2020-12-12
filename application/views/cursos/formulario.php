<div class="container">
  <?=form_open("/cursos/recibirdatos")?>

  <?
    $nombre = [
      'name' => 'nombre',
      'placeholder' => 'Escribe tu nombre'
    ];

    $videos = [
      'name' => 'videos',
      'placeholder' => 'Cantidad de videos',
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
  <?= form_submit('', 'Enviar los datos')?>
  <br>
  <hr>
</div>