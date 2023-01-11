<div>

     


    <div class="row">
        <div class="col-md-12">

            <?php if(session('message')): ?>
                <div class="alert alert-success"><?php echo e(session('message')); ?></div>
            <?php endif; ?>

            <div class="card">
                <div class="card-header">
                    <h3>Formulare de Contact
                        
                    </h3>
                </div>
                <div class="card-body">
                    <table class="table table table-striped">
                        <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nume</th>
                                    <th>E-mail</th>
                                    <th>Telefon</th>
                                    <th>Solutie Dorita</th>
                                    
                                    <th>Status</th>
                                    <th>Data</th>
                                    <th>Actiune</th>
                                </tr>
                            <tbody>
                                <?php $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($contact->id); ?></td>
                                        <td><?php echo e($contact->name); ?></td>
                                        <td><?php echo e($contact->email); ?></td>
                                        <td><?php echo e($contact->phone); ?></td>
                                        <td><?php echo e($contact->solution); ?></td>
                                        
                                        <td><?php echo e($contact->status == '1' ? 'Citit' : ''); ?></td>
                                        <td><?php echo e($contact->created_at); ?></td>
                                        <td>
                                                <a href="<?php echo e(url('admin/contact/'.$contact->id.'/edit' )); ?>" class="btn btn-sm btn-success">Vizualizare</a> 
                                                <a href="<?php echo e(url('admin/contact/'.$contact->id.'/delete')); ?>" onclick="return confirm('Esti sigur ca doresti sa stergi acest Formular de Contact?')" class="btn btn-sm  btn-danger">
                                                   Sterge!
                                                </a>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </thead>
                    </table>
                    <br/>
                    <?php echo e($contacts->links()); ?>

                </div>
            </div>
        </div>
    </div>


</div>
<?php /**PATH /Users/mihai.pantazi/Sites/FULLSTACK_APPS/iqDOMUS/backend/resources/views/livewire/admin/contact/index.blade.php ENDPATH**/ ?>