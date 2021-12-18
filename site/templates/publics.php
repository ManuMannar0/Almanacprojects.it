<?php snippet('header') ?>


<div class="col span_4_of_10">
		<?php foreach($page->children()->visible() as $public): ?>
		<?php $startDate = new DateTime( $public->startdate() ); ?>
		<?php $endDate = new DateTime( $public->enddate() ); ?>
		<div class="exhibitions">
			<div class="title">
				<h1>
					<a href="<?php echo $public->url() ?>">
						<?php echo $public->artist() ?>
					</a>
				</h1> 
				<i class="exhibition-title">
					<a href="<?php echo $public->url() ?>">
						<?php echo $public->programmetitle() ?>
						<?php echo $public->exhibition() ?>
					</a>
				</i>
				<?php if ($public->enddate()->isNotEmpty()): ?>
					<h2>
						<span>
							<?php echo $startDate->format('d F'); ?>
						</span>
						&mdash;
						<span>
							<?php echo $endDate->format('d F Y'); ?>
						</span>
					</h2>
				<?php else: ?>
					<h2>
						<span>
							<?php echo $startDate->format('d F Y'); ?>
						</span>
				<?php endif ?>
				<h1>
					<?php echo $public->location() ?>
				</h1>
			</div>
		</div>
		<?php endforeach ?>
		</div>


<?php snippet('footer') ?>

