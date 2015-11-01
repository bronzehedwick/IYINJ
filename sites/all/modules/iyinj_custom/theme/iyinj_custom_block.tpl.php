<?php

$items = $variables['items'];

print render($items['front_image']);

print '<div class="triptych">';

foreach ($items['triptych'] as $triptych) {
  $output = '<div class="' . $triptych['class'] . ' triptych-item" style="background-image:url(' . $triptych['image'] . ')">
    <div class="overlay-wrap"><h3 class="title"><a href="' . $triptych['link'] . '">' . $triptych['title'] . '</a></h3>
    <div class="description">' . $triptych['description'] . '</div>
  </div></div>';

  print $output;
}

print '</div>';
