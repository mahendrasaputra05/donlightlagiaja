<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;
use App\Models\OrderItem;

class OrderController extends Controller
{
    /*
    |----------------------------------------------------------------------
    | CART PAGE
    |----------------------------------------------------------------------
    */
    public function cart()
    {
        $cart = session()->get('cart', []);
        $total = 0;

        foreach ($cart as $item) {
            $total += $item['price'] * $item['qty'];
        }

        return view('customer.cart', compact('cart', 'total'));
    }

    /*
    |----------------------------------------------------------------------
    | ADD TO CART
    |----------------------------------------------------------------------
    */
    public function addToCart(Request $request)
    {
        $request->validate([
            'id'    => 'required',
            'name'  => 'required',
            'price' => 'required|numeric',
        ]);

        $cart = session()->get('cart', []);
        $id = $request->id;

        if (isset($cart[$id])) {
            $cart[$id]['qty']++;
        } else {
            $cart[$id] = [
                'name'  => $request->name,
                'price' => $request->price,
                'qty'   => 1,
            ];
        }

        session()->put('cart', $cart);

        return redirect()
            ->route('customer.cart')
            ->with('success', 'Produk ditambahkan ke cart');
    }

    /*
    |----------------------------------------------------------------------
    | REMOVE ITEM FROM CART
    |----------------------------------------------------------------------
    */
    public function removeFromCart($id)
    {
        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
        }

        return back();
    }

    /*
    |----------------------------------------------------------------------
    | CHECKOUT (SAVE TO DATABASE)
    |----------------------------------------------------------------------
    */
    public function checkout()
    {
        $cart = session()->get('cart', []);

        // Jika cart kosong
        if (empty($cart)) {
            return redirect()->route('customer.dashboard');
        }

        // Hitung total
        $total = 0;
        foreach ($cart as $item) {
            $total += $item['price'] * $item['qty'];
        }

        // Simpan order
        $order = Order::create([
            'user_id'      => Auth::id(),
            'total_price' => $total,
            'status'      => 'pending',
        ]);

        // Simpan order items
        foreach ($cart as $item) {
            OrderItem::create([
                'order_id'     => $order->id,
                'product_name' => $item['name'],
                'price'        => $item['price'],
                'qty'          => $item['qty'],
            ]);
        }

        // Kosongkan cart
        session()->forget('cart');

        return redirect()
            ->route('customer.dashboard')
            ->with('success', 'Order berhasil dibuat!');
    }
}
