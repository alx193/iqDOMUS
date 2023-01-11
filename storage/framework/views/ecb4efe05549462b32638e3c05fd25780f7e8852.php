<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="col-md-12">
    
    <div class="card">
        <div class="card-header">
            <h3>Actualizeaza solutia 
                <a href="<?php echo e(url('admin/solution')); ?>" class='btn btn-danger btn-sm text-white float-end'>Inapoi</a>
            </h3>
        </div>
        <div class="card-body">

            <form action="<?php echo e(url('admin/solution/'.$solution->id)); ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>
                <div class="mb-3">
                    <label>Nume</label>
                    <input type="text" name="name" value="<?php echo e($solution->name); ?>" class="form-control" />
                </div>
                <div class="mb-3">
                    <label>Descriere</label>
                    <textarea name="description" class="form-control" rows="3" ><?php echo e($solution->description); ?></textarea>
                </div>
                <div class="mb-3">
                    <label>Imagine</label>
                    <input type="file" name="image" class="form-control" />
                    <img src="<?php echo e(asset('/uploads/solution/'.$solution->image)); ?>" width="60px" height="60px"/>
                 </div>
                <div class="mb-3">
                    <label>Beneficiu 1</label>
                    <input type="text" name="b1" value="<?php echo e($solution->b1); ?>" class="form-control" />
                </div>
                <div class="mb-3">
                    <label>Beneficiu 2</label>
                    <input type="text" name="b2" value="<?php echo e($solution->b2); ?>" class="form-control" />
                </div>
                <div class="mb-3">
                    <label>Beneficiu 3</label>
                    <input type="text" name="b3" value="<?php echo e($solution->b3); ?>" class="form-control" />
                </div>
                <div class="mb-3">
                    <label>Beneficiu 4</label>
                    <input type="text" name="b4" value="<?php echo e($solution->b4); ?>" class="form-control" />
                </div>
                <div class="mb-3">
                    <label>Beneficiu 5</label>
                    <input type="text" name="b5" value="<?php echo e($solution->b5); ?>" class="form-control" />
                </div>
                <div class="mb-3">
                    <label>Beneficiu 6</label>
                    <input type="text" name="b6" value="<?php echo e($solution->b6); ?>" class="form-control" />
                </div>
                <div class="mb-3">
                    <label>Beneficiu 7</label>
                    <input type="text" name="b7" value="<?php echo e($solution->b7); ?>" class="form-control" />
                </div>
                <div class="mb-3">
                    <label>Beneficiu 8</label>
                    <input type="text" name="b8" value="<?php echo e($solution->b8); ?>" class="form-control" />
                </div>
                <div class="mb-3">
                    <label>Beneficiu 9</label>
                    <input type="text" name="b9" value="<?php echo e($solution->b9); ?>" class="form-control" />
                </div>
                <div class="mb-3">
                    <label>Beneficiu 10</label>
                    <input type="text" name="b10" value="<?php echo e($solution->b10); ?>" class="form-control" />
                </div>
                <div class="mb-3">
                    <label>Beneficiu 11</label>
                    <input type="text" name="b11" value="<?php echo e($solution->b11); ?>" class="form-control" />
                </div>
                <div class="mb-3">
                    <label>Beneficiu 12</label>
                    <input type="text" name="b12" value="<?php echo e($solution->b12); ?>" class="form-control" />
                </div>
                <div class="mb-3">
                    <label>Beneficiu 13</label>
                    <input type="text" name="b13" value="<?php echo e($solution->b13); ?>" class="form-control" />
                </div>
                <div class="mb-3">
                    <label>Status</label><br />
                    <input type="checkbox" name="status" value="<?php echo e($solution->status == '1' ? 'checked':'null'); ?>" />
                </div>
                 <div class="col-md-12 mb-3">
                <button type="submit" class="btn btn-primary float-end">Actualizeaza!</button>
                </div>
            </form>
        </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/mihai.pantazi/Sites/FULLSTACK_APPS/iqDOMUS/backend/resources/views/admin/solution/edit.blade.php ENDPATH**/ ?>