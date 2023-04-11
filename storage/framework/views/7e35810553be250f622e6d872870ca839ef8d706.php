<header class="max-w-xl mx-auto mt-20 text-center">
    <h1 class="text-4xl">
        Latest <span class="text-blue-500">Laravel From Scratch</span> News
    </h1>
    <div class="space-y-2 lg:space-y-0 lg:space-x-4 mt-4">
        <!--  Category -->  
        <div class="relative lg:inline-flex bg-gray-100 rounded-xl">

        <?php if (isset($component)) { $__componentOriginal4f66722947691db01920253e9e2edd1fa3282e1d = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\CategoryDropdown::class, []); ?>
<?php $component->withName('category-dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4f66722947691db01920253e9e2edd1fa3282e1d)): ?>
<?php $component = $__componentOriginal4f66722947691db01920253e9e2edd1fa3282e1d; ?>
<?php unset($__componentOriginal4f66722947691db01920253e9e2edd1fa3282e1d); ?>
<?php endif; ?>
           
        </div>

        <!-- Search -->
        <div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl px-3 py-2">
        <form method="GET" action="#">
            <input type="text" 
                name="search"
                placeholder="Find something"
                class="bg-transparent placeholder-black font-semibold text-sm" value="<?php echo e(request('search')); ?>">
        </form>
        </div>
    </div>
</header><?php /**PATH C:\Laravel_Projects\blog\resources\views/posts/_header.blade.php ENDPATH**/ ?>