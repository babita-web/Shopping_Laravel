@extends('layouts.frontend')
@section('title')
Cart | Babita
@endsection

<br><br><br><br>

@section('content')

    <div class="container-fluid mt-5">
    <a href="{{ url('/products')}}">Back to Products</a>
    @if(Session::has('cart'))
    <div class="card">
        <div class="card-body">

            <table class="table">
                <thead>
                <tr>
                <th>Title Of Product</th>
                <th>Price of a Product</th>
                <th>Quantity</th>
                <th>Total Products Price</th>
                <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($products as $product)
                    <tr>
                        <td>{{$product ['item']['name'] }}</td>
                        <td>{{$product ['item']['price'] }}</td>
                        <td>{{ $product ['qty'] }}</td>
                        <td>{{ $product ['price'] }}</td>
                        <td><li><a href="#"> Reduce by 1</a></li>
                        <li><a href="#"> Increased by 1</a></li></td>
                    </tr>
                @endforeach

                </tbody>

            </table>
            <div class="row">
                <div class="col">
                    <h3><strong>Total : {{ $totalPrice }}</strong></h3>
                </div>


        <div class="col">
            <button type="button" class="btn btn-success">Checkout</button>
        </div>
    </div>
    @else
        <div class="row">
            <div class="col">
               <h3>No Items in Cart</h3>
            </div>
        </div>
        </div>
    @endif

@endsection
