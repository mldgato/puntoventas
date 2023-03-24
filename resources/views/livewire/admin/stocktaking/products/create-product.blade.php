<div>
    <!-- Button -->
    <button type="button" class="btn btn-outline-primary btn-lg ml-2" data-toggle="modal" data-target="#CreateNewSupplier">
        <i class="fas fa-plus-circle"></i> Nuevo proveedor
    </button>

    <!-- Modal -->
    <div wire:ignore.self class="modal fade" id="CreateNewSupplier" data-bs-backdrop="static" data-bs-keyboard="false"
        tabindex="-1" role="dialog" aria-labelledby="CreateNewSupplierLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="CreateNewSupplierLabel">Crear un ciclo</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true close-btn">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        @csrf
                        <div class="form-group">
                            <label for="cod">Código:</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fab fa-slack-hash"></i></span>
                                </div>
                                <input type="text" class="form-control" id="cod"
                                    placeholder="Escriba el número de NIT de la compañía" wire:model="cod">
                            </div>
                            @error('cod')
                                <span class="text-danger error">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="name">Producto:</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-building"></i></span>
                                </div>
                                <input type="text" class="form-control" id="name"
                                    placeholder="Escriba el nombre de la compañía" wire:model="name">
                            </div>
                            @error('name')
                                <span class="text-danger error">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="brand">Marca:</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-map-marked-alt"></i></span>
                                </div>
                                <input type="text" class="form-control" id="brand"
                                    placeholder="Escriba la dirección de la compañía" wire:model="brand">
                            </div>
                            @error('brand')
                                <span class="text-danger error">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="quantity">Cantidad:</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                </div>
                                <input type="number" class="form-control" id="quantity"
                                    placeholder="Escriba el número de teléfono de la compañía" wire:model="quantity">
                            </div>
                            @error('quantity')
                                <span class="text-danger error">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="price">Precio:</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-user-tag"></i></span>
                                </div>
                                <input type="text" class="form-control" id="price"
                                    placeholder="Escriba el nombre del vendedor de la compañía" wire:model="price">
                            </div>
                            @error('price')
                                <span class="text-danger error">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="supplier_id">proveedor:</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-user-tag"></i></span>
                                </div>
                                <select name="supplier_id" id="supplier_id" class="form-control" wire:model="supplier_id">
                                    <option value="">- Seleccione -</option>
                                    @foreach ($suppliers as $supplier)
                                        <option value="{{ $supplier->id }}">{{ $supplier->company }}</option>
                                    @endforeach
                                </select>
                            </div>
                            @error('supplier_id')
                                <span class="text-danger error">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="measure_id">Medida:</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-user-tag"></i></span>
                                </div>
                                <select name="measure_id" id="measure_id" class="form-control" wire:model="measure_id">
                                    <option value="">- Seleccione -</option>
                                    @foreach ($measures as $measure)
                                        <option value="{{ $measure->id }}">{{ $measure->unit }}</option>
                                    @endforeach
                                </select>
                            </div>
                            @error('measure_id')
                                <span class="text-danger error">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="warehouse_id">Bodega:</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-user-tag"></i></span>
                                </div>
                                <select name="warehouse_id" id="warehouse_id" class="form-control" wire:model="warehouse_id">
                                    <option value="">- Seleccione -</option>
                                    @foreach ($warehouses as $warehouse)
                                        <option value="{{ $warehouse->id }}">{{ $warehouse->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            @error('warehouse_id')
                                <span class="text-danger error">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="rack_id">Estate:</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-user-tag"></i></span>
                                </div>
                                <select name="rack_id" id="rack_id" class="form-control" wire:model="rack_id">
                                    <option value="">- Seleccione -</option>
                                    @foreach ($racks as $rack)
                                        <option value="{{ $rack->id }}">{{ $rack->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            @error('rack_id')
                                <span class="text-danger error">{{ $message }}</span>
                            @enderror
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
