<?php $__env->startSection('content'); ?>

<div>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.contact.index', [])->html();
} elseif ($_instance->childHasBeenRendered('JpvFdyg')) {
    $componentId = $_instance->getRenderedChildComponentId('JpvFdyg');
    $componentTag = $_instance->getRenderedChildComponentTagName('JpvFdyg');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('JpvFdyg');
} else {
    $response = \Livewire\Livewire::mount('admin.contact.index', []);
    $html = $response->html();
    $_instance->logRenderedChild('JpvFdyg', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/mihai.pantazi/Sites/FULLSTACK_APPS/iqDOMUS/backend/resources/views/admin/contact/index.blade.php ENDPATH**/ ?>