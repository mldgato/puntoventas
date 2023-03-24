

<?php $__env->startSection('content_header'); ?>
    <h1>Medidas <i class="fas fa-ruler-horizontal"></i></h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.stocktaking.measures.show-measures')->html();
} elseif ($_instance->childHasBeenRendered('fAa5eUx')) {
    $componentId = $_instance->getRenderedChildComponentId('fAa5eUx');
    $componentTag = $_instance->getRenderedChildComponentTagName('fAa5eUx');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('fAa5eUx');
} else {
    $response = \Livewire\Livewire::mount('admin.stocktaking.measures.show-measures');
    $html = $response->html();
    $_instance->logRenderedChild('fAa5eUx', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
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