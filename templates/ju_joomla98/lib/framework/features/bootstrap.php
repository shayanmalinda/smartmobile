<?php
/*---------------------------------------------------------------
# Package - Stools Framework  
# ---------------------------------------------------------------
# Author - joomla2you http://www.joomla2you.com
# Copyright (C) 2008 - 2019 joomla2you.com. All Rights Reserved. 
# Websites: http://www.joomla2you.com
-----------------------------------------------------------------*/
//no direct accees
defined ('_JEXEC') or die ('resticted aceess');
if ($this->getParam('bootstrap',0)){
if (JVERSION>=3) {
// Add JavaScript Frameworks
JHtml::_('bootstrap.framework');		
// Load optional rtl Bootstrap css and Bootstrap bugfixes
JHtmlBootstrap::loadCss();
} else {
$this->addCSS('bootstrap.min.css,bootstrap-extended.css');
$this->addJQuery();
$this->addJS('bootstrap.min.js');
}
}