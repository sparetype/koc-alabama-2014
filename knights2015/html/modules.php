<?php 
  function modChrome_custom( $module, &$params, &$attribs ) 
  {

echo '<div class="module ' .$module->title . '">';

  if ($module->showtitle) 
  {
    echo '<h2>' .$module->title .'</h2>';
  }

echo $module->content;
	
echo '</div>';
}
?>