<div>
    <div class="row">
        <div class="col-md-12">

            <?php if(session('message')): ?>
                <div class="alert alert-success"><?php echo e(session('message')); ?></div>
            <?php endif; ?>

            <div class="card">
                <div class="card-header">
                    <h3>Galerie Foto
                        <a href="<?php echo e(url('admin/gallery/create')); ?>" class='btn btn-primary btn-sm float-end'>Adauga Fotografii in Galerie</a>
                    </h3>
                </div>
                <div class="card-body">
                    <table class="table table table-striped">
                        <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Solutie</th>
                                    <th>Nume</th>
                                    <th>Descriere</th>
                                    <th>Actiune</th>
                                </tr>
                            
                        </thead>
                        <tbody>
                            <?php $__empty_1 = true; $__currentLoopData = $galleries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gallery): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <tr>
                                <td><?php echo e($gallery->id); ?></td>
                                <td>
                                    <?php if($gallery->solution): ?>
                                        <?php echo e($gallery->solution->name); ?>

                                    <?php else: ?>
                                    Fara Solutie
                                    <?php endif; ?>
                                </td>
                                <td><?php echo e($gallery->name); ?></td>
                                <td><?php echo e($gallery->description); ?></td>
                                <td>
                                    <a href="<?php echo e(url('admin/gallery/'.$gallery->id.'/edit' )); ?>" class="btn btn-sm btn-success">Vizualizare / Actualizare</a> 
                                    <a href="<?php echo e(url('admin/gallery/'.$gallery->id.'/delete')); ?>" onclick="return confirm('Esti sigur ca doresti sa stergi acesta galerie?')" class="btn btn-sm  btn-danger">
                                    Sterge!
                                    </a>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <tr>
                                <td colspan="7">Nu exista galerie</td>
                            </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                    <br/>
                     <?php echo e($galleries->links()); ?> 
                </div>
            </div>
        </div>
    </div>


</div><?php /**PATH /Users/mihai.pantazi/Sites/FULLSTACK_APPS/iqDOMUS/backend/resources/views/livewire/admin/gallery/index.blade.php ENDPATH**/ ?>