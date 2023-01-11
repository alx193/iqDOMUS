<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="card">
        <div class="card-header">
            <h3>Modifica aceast mesaj
                <a href="<?php echo e(url('admin/message')); ?>" class='btn btn-danger btn-sm text-white float-end'>Inapoi</a>
            </h3>
        </div>
        <div class="card-body">
            <form action="<?php echo e(url('admin/message/'.$message->id)); ?>"  method="POST" enctype="multiplart/form-data">
                <?php echo csrf_field(); ?> 
                <?php echo method_field('PUT'); ?>
                <div class="mb-3">
                    <label>Nume</label>
                    <input type="text" name="name" value="<?php echo e($message->name); ?>" class="form-control" />
                </div>
                <div class="mb-3">
                    <label>Descriere</label>
                    <input type="text" name="description" value="<?php echo e($message->description); ?>" class="form-control" />
                </div>
                 <div class="col-md-12 mb-3">
                                    <button type="submit" class="btn btn-primary float-end">Actualizeaza</button>
                                </div>
            </form>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/mihai.pantazi/Sites/FULLSTACK_APPS/iqDOMUS/backend/resources/views/admin/message/edit.blade.php ENDPATH**/ ?>