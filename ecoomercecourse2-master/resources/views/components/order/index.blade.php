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

                                    <a href="{{ route('products.index') }}">Home</a>
                                </li>
                                <li class="is-marked">

                                    <a href="checkout.html">Checkout</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====== End - Section 1 ======-->




        <!--====== Section 3 ======-->
        <div class="u-s-p-b-60">

            <!--====== Section Content ======-->
            <div class="section__content">
                <div class="container">
                    <div class="checkout-f">
                        <div class="row">
                                <h1 class="checkout-f__h1">ORDER SUMMARY</h1>

                                <!--====== Order Summary ======-->
                                <div class="o-summary">
                                    <div class="o-summary__section u-s-m-b-30">
                                        <div class="o-summary__item-wrap gl-scroll">
                                            @foreach ($cartProducts as $cartProduct)
                                                <div class="o-card">


                                                    <div class="o-card__flex">
                                                        <div class="o-card__img-wrap">

                                                            <img class="u-img-fluid"
                                                                src="{{  $cartProduct['product']->images[0]->url }}"
                                                                alt="">
                                                        </div>
                                                        <div class="o-card__info-wrap">

                                                            <span class="o-card__name">

                                                                <a href="#">{{ $cartProduct['product']->name }}</a></span>

                                                            <span
                                                                class="o-card__quantity">{{ $cartProduct['amount'] }}</span>

                                                            <span
                                                                class="o-card__price">{{ $cartProduct['product']->price }}</span>
                                                        </div>
                                                    </div>


                                                    <div class="table-p__del-wrap">
                                                        <a class="far fa-trash-alt table-p__delete-link" href="{{route('cart.destroy',[ $cartProduct['product']->id])}}"></a>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <form class="checkout-f__payment" method='post' action="{{ route('order.store') }}">
                                        @csrf
                                    <div class="o-summary__section u-s-m-b-30">
                                        <div class="o-summary__box">
                                            <table class="f-cart__table">
                                                <tbody>
                                                    <tr>
                                                        <td>SHIPPING</td>
                                                        <td> Free</td>
                                                    </tr>
                                                    <tr>
                                                        <td>SUBTOTAL</td>
                                                        <td>${{ $finalPrice }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>IVA</td>
                                                        <td>${{ (($finalPrice/100)*19) }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>GRAND TOTAL</td>
                                                        <td>$<input name="final_price" value="{{ $finalPrice + (($finalPrice/100)*19)}}" required type="number" class="form-control"></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="o-summary__section u-s-m-b-30">
                                        <div class="o-summary__box">
                                            <h1 class="checkout-f__h1">PAYMENT INFORMATION</h1>
                                                    @auth

                                                        <input type="hidden" name="id" value="{{ Auth::user()->id }}">
                                                    @endauth
                                                <div class="u-s-m-b-10">

                                                    <!--====== Radio Box ======-->
                                                    <div class="radio-box">

                                                        <input type="radio" checked value="cc" id="pay-with-card" name="payment">
                                                        <div class="radio-box__state radio-box__state--primary">

                                                            <label class="radio-box__label" for="pay-with-card">Pay With
                                                                Credit / Debit Card</label>
                                                        </div>
                                                    </div>
                                                    <!--====== End - Radio Box ======-->

                                                    <span class="gl-text u-s-m-t-6">International Credit Cards must be
                                                        eligible for use within the United States.</span>
                                                </div>
                                                <div class="u-s-m-b-10">

                                                    <!--====== Radio Box ======-->
                                                    <div class="radio-box">

                                                        <input type="radio" value="paypal" id="pay-pal" name="payment">
                                                        <div class="radio-box__state radio-box__state--primary">

                                                            <label class="radio-box__label" for="pay-pal">Pay Pal</label>
                                                        </div>
                                                    </div>
                                                    <!--====== End - Radio Box ======-->

                                                    <span class="gl-text u-s-m-t-6">When you click "Place Order" below we'll
                                                        take you to Paypal's site to set up your billing information.</span>
                                                </div>
                                                <div class="u-s-m-b-10">
                                                    <!--====== Radio Box ======-->
                                                    <div class="radio-box">

                                                        <input type="radio" value="crypto" id="pay-with-check"
                                                            name="payment">
                                                        <div class="radio-box__state radio-box__state--primary">

                                                            <label class="radio-box__label" for="pay-with-check">Pay With
                                                                Crypto</label>
                                                        </div>
                                                    </div>
                                                    <!--====== End - Radio Box ======-->

                                                    <span class="gl-text u-s-m-t-6">Please send a check to Store Name, Store
                                                        Street, Store Town, Store State / County, Store Postcode.</span>
                                                </div>
                                                <div class="u-s-m-b-15">

                                                    <!--====== Check Box ======-->
                                                    <div class="check-box">

                                                        <input type="checkbox" id="term-and-condition">
                                                        <div class="check-box__state check-box__state--primary">

                                                            <label class="check-box__label" for="term-and-condition">I
                                                                consent to the</label>
                                                        </div>
                                                    </div>
                                                    <!--====== End - Check Box ======-->

                                                    <a class="gl-link">Terms of Service.</a>
                                                </div>
                                                <div>

                                                    <button class="btn btn--e-brand-b-2" type="submit"> PLACE ORDER</button>
                                                </div>
                                            
                                        </div>
                                    </div>
                                </form>
                                </div>
                                <!--====== End - Order Summary ======-->
                        </div>
                    </div>
                </div>
            </div>
            <!--====== End - Section Content ======-->
        </div>
        <!--====== End - Section 3 ======-->
    </div>
    <!--====== End - App Content ======-->

@endsection