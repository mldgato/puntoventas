<!-- Modal -->
<div wire:ignore.self class="modal fade" id="UpdateNewRack" tabindex="-1" role="dialog" aria-labelledby="UpdateNewRack"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Actualizar Estantería</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <label for="name">Estantería:</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fab fa-slack-hash"></i></span>
                            </div>
                            <input type="text" class="form-control" id="name"
                                placeholder="Escriba el nombre de la estantería, ejemplo: Estate 1" wire:model="name">
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
                        <label for="warehouse_id">Bodega:</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-building"></i></span>
                            </div>
                            <select name="warehouse_id" id="warehouse_id" class="form-control"
                                wire:model="warehouse_id">
                                <option value="">- Seleccione -</option>
                                <?php $__currentLoopData = $warehouses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $warehouse): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($warehouse->id); ?>"><?php echo e($warehouse->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <?php $__errorArgs = ['warehouse_id'];
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
                <button wire:click="resetFields" type="button" class="btn btn-danger" data-dismiss="modal"><i
                        class="fas fa-window-close"></i> Cerrar</button>

                <button wire:click.prevent="update" type="button" class="btn btn-success" wire:loading.attr="disabled"
                    wire:loading.class.remove="btn-success" wire:loading.class="btn btn-warning"
                    wire:target="update"><span wire:loading.remove wire:target="update"><i
                            class="fas fa-exchange-alt"></i> Actualizar</span><span wire:loading wire:target="update"><i
                            class="fas fa-spinner fa-pulse"></i> Actualizando</span></button>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\puntoventas\resources\views/livewire/admin/stocktaking/racks/update-racks.blade.php ENDPATH**/ ?>