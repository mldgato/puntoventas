<?php

namespace App\Http\Livewire\Admin\Stocktaking\Products;

use Livewire\Component;
use App\Models\Supplier;
use App\Models\Measure;
use App\Models\Product;
use App\Models\Warehouse;
use App\Models\Rack;

class CreateProduct extends Component
{
    public $cod, $name, $brand, $quantity, $price, $supplier_id, $measure_id, $warehouse_id, $rack_id;

    protected $rules = [
        'cod' => 'required',
        'name' => 'required',
        'brand' => 'required',
        'quantity' => 'required',
        'price' => 'required',
        'supplier_id' => 'required',
        'measure_id' => 'required',
        'warehouse_id' => 'required',
        'rack_id' => 'required',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function save()
    {
        $this->validate();

        Product::create(
            [
                'cod' => $this->cod,
                'name' => $this->name,
                'brand' => $this->brand,
                'quantity' => $this->quantity,
                'price' => $this->price,
                'supplier_id' => $this->supplier_id,
                'measure_id' => $this->measure_id,
                'warehouse_id' => $this->warehouse_id,
                'rack_id' => $this->rack_id,
                
            ]
        );
        $this->reset([
            'cod', 'name', 'brand', 'quantity', 'price', 'supplier_id', 'measure_id', 'warehouse_id', 'rack_id'
        ]);
        $this->emitTo('admin.stocktaking.products.show-products', 'render');
        $this->emit('closeModalMessaje', 'Información guardada', 'Producto creado exitosamente.', 'success', 'CreateNewSupplier');
    }

    public function render()
    {
        $suppliers = Supplier::orderBy('company', 'asc')->get();
        $measures = Measure::orderBy('unit', 'asc')->get();
        $warehouses = Warehouse::orderBy('name', 'asc')->get();
        $racks = Rack::orderBy('name', 'asc')->get();
        return view('livewire.admin.stocktaking.products.create-product', compact('suppliers', 'measures', 'warehouses', 'racks'));
    }
}
