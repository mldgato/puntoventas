

<?php $__env->startSection('content_header'); ?>
    <div class="row">
        <div class="col">
            <h1><i class="fas fa-warehouse"></i> <span class="text-danger"><?php echo e($warehouse->name); ?></span></h1>
        </div>
        <div class="col">
            <div class="d-flex justify-content-end">
                <a href="<?php echo e(route('admin.stocktaking.warehouses.index')); ?>" class="btn btn-outline-warning btn-lg"
                    title="Regresar"><i class="fas fa-backward"></i></a>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-header">
            <span class="text-primary"><i class="fas fa-info"></i> Información</span>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <div class="form-group">
                        <label for="address">Dirección:</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-map-marked-alt"></i></span>
                            </div>
                            <div class="form-control"><?php echo e($warehouse->address); ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <span class="text-primary"><i class="fas fa-toolbox"></i> Productos</span>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-sm table-striped table-hover table-bordered">
                    <thead>
                        <tr>
                            <th>Cod.</th>
                            <th>Producto</th>
                            <th>Marca</th>
                            <th>Cantidad</th>
                            <th>Precio</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr class="<?php echo e($product->claseFila); ?>">
                                <td><?php echo e($product->cod); ?></td>
                                <td><?php echo e($product->name); ?></td>
                                <td><?php echo e($product->brand); ?></td>
                                <td><?php echo e($product->quantity); ?></td>
                                <td><?php echo e($product->price); ?></td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Cod.</th>
                            <th>Producto</th>
                            <th>Marca</th>
                            <th>Cantidad</th>
                            <th>Precio</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>
    <div class="d-flex justify-content-end">
        <b>Version</b> 1.3
    </div>
    <strong>Sistema de Puntos de Venta. Todos los derechos reservados © 2022 - <?php echo e(date('Y')); ?>. </strong>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="/css/admin_custom.css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\puntoventas\resources\views/admin/stocktaking/warehouses/show.blade.php ENDPATH**/ ?>