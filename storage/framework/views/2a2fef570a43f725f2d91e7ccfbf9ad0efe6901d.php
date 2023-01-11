<?php $__env->startSection('content'); ?>

<div>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.message.index', [])->html();
} elseif ($_instance->childHasBeenRendered('6FRfd0c')) {
    $componentId = $_instance->getRenderedChildComponentId('6FRfd0c');
    $componentTag = $_instance->getRenderedChildComponentTagName('6FRfd0c');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('6FRfd0c');
} else {
    $response = \Livewire\Livewire::mount('admin.message.index', []);
    $html = $response->html();
    $_instance->logRenderedChild('6FRfd0c', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/mihai.pantazi/Sites/FULLSTACK_APPS/iqDOMUS/backend/resources/views/admin/message/index.blade.php ENDPATH**/ ?>