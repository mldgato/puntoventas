

<?php $__env->startSection('content_header'); ?>
    <h1>Productos <i class="fas fa-toolbox"></i></h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.stocktaking.products.show-products')->html();
} elseif ($_instance->childHasBeenRendered('p5Lt1jv')) {
    $componentId = $_instance->getRenderedChildComponentId('p5Lt1jv');
    $componentTag = $_instance->getRenderedChildComponentTagName('p5Lt1jv');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('p5Lt1jv');
} else {
    $response = \Livewire\Livewire::mount('admin.stocktaking.products.show-products');
    $html = $response->html();
    $_instance->logRenderedChild('p5Lt1jv', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
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
<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\puntoventas\resources\views/admin/stocktaking/products/index.blade.php ENDPATH**/ ?>