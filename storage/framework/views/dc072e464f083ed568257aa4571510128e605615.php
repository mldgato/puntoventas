<div wire:init="loadSuppliers">
    <?php echo $__env->make('livewire.admin.stocktaking.suppliers.update-supplier', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="card mb-3">
        <div class="card-header">
            <div class="row">
                <div class="col-lg-12">
                    <div class="d-flex justify-content-end">
                        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.stocktaking.suppliers.create-supplier')->html();
} elseif ($_instance->childHasBeenRendered('l1761002728-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l1761002728-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l1761002728-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l1761002728-0');
} else {
    $response = \Livewire\Livewire::mount('admin.stocktaking.suppliers.create-supplier');
    $html = $response->html();
    $_instance->logRenderedChild('l1761002728-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-12 col-md-3 mb-2">
                    <div class="d-flex align-items-center">
                        <span><strong>Mostrar</strong></span>
                        <span class="ml-2">
                            <select wire:model="cant" class="form-control">
                                <option value="10">10</option>
                                <option value="25">25</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                            </select>
                        </span>
                        <span class="ml-2"><strong>registros</strong></span>
                    </div>
                </div>
                <div class="col-12 col-md-9">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-search"></i></span>
                        </div>
                        <input wire:model="search" id="searcher" type="text" class="form-control"
                            placeholder="Escriba nombre del ciclo" autofocus="autofocus" />
                    </div>
                </div>
            </div>
        </div>
        <?php if(count($suppliers)): ?>
            <div class="card-body">
                <table class="table table-striped table-hover table-bordered table-sm table-responsive">
                    <thead>
                        <tr>
                            <th style="cursor: pointer" wire:click="order('company')">
                                Compañía
                                <?php if($sort == 'company'): ?>
                                    <?php if($direction == 'asc'): ?>
                                        <i class="fas fa-sort-up ml-4"></i>
                                    <?php else: ?>
                                        <i class="fas fa-sort-down ml-4"></i>
                                    <?php endif; ?>
                                <?php else: ?>
                                    <i class="fas fa-sort ml-4"></i>
                                <?php endif; ?>
                            </th>
                            <th style="cursor: pointer" wire:click="order('taxnumber')">
                                NIT
                                <?php if($sort == 'taxnumber'): ?>
                                    <?php if($direction == 'asc'): ?>
                                        <i class="fas fa-sort-up ml-4"></i>
                                    <?php else: ?>
                                        <i class="fas fa-sort-down ml-4"></i>
                                    <?php endif; ?>
                                <?php else: ?>
                                    <i class="fas fa-sort ml-4"></i>
                                <?php endif; ?>
                            </th>
                            <th style="cursor: pointer" class="d-none d-sm-table-cell" wire:click="order('address')">
                                Dirección
                                <?php if($sort == 'taxnumber'): ?>
                                    <?php if($direction == 'asc'): ?>
                                        <i class="fas fa-sort-up ml-4"></i>
                                    <?php else: ?>
                                        <i class="fas fa-sort-down ml-4"></i>
                                    <?php endif; ?>
                                <?php else: ?>
                                    <i class="fas fa-sort ml-4"></i>
                                <?php endif; ?>
                            </th>
                            <th style="cursor: pointer" wire:click="order('phone')">
                                Teléfono.
                                <?php if($sort == 'phone'): ?>
                                    <?php if($direction == 'asc'): ?>
                                        <i class="fas fa-sort-up ml-4"></i>
                                    <?php else: ?>
                                        <i class="fas fa-sort-down ml-4"></i>
                                    <?php endif; ?>
                                <?php else: ?>
                                    <i class="fas fa-sort ml-4"></i>
                                <?php endif; ?>
                            </th>
                            <th style="cursor: pointer" wire:click="order('seller')">
                                Vendedor
                                <?php if($sort == 'seller'): ?>
                                    <?php if($direction == 'asc'): ?>
                                        <i class="fas fa-sort-up ml-4"></i>
                                    <?php else: ?>
                                        <i class="fas fa-sort-down ml-4"></i>
                                    <?php endif; ?>
                                <?php else: ?>
                                    <i class="fas fa-sort ml-4"></i>
                                <?php endif; ?>
                            </th>
                            <th>&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $suppliers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $supplier): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($supplier->company); ?></td>
                                <td><?php echo e($supplier->taxnumber); ?></td>
                                <td class="d-none d-sm-table-cell"><?php echo e($supplier->address); ?></td>
                                <td><?php echo e($supplier->phone); ?></td>
                                <td><?php echo e($supplier->seller); ?></td>
                                <td class="text-right">
                                    <button wire:click="edit(<?php echo e($supplier->id); ?>)" data-toggle="modal"
                                        data-target="#UpdateNewSupplier" class="btn btn-primary btn-sm mr-2"><span
                                            class="d-none d-lg-block"><i class="fas fa-edit fa-fw"></i>
                                            Editar</span><span class="d-lg-none"><i
                                                class="fas fa-edit fa-fw"></i></span></button>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Compañía</th>
                            <th>NIT</th>
                            <th class="d-none d-sm-table-cell">Dirección</th>
                            <th>Teléfono</th>
                            <th>Vendedor</th>
                            <th>&nbsp;</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <?php if($suppliers->hasPages()): ?>
                <div class="card-footer">
                    <div class="d-flex justify-content-end"><?php echo e($suppliers->links()); ?></div>
                </div>
            <?php endif; ?>
        <?php else: ?>
            <div class="card-body">
                <strong class="text-danger">No se han encontrado registros...</strong>
            </div>
        <?php endif; ?>
    </div>
    <?php $__env->startSection('js'); ?>
        <script type="text/javascript">
            Livewire.on('closeModalMessaje', (title, message, type, mymodal) => {
                if (mymodal != 'null') {
                    $('#' + mymodal).modal('hide');
                }
                Swal.fire({
                    position: 'top-end',
                    icon: type,
                    title: title,
                    text: message,
                    showConfirmButton: false,
                    timer: 3000
                });
            });
        </script>
    <?php $__env->stopSection(); ?>
</div>
<?php /**PATH C:\xampp\htdocs\puntoventas\resources\views/livewire/admin/stocktaking/suppliers/show-suppliers.blade.php ENDPATH**/ ?>