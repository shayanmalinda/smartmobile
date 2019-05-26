<?php

defined('_JEXEC') or die;

$caption         = $this->params->get ('caption');
$menu            = $this->params->get ('menu');
$bannerTime	     = $this->params->get('bannerTime');
$slider_items    = $this->params->get('slider_items'); 
$slides          = $this->params->get('slides');
$shadows         = $this->params->get('shadows');
$headHeigh	     = $this->params->get('headHeigh');
$socialCode         = $this->params->get ('socialCode');
$ol_title            = $this->params->get('ol_title');
$ol_image            = $this->params->get('ol_image');
$ol_target_url       = $this->params->get('ol_target_url');
$ol_target           = $this->params->get('ol_target');
$seo_fix           = $this->params->get('seo_fix');



$app = JFactory::getApplication();
$doc = JFactory::getDocument();//define path
$base_url = $this->baseurl;
$tpl_name = $this->template;
$css_urla = ''.$base_url.'/templates/'.$tpl_name.'/slider/';

$caption         = $this->params->get ('caption');
$menu            = $this->params->get ('menu');
$stylew	     = $this->params->get('stylew');
$styleh	     = $this->params->get('styleh');
$selstyle 	= $this->params->get('selstyle', '' );

$doc->addStyleSheet($css_urla.'assets/css/tabber.css');
$doc->addScript($css_urla.'assets/js/slideshow.js');
$doc->addScript($css_urla.'assets/js/tabber.js');
$js = '
<script type="text/javascript">
window.addEvent("domready",function()
{ new TCImageTabber("tc-tabber",{
autoplay: 1,
pause_autoplay: 1,
transition: Fx.Transitions.easeInOutQuint,
duration: 700,
delay: 5000,
slider_type: "right",
desc_effect: "fade",
width: 1218,
height: 600,
spacing: 10,
navi_margin: 0,
preload: 0,
tab_height: 100,
tab_indicator: 2
}) });
</script>';
//$doc->addScriptDeclaration($js);
echo $js;
?>

<div id="tc-tabber" class="tc-tabber">
<div class="tc-tabber-in tc-tabs-left">
<div class="tc-slides">

<?php foreach ($slider_items as $item) : ?>

<div class="tc-slide">
<div class="tc-slide-in">
<?php if (!empty($item->ol_target_url)) : ?><a href="<?php echo $item->ol_target_url; ?>" target="<?php echo $item->ol_target; ?>"><?php endif;?>
<img title="<?php echo $this->params->get('seo_fix') ?><?php echo $item->ol_image; ?>" alt="<?php echo $item->ol_title; ?>" class="tc-image" />
<?php if (!empty($item->ol_target_url)) : ?></a><?php endif;?>
</div>
</div>
<div class="tc-slide-desc">
<div class="tc-slide-desc-in">	
<div class="tc-slide-desc-bg"></div>
<div class="tc-slide-desc-text">

<h1><?php if (!empty($item->ol_target_url)) : ?><a href="<?php echo $item->ol_target_url; ?>" target="<?php echo $item->ol_target; ?>"><?php endif;?>
<?php echo $item->ol_title; ?>
<?php if (!empty($item->ol_target_url)) : ?></a><?php endif;?>
</h1>

<div class="tc-slide-description">
<p><?php echo $item->ol_text; ?></p>
</div>

<div style="clear: both"></div>
</div>
</div>
</div>

<?php endforeach; ?>

</div>

<div class="tc-navigation">
<div class="tc-navigation-in">
<img class="tc-prev showOnMouseOver" src="<?php echo $css_urla ?>assets/css/images/transparent.png" alt="Previous" />
<img class="tc-next showOnMouseOver" src="<?php echo $css_urla ?>assets/css/images/transparent.png" alt="Next" />
</div>
</div>

<div class="tc-tabs">
<div class="tc-tabs-in">
<?php foreach ($slider_items as $item) : ?>
<div class="tc-tab">
<span class="tc-tab-in">						

<!--[if lte IE 7]>
<table cellpadding="0" cellspacing="0" border="0"><tr>
<td>
<img src="<?php echo $item->ol_image; ?>" alt="<?php echo $item->ol_title; ?>" width="90" height="90"" />
</td>
<td width="100%"><?php echo $item->ol_title; ?></td>
</tr></table>
<![endif]-->

<span>
<img src="<?php echo $item->ol_image; ?>" alt="<?php echo $item->ol_title; ?>" width="90" height="90"" />
</span>
<span><?php echo $item->ol_title; ?></span>
</span>
</div>
<?php endforeach; ?>

<div class="tc-tab-indicator tc-tab-indicator-left"></div>
</div>
</div>
<div class="tc-loader"></div>
</div>
</div>

<div class="clear"></div>       

