<?php $attributes = $attributes->exceptProps(['heading']); ?>
<?php foreach (array_filter((['heading']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<section class="py-8 max-w-4xl mx-auto">

	<h2 class="text-lg font-bold mb-8 pb-2 border-b">

		<?php echo e($heading); ?>


	</h2>

    <div class="flex">
        <aside class="w-40 flex-shrink-0">

            <h4 class="font-semibold mb-4">Links</h4>
            <ul>
                <li>
                    <a href="/admin/posts" class="<?php echo e(request()->is('admin/posts') ? 'text-blue-500' : ''); ?>">All Posts</a>
                </li>
                <li>
                    <a href="/admin/posts/create" class="<?php echo e(request()->is('admin/posts/create') ? 'text-blue-500' : ''); ?>">New Post</a>
                </li>
            </ul>
            
        </aside>
    <main class="flex-1">
	   <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.panel','data' => []]); ?>
<?php $component->withName('panel'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>

            <?php echo e($slot); ?>

	
	    <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
    </main>
    </div>
</section><?php /**PATH C:\Laravel_Projects\Mutisya_blog\resources\views/components/setting.blade.php ENDPATH**/ ?>