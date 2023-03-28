

<?php $__env->startSection('content_header'); ?>
    <h1>Proveedores <i class="fas fa-people-carry"></i></h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.stocktaking.suppliers.show-suppliers')->html();
} elseif ($_instance->childHasBeenRendered('YQJN9Pn')) {
    $componentId = $_instance->getRenderedChildComponentId('YQJN9Pn');
    $componentTag = $_instance->getRenderedChildComponentTagName('YQJN9Pn');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('YQJN9Pn');
} else {
    $response = \Livewire\Livewire::mount('admin.stocktaking.suppliers.show-suppliers');
    $html = $response->html();
    $_instance->logRenderedChild('YQJN9Pn', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
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
<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\puntoventas\resources\views/admin/stocktaking/suppliers/index.blade.php ENDPATH**/ ?>