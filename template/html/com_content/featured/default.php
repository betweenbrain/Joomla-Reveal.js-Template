<?php defined('_JEXEC') or die;

/**
 * @package     Joomla.Site
 * @subpackage  com_content
 *
 * @copyright   Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
?>

<?php if (!empty($this->lead_items)) : ?>
	<?php foreach ($this->lead_items as &$item) : ?>
		<section>
			<?php
			$this->item = & $item;
			echo $this->loadTemplate('item');
			?>
		</section>
		<?php
		?>
	<?php endforeach; ?>
<?php endif; ?>
<?php if (!empty($this->intro_items)) : ?>
	<?php foreach ($this->intro_items as &$item) : ?>
		<section>
			<?php
			$this->item = & $item;
			echo $this->loadTemplate('item');
			?>
		</section>
	<?php endforeach; ?>
<?php endif; ?>
