

<?php $__env->startSection('content_header'); ?>
    <h1>Bodegas <i class="fas fa-warehouse"></i></h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.stocktaking.warehouses.show-warehouses')->html();
} elseif ($_instance->childHasBeenRendered('QqdAleQ')) {
    $componentId = $_instance->getRenderedChildComponentId('QqdAleQ');
    $componentTag = $_instance->getRenderedChildComponentTagName('QqdAleQ');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('QqdAleQ');
} else {
    $response = \Livewire\Livewire::mount('admin.stocktaking.warehouses.show-warehouses');
    $html = $response->html();
    $_instance->logRenderedChild('QqdAleQ', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
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
<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\puntoventas\resources\views/admin/stocktaking/warehouses/index.blade.php ENDPATH**/ ?>