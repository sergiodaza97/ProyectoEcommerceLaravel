<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function finalprice()
    {
        if (session()->has('cart')) {
            $finalPrice = 0;
            foreach (session()->get('cart.products') as $product) {
                $finalPrice = $finalPrice + ($product['product']->price * $product['amount']);
            }
        } else {
            $finalPrice = 0;
        }
        return $finalPrice;
    }
     public function index()
    {
        $finalPrice= $this->finalPrice();

        $cartProducts = session()->get('cart.products');
        return view('components/order.index', compact('finalPrice','cartProducts'));
    }
    public function __construct()
    {
       
       $this -> middleware(['auth']);

    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        
        $dataOrderForm = $request -> validate([
            'payment'=>['string', 'required'],
            'final_price'=>['numeric','required'],
            'id' => ['required']
        ]);


        $newOrder = new Order();
        $newOrder ->payment= $dataOrderForm['payment'];
        $newOrder ->state= 'pending';
        $newOrder ->final_price= $dataOrderForm['final_price'];
        $newOrder ->users_id= $dataOrderForm['id'];

        $newOrder -> save();

        $request->session()->put('cart', ['products' => []]); 
        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
