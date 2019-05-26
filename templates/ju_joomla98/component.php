<?php
/*---------------------------------------------------------------
# Package - Joomla Template  
# ---------------------------------------------------------------
# Author - joomla2you http://www.joomla2you.com
# Copyright (C) 2008 - 2019 joomla2you.com. All Rights Reserved.
# Websites: http://www.joomla2you.com
-----------------------------------------------------------------*/
//no direct accees
defined ('_JEXEC') or die ('resticted aceess');
require_once(dirname(__FILE__).'/lib/frame.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>">
<head>
<?php
$stools->loadHead();
$stools->addCSS('template.css,joomla.css,menu.css,override.css,modules.css');
?>
</head>
<?php if (JRequest::getString('type')=='raw'):?>
<jdoc:include type="component" />
<?php else: ?>

<body class="contentpane">
<jdoc:include type="message" />
<jdoc:include type="component" />
</body>
</html>
<?php endif; ?>