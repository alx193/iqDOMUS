<div class="row">
        <div class="col-md-12">

            <?php if(session('message')): ?>
                <div class="alert alert-success"><?php echo e(session('message')); ?></div>
            <?php endif; ?>

            <div class="card">
                <div class="card-header">
                    <h3>Solutii
                         <a href="<?php echo e(url('admin/solution/create')); ?>" class='btn btn-primary btn-sm float-end'>Adauga Solutie</a> 
                    </h3>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <td>ID</td>
                                <td>Nume</td>
                                <td>Descriere</td>
                                <td>Imagine</td>
                                <td>Status</td>
                                <td>Actiune</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $solutions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $solution): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($solution->id); ?></td>
                                    <td><?php echo e($solution->name); ?></td>
                                    <td><?php echo e($solution->description); ?></td>
                                    <td><?php echo e($solution->image); ?></td>
                                    <td><?php echo e($solution->status == '1' ? 'Ascuns':'Vizibil'); ?></td>
                                    <td>
                                        <a href="<?php echo e(url('admin/solution/'.$solution->id.'/edit' )); ?>" class="btn btn-sm btn-success">Vizualizare / Actualizare</a> 
                                        <a href="<?php echo e(url('admin/solution/'.$solution->id.'/delete')); ?>" onclick="return confirm('Esti sigur ca doresti sa stergi acesta solutie?')" class="btn btn-sm  btn-danger">
                                        Sterge!
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table> <br/>
                    <?php echo e($solutions->links()); ?>

                </div>
<?php /**PATH /Users/mihai.pantazi/Sites/FULLSTACK_APPS/iqDOMUS/backend/resources/views/livewire/admin/solution/index.blade.php ENDPATH**/ ?>