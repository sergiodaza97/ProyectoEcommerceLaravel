<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use phpDocumentor\Reflection\Types\This;

class CartController extends Controller
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
        $finalPrice = $this->finalprice();
        if(session() -> has('cart') == false ) {
            return redirect() -> route('products.index');    
        }
        else {

            $cartProducts = session() -> get ('cart.products');
            return view('components/cart.index', compact('cartProducts', 'finalPrice'));
        }
        
    }
    //funcion agregar producto uno en uno 
    public function add(Product $product){

      
     
        $cartProducts = session()->get('cart.products');
        $indexFoundProduct = collect(session()->get('cart.products')) -> search(function ($cartProduct) use ($product) {

            return $cartProduct['product']->id == $product->id ;
        });

       
        if($indexFoundProduct) {

            $cartProducts[$indexFoundProduct]['amount'] += '1';

            session()->put('cart.products',$cartProducts);
    
            session()->flash('status',"se actualizo cantidad de $product->name en el carrito");
    
            }else {
    
                      // EN CASO QUE NO EXISTA EN EL CARRITO
                      //3. SE HACE UN PUSH Y YA ESTA
            session()->push('cart.products', ['product'=> $product, 'amount' => 1]);   
            session()->flash('status',"se agrego producto $product->name al carrito");
           
            }

 
    }
    //funcion agregar producto uno en uno 

    public function addOne(Product $product)
    {   
        
        $this->add($product);
        return redirect()->route('products.index');

        
    }
    function addProductsToCart ($productSelected,$amount) {

        if(session()->has('cart') == false) {
            session()->put('cart', [ 'products' => [] ]);
        }

        //1. VERIFICAR SI EL PRODUCTO QUE SE ESTA AGREGANDO EN EL MOMENTO YA EXISTE EN EL CARRITO

        $cartProducts = session()->get('cart.products');
        //forma sucia
        //  $indexFoundProduct= -1 ;


        // foreach ($cartProducts as $index => $cartProduct) {
           
        //     if( $cartProduct['product']->id ==  $productSelected -> id) {
        //         $indexFoundProduct = $index;
        //         break;
        //     }

        // }

        //forma limpia

        $indexFoundProduct = collect(session()->get('cart.products')) -> search(function ($cartProduct) use ($productSelected) {

            return $cartProduct['product']->id == $productSelected->id ;
        });

        // print_r($indexFoundProduct);
        // dd($cartProducts);


        if($indexFoundProduct != false) {
        //2.TOMAR DESICION EN CASO POSITIVO
        //2.1 ACTUALIZAR EN EL CARRITO LA CANTIDAD DE PRODUCTOS, SUMANDO LOS QUE YA EXISTEN CON LOS QUE ESTAN AGREGANDO
        
        $cartProducts[$indexFoundProduct]['amount'] += $amount;

        //2.2 REEMPLAZAR NUEVAMENTE TODO EL CARRITO
        session()->put('cart.products',$cartProducts);

        session()->flash('status',"se actualizo cantidad de $productSelected->name en el carrito");

        }else {

                  // EN CASO QUE NO EXISTA EN EL CARRITO
                  //3. SE HACE UN PUSH Y YA ESTA
        session()->push('cart.products', ['product'=> $productSelected, 'amount' => $amount]);   
        session()->flash('status',"se agrego producto $productSelected->name al carrito");
        
       
        }
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
        $productSelected = Product::find($request->productId);
        
        $amount = $request -> amount;

        $this->addProductsToCart($productSelected,$amount);
       
        return redirect()->route('products.index');
      
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyAll(){
        $cartProducts = session() -> get ('cart.products');
        unset($cartProducts);
        session() -> put ('cart', [ 'products' => [] ]);
        session()->flash('status',"Carrito eliminado correctamente");
    
        return redirect()->route('products.index');


    }
    

    public function destroy($id)
    {
        $cartProducts = session() -> get ('cart.products');
        $indexFoundProduct = -1;

        foreach (   $cartProducts as $index => $cartProduct ) {

            if (  $cartProduct['product'] -> id == $id){
                $indexFoundProduct = $index;
                $name =$cartProduct['product'] -> name;
                break;
            }

        }

        if($indexFoundProduct != -1){
            unset($cartProducts[$index]);
            session() -> put ('cart', [ 'products' => [] ]);
            session()->flash('status',"se elimino producto $name del carrito");
        }
        
        session() ->put('cart.products',$cartProducts);
        if (count($cartProducts)>0){
            return redirect()->route('cart.index');
        }else{
            return redirect()->route('products.index');
        }

       
    }

    
        
}