<?php  foreach ($cursos->result() as $curso) { ?>
  <ul>
      <li>Nombre del Curso: <?=$curso->nombre_curso?></li>
      <li>Número de videos: <?=$curso->videos_curso?></li>
  </ul>
<?php  } ?>