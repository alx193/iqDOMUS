<div>
    <div class="row">
        <div class="col-md-12">

            <?php if(session('message')): ?>
                <div class="alert alert-success"><?php echo e(session('message')); ?></div>
            <?php endif; ?>

            <div class="card">
                <div class="card-header">
                    <h3>Mesajul de intampinare
                        <a href="<?php echo e(url('admin/message/create')); ?>" class='btn btn-primary btn-sm float-end'>Adauga Mesaj de intampinare</a>
                    </h3>
                </div>
                <div class="card-body">
                    <table class="table table table-striped">
                        <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nume</th>
                                    <th>Descriere</th>
                                    <th>Actiune</th>
                                </tr>
                            <tbody>
                                <?php $__currentLoopData = $messages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($message->id); ?></td>
                                        <td><?php echo e($message->name); ?></td>
                                        <td><?php echo e($message->description); ?></td> 
                                        <td>
                                                <a href="<?php echo e(url('admin/message/'.$message->id.'/edit' )); ?>" class="btn btn-sm btn-success">Vizualizare</a> 
                                                <a href="<?php echo e(url('admin/message/'.$message->id.'/delete')); ?>" onclick="return confirm('Esti sigur ca doresti sa stergi acest mesaj?')" class="btn btn-sm  btn-danger">
                                                   Sterge!
                                                </a>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </thead>
                    </table>
                    <br/>
                    <?php echo e($messages->links()); ?>

                </div>
            </div>
        </div>
    </div>


</div><?php /**PATH /Users/mihai.pantazi/Sites/FULLSTACK_APPS/iqDOMUS/backend/resources/views/livewire/admin/message/index.blade.php ENDPATH**/ ?>