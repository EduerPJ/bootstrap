<?php
  if (isset($cursos)) {
  foreach ($cursos->result() as $curso) { ?>
    <ul>
        <a href="cursos/editar/<?= $curso->id_curso?>">
        <li>Nombre del Curso: <?=$curso->nombre_curso?></li>
      </a>
        <li>Número de videos: <?=$curso->videos_curso?></li>
    </ul>
<?php  } }?>