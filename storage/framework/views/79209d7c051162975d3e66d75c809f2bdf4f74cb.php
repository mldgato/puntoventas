

<?php $__env->startSection('content_header'); ?>
    <h1>Medidas <i class="fas fa-ruler-horizontal"></i></h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.stocktaking.measures.show-measures')->html();
} elseif ($_instance->childHasBeenRendered('VUN67tH')) {
    $componentId = $_instance->getRenderedChildComponentId('VUN67tH');
    $componentTag = $_instance->getRenderedChildComponentTagName('VUN67tH');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('VUN67tH');
} else {
    $response = \Livewire\Livewire::mount('admin.stocktaking.measures.show-measures');
    $html = $response->html();
    $_instance->logRenderedChild('VUN67tH', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
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
<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\puntoventas\resources\views/admin/stocktaking/measures/index.blade.php ENDPATH**/ ?>