<?php

namespace App\Http\Livewire\Admin\Stocktaking\Products;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Product;

class ShowProducts extends Component
{
    use WithPagination;
    public $cod, $name, $brand, $quantity, $price, $supplier_id, $measure_id, $warehouse_id, $rack_id, $product_id;
    public $search;
    public $sort = 'name';
    public $direction = 'asc';
    public $cant = '10';
    public $readyToLoad = false;

    protected $paginationTheme = "bootstrap";
    protected $queryString = [
        'cant' => ['except' => '10']
    ];
    protected $listeners = ['render', 'delete'];

    protected $rules = [
        'cod' => 'required',
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
    public function updatingSearch()
    {
        $this->resetPage();
    }
    public function updatingCant()
    {
        $this->resetPage();
    }
    public function updatingSort()
    {
        $this->resetPage();
    }
    public function updatingDirection()
    {
        $this->resetPage();
    }

    public function render()
    {
        if ($this->readyToLoad) {
            $products = Product::where('cod', 'LIKE', '%' . $this->search . '%')
                ->orWhere('name', 'LIKE', '%' . $this->search . '%')
                ->orWhere('brand', 'LIKE', '%' . $this->search . '%')
                ->orderBy($this->sort, $this->direction)
                ->paginate($this->cant);
        } else {
            $products = [];
        }
        return view('livewire.admin.stocktaking.products.show-products', compact('products'));
    }

    public function loadProducts()
    {
        $this->readyToLoad = true;
    }

    public function order($sort)
    {
        if ($this->sort == $sort) {
            if ($this->direction == 'desc') {
                $this->direction = 'asc';
            } else {
                $this->direction = 'desc';
            }
        } else {
            $this->sort = $sort;
            $this->direction = 'asc';
        }
    }

    public function resetFields()
    {
        $this->reset([
            'cod',
            'name',
            'brand',
            'quantity',
            'price',
            'supplier_id',
            'measure_id',
            'warehouse_id',
            'rack_id',
        ]);
    }

    public function edit($id)
    {
        $product = Product::where('id', $id)->first();
        $this->product_id = $id;
        $this->cod = $product->cod;
        $this->name = $product->name;
        $this->brand = $product->brand;
        $this->quantity = $product->quantity;
        $this->price = $product->price;
        $this->supplier_id = $product->supplier_id;
        $this->measure_id = $product->measure_id;
        $this->warehouse_id = $product->warehouse_id;
        $this->rack_id = $product->rack_id;
    }

    public function update()
    {
        $this->validate();
        if ($this->product_id) {
            $product = Product::find($this->product_id);
            $product->update([
                'cod' => $this->cod,
                'name' => $this->name,
                'brand' => $this->brand,
                'quantity' => $this->quantity,
                'price' => $this->price,
                'supplier_id' => $this->supplier_id,
                'measure_id' => $this->measure_id,
                'warehouse_id' => $this->warehouse_id,
                'rack_id' => $this->rack_id,
            ]);
            $this->resetFields();
            $this->emit('closeModalMessaje', 'Información actualizada', 'Producto actualizado exitosamente.', 'success', 'UpdateNewProduct');
        }
    }
}
