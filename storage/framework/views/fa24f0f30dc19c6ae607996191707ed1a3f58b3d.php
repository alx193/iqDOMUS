<?php $__env->startSection('content'); ?>

<p>salut, esti pe index-ul de galerie</p>



<div>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.gallery.index', [])->html();
} elseif ($_instance->childHasBeenRendered('Ve67bi4')) {
    $componentId = $_instance->getRenderedChildComponentId('Ve67bi4');
    $componentTag = $_instance->getRenderedChildComponentTagName('Ve67bi4');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('Ve67bi4');
} else {
    $response = \Livewire\Livewire::mount('admin.gallery.index', []);
    $html = $response->html();
    $_instance->logRenderedChild('Ve67bi4', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
</div>



<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/mihai.pantazi/Sites/FULLSTACK_APPS/iqDOMUS/backend/resources/views/admin/gallery/index.blade.php ENDPATH**/ ?>