<?php $attributes = $attributes->exceptProps(['name']); ?>
<?php foreach (array_filter((['name']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>


<?php if($name = 'down-arrow'): ?>
	<svg <?php echo e($attributes(['class' => 'transform -rotate-90'])); ?>  width="22" height="22" viewBox="0 0 22 22">
	<g fill="none" fill-rule="evenodd">
	    <path stroke="#000" stroke-opacity=".012" stroke-width=".5" d="M21 1v20.16H.84V1z">
	        
	    </path>
	    <path fill="#222"
	    d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z"></path>
	</g>
	</svg>
<?php endif; ?>	<?php /**PATH C:\Laravel_Projects\Mutisya_blog\resources\views/components/icon.blade.php ENDPATH**/ ?>