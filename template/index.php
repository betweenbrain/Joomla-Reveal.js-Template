<?php defined('_JEXEC') or die;

/**
 * File       index.php
 * Created    7/21/14 1:31 PM
 * Author     Matt Thomas | matt@betweenbrain.com | http://betweenbrain.com
 * Support    https://github.com/betweenbrain/
 * Copyright  Copyright (C) 2014 betweenbrain llc. All Rights Reserved.
 * License    GNU GPL v2 or later
 */

$doc = JFactory::getDocument();
$doc->addScript('templates/' . $this->template . '/js/reveal.min.js');
$doc->addStyleSheet('templates/' . $this->template . '/css/reveal.min.css');
$doc->addStyleSheet('templates/' . $this->template . '/css/theme/default.css');
?>
<!DOCTYPE html>
<html lang="<?php echo substr($this->language, 0, 2) ?>" dir="<?php echo $this->direction ?>">
<head>
	<jdoc:include type="head" />
</head>
<div class="reveal">
	<div class="slides">
		<jdoc:include type="component" />
	</div>
</div>
<script>

	// Full list of configuration options available here:
	// https://github.com/hakimel/reveal.js#configuration
	Reveal.initialize({
		controls: true,
		progress: true,
		history : true,
		center  : true,

		theme     : Reveal.getQueryHash().theme, // available themes are in /css/theme
		transition: Reveal.getQueryHash().transition || 'default' // default/cube/page/concave/zoom/linear/fade/none
	});

</script>

</body>
</html>