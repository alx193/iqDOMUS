<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="col-md-12">
    
    <div class="card">
        <div class="card-header">
            <h3>Adauga 
                <a href="<?php echo e(url('admin/gallery')); ?>" class='btn btn-danger btn-sm text-white float-end'>Inapoi</a>
            </h3>
        </div>
        <div class="card-body">

            <form action="<?php echo e(url('admin/gallery')); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="mb3">
                    <label>Solutie</label>
                        <select name="solution_id" class="form-control">
                            <?php $__currentLoopData = $solutions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $solution): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($solution->id); ?>"><?php echo e($solution->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                </div>
                <div class="mb-3">
                    <label>Nume</label>
                    <input type="text" name="name" class="form-control" />
                </div>
                <div class="mb-3">
                    <label>Descriere</label>
                    <textarea name="description" class="form-control" rows="4"></textarea>
                </div>
                <div class="mb-3">
                    <label>Incarca fotografii</label>
                    <input type="file" name="image[]" multiple class="form-control" />
                 </div>
                 <div class="mb-3">
                    <label>Status</label><br />
                    <input type="checkbox" name="status"  style="width: 40px; height: 40px;"/>
                </div>
                 <div class="col-md-12 mb-3">
                <button type="submit" class="btn btn-primary float-end">Creaza!</button>
                </div>

            </form>

            
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/mihai.pantazi/Sites/FULLSTACK_APPS/iqDOMUS/backend/resources/views/admin/gallery/create.blade.php ENDPATH**/ ?>