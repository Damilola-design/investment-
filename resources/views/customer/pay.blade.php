<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ 'Primrosepathcapital  || ' . Auth::user()->username }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.0/dist/alpine.js" defer></script>
    @stack('admin.layouts.style')
</head>

<body>



    {{-- <form method="POST" action="{{ route('pay') }}" accept-charset="UTF-8" class="form-horizontal" role="form" id="paymentForm" >
    <div class="row" style="margin-bottom:40px;">
        <div class="col-md-8 col-md-offset-2">
            <p>
                <div>
                    Primose Path capital investment, gold plan #100,000
                </div>
            </p>
            {{-- <input type="hidden" name="email" value="{{ Auth::user()->email }}"> {{-- required --}}
    {{-- <input type="hidden" name="orderID" value="345">
            <input type="hidden" name="amount" value="1000"> {{-- required in kobo --}}
    {{-- <input type="hidden" name="quantity" value="1">
            <input type="hidden" name="currency" value="NGN">
            <input type="hidden" name="metadata" value="{{ json_encode($array = ['key_name' => 'value',]) }}" > {{-- For other necessary things you want to add to your payload. it is optional though --}}
    {{-- <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}"> required --}}


    {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> employ this in place of csrf_field only in laravel 5.0 --}}

    {{-- <p> --}}
    {{-- <button  class="btn btn-success btn-lg btn-block" type="submit" value="Pay Now!">
                    <i class="fa fa-plus-circle fa-lg"></i> Pay Now!
                </button>
            </p>
        </div>
    </div>
</form> --}}
    <form id="payment" method="POST" action="{{ route('api.payment.save') }}">
        <input type="hidden" name="amount" value="10000000" class="amount">
        <input type="hidden" name="email" value="{{ Auth::user()->email }}" class="email">
        <p> Primose Path capital investment, gold plan #100,000</p>
        <button type="submit"> Pay </button>
    </form>



    <script src="http://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
    </script>
    <script src="https://js.paystack.co/v1/inline.js"></script>



    <script>
        let fn = (function() {
            let form = $('form');
            return {

                submitForm: function(data) {
                    // post request
                    $.post($('form').attr('action'), data, function(response) {
                        alert(JSON.stringify(response));
                    });

                },
                payWithPaystack: function(e) {
                    e.preventDefault();
                    let _this = this;
                    var handler = PaystackPop.setup({
                        key: 'pk_test_afb69a3bcea2698da591dafe42b2664233ac9c2e',
                        email: _this.email.value,
                        amount: _this.amount.value,
                        currency: "NGN",
                        ref: '' + Math.floor((Math.random() * 1000000000) +
                            1
                        ),
                        callback: function(response) {

                            fn.submitForm({
                                email: _this.email.value,
                                amount: _this.amount.value,
                                response
                            });
                        },
                        onClose: function() {
                            alert('window closed');
                        }
                    });

                    handler.openIframe();
                }
            }
        })();

        $(document).on('submit', 'form', fn.payWithPaystack);

    </script>
</body>

</html>
