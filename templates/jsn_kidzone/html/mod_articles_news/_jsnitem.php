<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_articles_news
 *
 * @copyright   Copyright (C) 2005 - 2017 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

$item_heading = $params->get('item_heading', 'h4');
?>
<div class="newsflash-item">

<?php $imageObj = json_decode($item->images); 
	if ($imageObj->image_intro !== '' ) {
	?>
		<div class="show-image"><img src="<?php echo $imageObj->image_intro; ?>" alt="<?php echo $imageObj->image_intro; ?>" /></div>
	<?php 
	}
	?>
	<div class="show_introtext_wapper">
	<?php
	
	if ($params->get('item_title')) : ?>

	<<?php echo $item_heading; ?> class="newsflash-title<?php echo $params->get('moduleclass_sfx'); ?>">
	<?php if ($item->link !== '' && $params->get('link_titles')) : ?>
		<a href="<?php echo $item->link; ?>">
			<?php echo $item->title; ?>
		</a>
	<?php else : ?>
		<?php echo $item->title; ?>
	<?php endif; ?>
	</<?php echo $item_heading; ?>>

<?php endif; ?>
<?php if (!$params->get('intro_only')) : ?>
	<?php echo $item->afterDisplayTitle; ?>
<?php endif; ?>

<?php if ($params->get('show_introtext', '1')) : ?>
	<div class="introtext"><?php echo $item->introtext;?></div>
<?php endif; ?>
<div class="date"><?php echo date("F j Y",strtotime($item->modified));?></div>
<?php echo $item->beforeDisplayContent; ?>
<?php echo $item->afterDisplayContent; ?>

<?php if (isset($item->link) && $item->readmore != 0 && $params->get('readmore')) : ?>
	<?php echo '<a class="readmore btn btn-primary" href="' . $item->link . '">' . $item->linkText . '</a>'; ?>
<?php endif; ?>
	</div>
</div>
