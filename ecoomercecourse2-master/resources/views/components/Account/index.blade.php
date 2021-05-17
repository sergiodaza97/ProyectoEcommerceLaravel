@extends('layouts.default')
@section('content')
   <!--====== App Content ======-->
   <div class="app-content">

    <!--====== Section 1 ======-->
    <div class="u-s-p-y-60">

        <!--====== Section Content ======-->
        <div class="section__content">
            <div class="container">
                <div class="breadcrumb">
                    <div class="breadcrumb__wrap">
                        <ul class="breadcrumb__list">
                            <li class="has-separator">

                                <a href="{{ route('products.index') }}">Home</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====== End - Section 1 ======-->


    <!--====== Section 2 ======-->
    <div class="u-s-p-b-60">

        <!--====== Section Content ======-->
        <div class="section__content">
            <div class="dash">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-12">

                            <!--====== Dashboard Features ======-->
                            <div class="dash__box dash__box--bg-white dash__box--shadow u-s-m-b-30">
                                @if (Auth::check())
                                <div class="dash__pad-1">

                                    <span class="dash__text u-s-m-b-16">Hello,{{ Auth::user()->name }}</span>
                                </div>
                                @else
                                 
                                <div class="dash__pad-1">

                                    <a href="{{ route ('register')}}"><i class="fas fa-user-plus u-s-m-r-6"></i>

                                        <span>Registrarse primero</span></a>
                                </div>
                                @endif
                            </div>
                            <div class="dash__box dash__box--bg-white dash__box--shadow dash__box--w">
                                <div class="dash__pad-1">
                                    <ul class="dash__w-list">
                                        <li>
                                            <div class="dash__w-wrap">

                                                <span class="dash__w-icon dash__w-icon-style-1"><i class="fas fa-cart-arrow-down"></i></span>
                                                {{-- @foreach ($orders as $order) --}}
                                                    <span class="dash__w-text">{{ count($orders) }}</span>
                                                {{-- @endforeach --}}

                                                <span class="dash__w-name">Orders Placed</span></div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!--====== End - Dashboard Features ======-->
                        </div>
                        <div class="col-lg-9 col-md-12">
                            <div class="dash__box dash__box--shadow dash__box--bg-white dash__box--radius">
                                <h2 class="dash__h2 u-s-p-xy-20">RECENT ORDERS</h2>
                                <div class="dash__table-wrap gl-scroll">
                                    <table class="dash__table">
                                        <thead>
                                            <tr>
                                                <th>Order #</th>
                                                <th>Placed On</th>
                                                <th>Payment</th>
                                                <th>state</th>
                                                <th>Final_price</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($orders as $order)                                                                                           
                                            <tr>
                                                <td>{{ $order->id }}</td>
                                                <td>{{ $order->created_at }}</td>
                                                <td>{{ $order->payment }}</td>
                                                <td>{{ $order->state }}</td>
                                                <td>{{ $order->final_price }}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====== End - Section Content ======-->
    </div>
    <!--====== End - Section 2 ======-->
</div>
<!--====== End - App Content ======-->
@endsection