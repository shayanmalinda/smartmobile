<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_articles_news
 *
 * @copyright   Copyright (C) 2005 - 2019 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
?>
<ul class="newsflash-horiz<?php echo $params->get('moduleclass_sfx'); ?> mod-list">
	<?php for ($i = 0, $n = count($list); $i < $n; $i ++) : ?>
		<?php $item = $list[$i]; ?>
		<li>
			<?php require JModuleHelper::getLayoutPath('mod_articles_news', '_jsnitem'); ?>

			<?php if ($n > 1 && (($i < $n - 1) || $params->get('showLastSeparator'))) : ?>
				<span class="article-separator">&#160;</span>
			<?php endif; ?>
		</li>
	<?php endfor; ?>
</ul>