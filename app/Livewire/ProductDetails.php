<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;
use App\Models\ShoppingCart;
use Illuminate\Support\Facades\Auth;

class ProductDetails extends Component
{
    public $product;

    public function mount($id)
    {
        $this->product = Product::findOrFail($id); // shows 404 if not found
    }

    public function addToCart($productId)
    {
        $cartItem = ShoppingCart::where('user_id', Auth::id())
            ->where('product_id', $productId)
            ->first();

        if ($cartItem) {
            $cartItem->quantity += 1; // increment its quantity
            $cartItem->save();
        } else {
            ShoppingCart::create([
                'user_id' => Auth::id(),
                'product_id' => $productId,
                'quantity' => 1,
            ]);
        }
        //dispatch
        $this->dispatch('cartUpdated');
    }

    public function render()
    {
        return view('livewire.product-details');
    }
}
