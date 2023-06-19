<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use App\Http\Livewire\ShopComponent;
use Livewire\WithPagination;
use Cart;

class HomeComponent extends Component
{
    use WithPagination;

    public $pageSize = 8;

    public function addToWishlist($product_id, $product_name, $product_price)
    {
        Cart::instance('wishlist')->add($product_id, $product_name, 1, $product_price)->associate('App\Models\Product');
        $this->emitTo('wishlist-icon-component', 'refreshComponent');
    }

    public function store($product_id, $product_name, $product_price)
    {
        Cart::instance('cart')->add($product_id, $product_name, 1, $product_price)->associate('App\Models\Product');
        session()->flash('success_message', 'Item added in Cart');
        return redirect()->route('shop.cart');
    }

    public function removeFromWishlist($product_id)
    {
        foreach(Cart::instance('wishlist')->content() as $witem)
        {
            if($witem -> id == $product_id)
            {
                Cart::instance('wishlist')->remove( $witem -> rowId );
                $this->emitTo('wishlist-icon-component', 'refreshComponent');
                return;
            }
        }
    }

    public function render()
    {
        $products = Product::paginate($this->pageSize);
        return view('livewire.home-component', ['products'=>$products]);
    }
}
