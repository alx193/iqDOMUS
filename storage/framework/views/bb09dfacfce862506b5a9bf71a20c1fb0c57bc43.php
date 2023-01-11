<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="card">
        <div class="card-header">
            <h3>Modifica aceasta galerie
                <a href="<?php echo e(url('admin/gallery')); ?>" class='btn btn-danger btn-sm text-white float-end'>Inapoi</a>
            </h3>
        </div>
        <div class="card-body">
            <form action="<?php echo e(url('admin/gallery/'.$gallery->id)); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>
                <div class="mb3">
                    <label>Solutie</label>
                        <select name="solution_id" class="form-control">
                            <?php $__currentLoopData = $solutions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $solution): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($solution->id); ?>" <?php echo e($solution->id == $gallery->solution_id  ? 'selected' : ''); ?>>
                                <?php echo e($solution->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                </div>
                <div class="mb-3">
                    <label>Nume</label>
                    <input type="text" name="name" value="<?php echo e($gallery->name); ?>" class="form-control" />
                </div>
                <div class="mb-3">
                    <label>Descriere</label>
                    <textarea name="description" class="form-control" rows="4"><?php echo e($gallery->description); ?></textarea>
                </div>
                <div class="mb-3">
                        <label>Incarca Imagini</label>  
                        <input type="file" name="image[]" multiple class="form-control"/> 
                </div>
                <div>
                    <?php if($gallery->galleryImages): ?>
                        <div class="row">
                            <?php $__currentLoopData = $gallery->galleryImages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-md-2">
                                <img src="<?php echo e(asset($image->image)); ?>" style="width: 80px;height: 80px"
                                    class="me-4 border" alt="Img">
                                <a href="<?php echo e(url('admin/gallery-image/'.$image->id.'/delete')); ?>" class="d-block">Sterge </a>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    <?php else: ?>
                        <h5>Nu exista imagini incarcate!</h5>
                    <?php endif; ?>
                </div>
            
                 <div class="col-md-12 mb-3">
                    <button type="submit" class="btn btn-primary float-end">Actualizeaza</button>
                 </div>
            </form>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/mihai.pantazi/Sites/FULLSTACK_APPS/iqDOMUS/backend/resources/views/admin/gallery/edit.blade.php ENDPATH**/ ?>