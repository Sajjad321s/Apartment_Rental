<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel 10 How To Integrate Stripe Payment Gateway</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class='row'>
            <h1>Payment Gateway</h1>
            <div class='col-md-12'>
                <div class="card">
                    <div class="card-header">
                    Payment Gateway
                    </div>
                    <div class="card-body">
                    <table id="cart" class="table table-hover table-condensed">
                    <thead>
                        <tr>
                            <th style="width:50%">Apartment Name</th>
                            
                            
                            <th style="width:22%" class="text-center">Cost Amount</th>
                            <th style="width:10%"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td data-th="Product">
                                <div class="row">
                                    
                                    <div class="col-sm-9">
                                    <h4 class="nomargin">{{ $productname }}</h4>
                                    </div>
                                </div>
                            </td>
                            
                            
                            <td data-th="Subtotal" class="text-center">${{ $total }}</td>
                            <td class="actions" data-th="">
                                <a href="{{ url('/index1') }}" class="btn btn-warning"> <i class="fa fa-arrow-left"></i>Showroom  </a>
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="5" style="text-align:right;"><h3><strong>Total ${{ $total }}</strong></h3></td>
                        </tr>
                        <tr>
                            <td colspan="5" style="text-align:right;">
                                <form action="/session" method="POST">
                                <a href="{{ url('/home') }}" class="btn btn-danger"> <i class="fa fa-arrow-left"></i> Go Home</a>
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <input type='hidden' name="productname" value="{{ $productname }}">
                                <input type='hidden' name="total" value="{{ $total }}">
                                
                                <button class="btn btn-success" type="submit" id="checkout-live-button"><i class="fa fa-money"></i> Checkout</button>
                                </form>
                            </td>
                        </tr>
                    </tfoot>
                </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>