<?php defined( '_JEXEC' ) or die( 'Restricted access' );?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>" >

<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<jdoc:include type="head" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/template.css" type="text/css" />
</head>

<body class="body">

	<jdoc:include type="message" />

	<header class="header">
	<a class="logo" href="<?php echo $this->baseurl; ?>"><img src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/images/koc_logo_125x125.gif" /></a>
	<jdoc:include type="modules" name="header" />
	</header>
		
	<div class="breadcrumb" role="menu">
	<jdoc:include type="modules" name="breadcrumb" />
	</div>
	
	<div class="container">

	<div class="content">
	<jdoc:include type="component" />
	</div>

	<div class="right-sidebar">
	<jdoc:include type="modules" name="right" style="custom" />
	</div>
	
	</div> <!-- end container -->

	<div class="left-sidebar">
	<jdoc:include type="modules" name="left" style="custom" />
	</div>
	
	<footer class="footer">
	<jdoc:include type="modules" name="footer" />
	</footer>
	
	<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/scripts/production.min.js" type="text/javascript"></script>

	<script>
	var nav = responsiveNav(".nav-collapse");
	</script>

</body>
</html>