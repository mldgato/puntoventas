<div>
    <!-- Button -->
    <button type="button" class="btn btn-outline-primary btn-lg ml-2" data-toggle="modal" data-target="#CreateNewMeasure">
        <i class="fas fa-plus-circle"></i> Nueva unidad de medida
    </button>

    <!-- Modal -->
    <div wire:ignore.self class="modal fade" id="CreateNewMeasure" data-bs-backdrop="static" data-bs-keyboard="false"
        tabindex="-1" role="dialog" aria-labelledby="CreateNewMeasureLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="CreateNewMeasureLabel">Crear una unidad de medida</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true close-btn">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <label for="unit">Medida:</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-ruler-combined"></i></span>
                                </div>
                                <input type="text" class="form-control" id="unit"
                                    placeholder="Escriba la unidad de medida" wire:model="unit">
                            </div>
                            <?php $__errorArgs = ['unit'];
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
<?php /**PATH C:\xampp\htdocs\puntoventas\resources\views/livewire/admin/stocktaking/measures/create-measure.blade.php ENDPATH**/ ?>