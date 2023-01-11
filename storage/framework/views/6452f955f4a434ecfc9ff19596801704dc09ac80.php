<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="card">
        <div class="card-header">
            <h3>Adauga Formular de Contact
                <a href="<?php echo e(url('admin/contact')); ?>" class='btn btn-primary btn-sm text-white float-end'>Inapoi</a>
            </h3>
        </div>
        <div class="card-body">
            <form action="<?php echo e(url('admin/contact')); ?>" method ="POST" enctype="multiplart/form-data">
                <?php echo csrf_field(); ?> 

                <div class="mb-3">
                    <label>Nume</label>
                    <input type="text" name="name" class="form-control" />
                </div>
                <div class="mb-3">
                    <label>E-mail</label>
                    <input type="text" name="email" class="form-control" />
                </div>
                <div class="mb-3">
                    <label>Phone</label>
                    <input type="text" name="phone" class="form-control" />
                </div>
                <div class="mb-3">
                    <label>Solutie</label>
                    <select name="solution" #contact_formSolution>
                <option value="Casa Basic">Casa Basic</option>
                <option value="Casa Premium">Casa Premium</option>
                <option value="Apartement Basic">Apartament Basic</option>
                <option value="Apartament Premium">Apartament Premium</option>
        </select>
                </div>
                <div class="mb-3">
                    <label>Mesaj</label>
                    <input type="text" name="message" class="form-control" />
                </div>
                <div class="mb-3">
                    <label>Status</label><br/>
                    <input type="checkbox" name="status"  />
                </div>
                 <div class="col-md-12 mb-3">
                                    <button type="submit" class="btn btn-primary float-end">Salveaza</button>
                                </div>
            </form>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/mihai.pantazi/Sites/FULLSTACK_APPS/iqDOMUS/backend/resources/views/admin/contact/create.blade.php ENDPATH**/ ?>