<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Product;
use Livewire\Attributes\Validate;
use App\Models\Category;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class AddProductForm extends Component
{
    use WithFileUploads;
    public $currentUrl;
    public $product_name = '';
    public $photo = '';
    public $product_description = '';
    public $product_price = '';

    public $category_id;


    public $all_categories;

   public function mount(){
    $this->all_categories = Category::all();
    }

    
    public function save(){
        $this->validate([
            'product_name' => 'required',
            'photo' => 'required|image|mimes:jpg,png|max:1024',
            'product_description' => 'required',
            'product_price' => 'required|integer',
            'category_id' => 'required',
        ]);
        //public/

        // $path = $this->photo->store('/public/photos');
        $path = $this->photo->store('photos', 'public');


        $product = new Product();
        $product->name = $this->product_name;
        $product->image = $path;
        $product->description = $this->product_description;
        $product->price = $this->product_price;
        $product->category_id = $this->category_id;
        $product->save();

        return $this->redirect('/handle-products', navigate: true);
    }
    public function render()
    {
        $current_url = url()->current();
        $explode_url = explode('/',$current_url);
        
        $this->currentUrl = $explode_url[3].' '.$explode_url[4];

        return view('livewire.add-product-form')
        ->layout('admin-layout');
    }
}
