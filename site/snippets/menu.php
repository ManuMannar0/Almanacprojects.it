<ul class="menu">

	<?php $current = 0;  ?>
	<?php $upcoming = 0;  ?>

	<?php foreach($site->children()->children()->visible() as $exhibition): ?>
		<?php if(($exhibition->currentupcoming() == 'current') || ($exhibition->currentupcoming() == 'upcoming')): ?>
			<?php if($exhibition->currentupcoming() == 'current'): ?>
				<?php $current_var = "Current";  ?>
			<?php elseif($exhibition->currentupcoming() == 'upcoming'): ?>
				<?php $upcoming_var = "Upcoming";  ?>
			<?php endif ?>
		<?php endif ?>
	<?php endforeach ?>

	<?php if($current_var == "Current"): ?>
		<li><a href="<?php echo $site->url() ?>/current" style="
			<?php
				if($page->title() == "Current"){
					echo("text-decoration: underline");
				} 
			?>
		">Current</a></li>
	<?php endif ?>

	<?php if($upcoming_var == "Upcoming"): ?>
		<li><a href="<?php echo $site->url() ?>/upcoming" style="
			<?php
				if($page->title() == "Upcoming"){
					echo("text-decoration: underline");
				} 
			?>
		">Upcoming</a></li>
	<?php endif ?>

	<?php $current = 0;  ?>
	<?php $upcoming = 0;  ?>
	<p></p>

	<?php foreach($site->children()->visible() as $child): ?>
		<?php if(($child->title() != "Current") && ($child->title() != "Upcoming")): ?>
			<?php if(($child->title() == "Supports")): ?>
				<li class="cursorPointer" onclick="supportFunc()" <?php e($child->isActive(), ' class="active"') ?>>Support
						<?php foreach($child->children()->visible() as $supportPage): ?>
							<li class="subSupport hide" <?php e($supportPage->isActive(), ' class="active"') ?>>
								<a href="<?php echo $supportPage->url() ?>" ><?php echo $supportPage->title() ?></a>
							</li>
						<?php endforeach ?>
				</li>
			<?php elseif(($child->title() != "Support")): ?>
				<li <?php e($child->isActive(), ' class="active"') ?>>
					<a href="<?php echo $child->url() ?>" ><?php echo $child->title() ?></a>
				</li>
			<?php endif ?>
		<?php endif ?>
	<?php endforeach ?> 
	
</ul>















