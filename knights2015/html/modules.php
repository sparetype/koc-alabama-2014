<?php 

defined('_JEXEC') or die;

// Custom module chrome for sidebars [WIP]

  function modChrome_custom( $module, &$params, &$attribs ) 
  {

echo '<div class="module ' .$module->title . '">';

  if ($module->showtitle) 
  {
    echo '<h2 class="module-title">' .$module->title .'</h2>';
  }

echo $module->content;
	
echo '</div>';
}
?>