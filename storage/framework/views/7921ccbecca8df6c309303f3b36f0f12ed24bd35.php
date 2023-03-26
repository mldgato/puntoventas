<div>
    <!-- Button -->
    <button type="button" class="btn btn-outline-primary btn-lg ml-2" data-toggle="modal" data-target="#CreateNewWarehouse">
        <i class="fas fa-plus-circle"></i> Nueva bodega
    </button>

    <!-- Modal -->
    <div wire:ignore.self class="modal fade" id="CreateNewWarehouse" data-bs-backdrop="static" data-bs-keyboard="false"
        tabindex="-1" role="dialog" aria-labelledby="CreateNewWarehouseLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="CreateNewWarehouseLabel">Crear una nueva bodega</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true close-btn">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <label for="name">Nombre de la bodega:</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fab fa-slack-hash"></i></span>
                                </div>
                                <input type="text" class="form-control" id="name"
                                    placeholder="Escriba el nombre de la bodega, ejemplo: Bodega 1" wire:model="name">
                            </div>
                            <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="text-danger error"><?php echo e($message); ?></span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="form-group">
                            <label for="address">Dirección:</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-map-marked-alt"></i></span>
                                </div>
                                <input type="text" class="form-control" id="address"
                                    placeholder="Escriba la dirección de la bodega" wire:model="address">
                            </div>
                            <?php $__errorArgs = ['address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="text-danger error"><?php echo e($message); ?></span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger close-btn" data-dismiss="modal"
                        wire:click="resetFields"><i class="fas fa-window-close"></i> Cerrar</button>

                    <button type="button" class="btn btn-success" wire:click="save" wire:loading.attr="disabled"
                        wire:loading.class.remove="btn-success" wire:loading.class="btn btn-warning"
                        wire:target="save"><span wire:loading.remove wire:target="save"><i class="fas fa-save"></i>
                            Guardar</span><span wire:loading wire:target="save"><i
                                class="fas fa-spinner fa-pulse"></i>
                            Guardando</span></button>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\puntoventas\resources\views/livewire/admin/stocktaking/warehouses/create-warehouse.blade.php ENDPATH**/ ?>