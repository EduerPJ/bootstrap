<div class="container">
  <div class="row">
    <?= form_open("cursos/actualizar/" . $id ) ?>
    <?php
      $nombre = array(
        'name' => 'nombre',
        'value' => $curso->result()[0]->nombre_curso
      );

      $videos = array(
        'name' => 'videos',
        'value' => $curso->result()[0]->videos_curso
      );
    ?>
    <?= form_label('Nombre: ', 'nombre')?>
    <?= form_input($nombre)?>
    <br>
    <?= form_label('Número de Vídeos: ', 'videos')?>
    <?= form_input($videos)?>
    <br>
    <?=form_submit('', 'Actualizar curso')?>
    <?=form_close()?>
  </div>
</div>