<?php $attributes = $attributes->exceptProps(['comment']); ?>
<?php foreach (array_filter((['comment']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.panel','data' => ['class' => 'bg-gray-50']]); ?>
<?php $component->withName('panel'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'bg-gray-50']); ?>

    <article class="flex space-x-4">
        <div class="flex-shrink-0">
            <img src="https://i.pravatar.cc/60?u=<?php echo e($comment->user_id); ?>" alt="" width="60" height="60" class="rounded-xl">
        </div>
        <div>
            <header class="mb-4">
                <h3 class="font-bold"><?php echo e($comment->author->username); ?></h3>
                <p class="text-xs">Posted
                    <time><?php echo e($comment->created_at->format("F j, Y, g:i a")); ?></time>
                </p>
            </header>
            <p>
               <?php echo e($comment->body); ?>

            </p>
        </div>
    </article>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?><?php /**PATH C:\Laravel_Projects\blog\resources\views/components/post-comment.blade.php ENDPATH**/ ?>