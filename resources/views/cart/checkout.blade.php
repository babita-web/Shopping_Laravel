
@extends('layouts.frontend')
@section('title')
    Checkout | Babita
@endsection

<br><br><br><br>

@section('content')

    <div class="checkout-banner">
        <div class="container py-5 text-center">
            <i class="fa fa-credit-card fa-3x text-dark"></i>
            <h2 class="my-3">Checkout Page</h2>
            <p class="lead">Below Confirm all details to pay your order.</p>
        </div>
    </div>

        <div class="container">
            <div class="row">
                <div class="col-md-4 order-md-2 mb-4">
                    <h4 class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-muted">Your cart</span>
                        <span class="badge badge-secondary badge-pill"></span>
                    </h4>
                    <ul class="list-group mb-3">
                        @if(Session::has('cart'))
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">Product</th>
                                <th scope="col">Product name</th>
                                <th scope="col">Price</th>
                                <th scope="col">Qnty</th>
                                <th scope="col">Total Price</th>
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
                        </div>
                            <ul class="list-group mb-3">
                        <!-- Set up a container element for the button -->
                        <div id="paypal-button-container"></div>

                                <div id="paypal-button-container"></div>
                                <script src="https://www.paypal.com/sdk/js?client-id=sb&currency=USD" data-sdk-integration-source="button-factory"></script>
                                <script>
                                    paypal.Buttons({
                                        style: {
                                            shape: 'rect',
                                            color: 'gold',
                                            layout: 'vertical',
                                            label: 'paypal',

                                        },
                                        createOrder: function(data, actions) {
                                            return actions.order.create({
                                                purchase_units: [{
                                                    amount: {
                                                        value: '1'
                                                    }
                                                }]
                                            });
                                        },
                                        onApprove: function(data, actions) {
                                            return actions.order.capture().then(function(details) {
                                                alert('Transaction completed by ' + details.payer.name.given_name + '!');
                                            });
                                        }
                                    }).render('#paypal-button-container');
                                </script>
                    </ul>
                    <p>* 6 euro for shipping charge for a order under 100 €</p>
                    <hr>
                </div>

                <div class="col-md-8 order-md-1">
                    <h4 class="mb-3">Billing address</h4>
                    <form action="{{ route('checkout') }}" method="post"></form>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="firstName">First name</label>
                                <input type="test" id="firstname" value=" {{ Auth::user()->firstname }}" class="form-control">

                                <div class="invalid-feedback">
                                    Valid first name is required.
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="lastName">Last name</label>
                                <input type="test" id="lastname" value=" {{ Auth::user()->lastname }}"class="form-control">
                                <div class="invalid-feedback">
                                    Valid last name is required.
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="email">Email Address</label>
                            <input type="test" value=" {{ Auth::user()->email }}" readonly>


                        </div>
                        <div class="mb-3">
                            <label for="address">Address</label>
                            <input type="test" id="address" value=" {{ Auth::user()->address }}" class="form-control">
                            <div class="invalid-feedback">
                                Please enter your shipping address.
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="address2">Address 2
                                <span class="text-muted">(Optional)</span>
                            </label>
                            <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
                        </div>

                        <div class="row">
                            <div class="col-md-5 mb-3">
                                <label for="country">Country</label>
                                <select class="custom-select d-block w-100" id="country" required>
                                    <option value="">Choose...</option>
                                    <option>Belgium</option>
                                    <option>Nederlands</option>
                                    <option>France</option>
                                    <option>Germany</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please select a valid country.
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="state">City</label>
                                <input type="text" class="form-control" id="city" placeholder="" required>
                                <div class="invalid-feedback">
                                    Please provide a valid state.
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="zip">Zip</label>
                                <input type="text" class="form-control" id="zip" placeholder="" required>
                                <div class="invalid-feedback">
                                    Zip code required.
                                </div>
                            </div>
                        </div>


                        <h4 class="mb-3">Payment</h4>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="cc-name">Name on card</label>
                                <input type="text" class="form-control" id="cc-name" placeholder="" required>
                                <small class="text-muted">Full name as displayed on card</small>
                                <div class="invalid-feedback">
                                    Name on card is required
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="cc-number">Credit card number</label>
                                <input type="text" class="form-control" id="cc-number" placeholder="" required>
                                <div class="invalid-feedback">
                                    Credit card number is required
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 mb-3">
                                <label for="cc-expiration">Expiration</label>
                                <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
                                <div class="invalid-feedback">
                                    Expiration date required
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="cc-expiration">CVV</label>
                                <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
                                <div class="invalid-feedback">
                                    Security code required
                                </div>
                            </div>
                        </div>
                        <hr class="mb-4">
                        <a href="checkout_user.php" button class="btn btn-primary btn-lg btn-block" name="submitorder" type="submit">
                            <i class="fa fa-credit-card"></i> </a>
                    @endif
                    </form>
                </div>
            </div>
        </div>




@endsection
