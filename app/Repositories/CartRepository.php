<?php

namespace App\Repositories;

use App\Models\Cart;
use App\Models\CartItem;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class CartRepository implements RepositoryInterface
{
    public function find(int $id)
    {

    }

    public function query(array $filters)
    {

    }

    public function index(string $cartId)
    {
        $cart = Cart::where('cart_id', $cartId)->first();
        $items = [];
        if($cart){
            $items = $cart->items()->with('product')->where('saved_for_later', false)->get()->map->only(['quantity','product', 'id', 'saved_for_later']);
        }
        return $items;
    }

    public function savedForLater(string $cartId)
    {
        $cart = Cart::where('cart_id', $cartId)->first();
        $items = [];
        if($cart){
            $items = $cart->items()->with('product')->where('saved_for_later', true)->get()->map->only(['quantity','product', 'id', 'saved_for_later']);
        }
        return $items;
    }

    public function save(array $data)
    {
        $cartId = $data['cartId'];
        $quantity = $data['quantity'];
        $productId = $data['productId'];
        try{
            $cart = Cart::where('cart_id', $cartId)->firstOrFail();
        }catch(ModelNotFoundException $e){
            $cart = Cart::create(['cart_id' => $cartId]);
        }
        $cartItem = $cart->items()->where('product_id', $productId)->first();
        if($cartItem){
            $cartItem->quantity = $quantity;
            $cartItem->save();
            return $cartItem;
        }
        $cartItem = $cart->items()->create(['cart_id' => $cart->cart_id,'product_id' => $productId, 'quantity' => $quantity, 'saved_for_later' => false]);
        return $cartItem;
    }

    public function update($id, array $data)
    {
        //    
    }

    public function delete(int $id)
    {

    }
}