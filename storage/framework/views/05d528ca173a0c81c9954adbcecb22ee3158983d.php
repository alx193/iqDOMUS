<?php $__env->startSection('content'); ?>

<div>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.solution.index', [])->html();
} elseif ($_instance->childHasBeenRendered('UlFu5ds')) {
    $componentId = $_instance->getRenderedChildComponentId('UlFu5ds');
    $componentTag = $_instance->getRenderedChildComponentTagName('UlFu5ds');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('UlFu5ds');
} else {
    $response = \Livewire\Livewire::mount('admin.solution.index', []);
    $html = $response->html();
    $_instance->logRenderedChild('UlFu5ds', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/mihai.pantazi/Sites/FULLSTACK_APPS/iqDOMUS/backend/resources/views/admin/solution/index.blade.php ENDPATH**/ ?>