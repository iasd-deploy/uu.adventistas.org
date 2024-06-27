<?php if(is_admin()): ?>
	<img class="img-preview" src="<?php echo e(get_template_directory_uri()); ?>/Blocks/PATwitter/preview.png" alt="<?php echo e(__('Illustrative image of the front end of the block.', 'iasd')); ?>" />
<?php else: ?>
	<div class="pa-widget pa-w-twitter col-12 col-md-4 mb-5">
		<?php if (! empty($title)) : ?>
			<h2><?php echo $title; ?></h2>
		<?php endif; ?>

		<?php if (! empty($url)) : ?>
			<div class="mt-4 mh-50">
				<a class="twitter-timeline" data-height="500" href="<?php echo e($url); ?>"></a>
			</div>
		<?php endif; ?>
	</div>
<?php endif; ?>
<?php /**PATH /Users/clecyo.freitas/Documents/Dev_DSA/deploy_uu_adventistas/wp-content/themes/pa-theme-sedes/Blocks/PATwitter/views/frontend.blade.php ENDPATH**/ ?>