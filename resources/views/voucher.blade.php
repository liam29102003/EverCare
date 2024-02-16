<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="{{asset('admin\assets\css\voucher.css')}}">
        <title>Invoice</title>
        <!-- <link href="https://cdn.jsdelivr.f/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> -->
    </head>
    <body>
        <div class="wrapper">
            <div class="border-design top">
                <div class="c1"></div>
                <div class="c2"></div>
                <div class="c3"></div>
                <div class="c4"></div>
                <div class="c5"></div>
            </div>
            <div class="invoice-header">
                <div class="logo">Evercare</div>
                <div class="title">Invoice</div>
                <div class="inv-number">
                    <h3>Invoice#</h3>
                    <h4>65254</h4>
                
                    
                </div>
                <div class="inv-date">
                    <h3>Date</h3>
                    <h4>28/1/2024</h4>
                </div>
            </div>
            <div class="billing-detail">
                <p>Billing to</p>
                <p>Evercare Company</p>
                <p><span>Contact:</span>123456789</p>
                <p><span>Email:</span>evercare@email.com</p>
                <p><span>Address:</span>Hlaing Township, Yangon</p>
            </div>
            <table>
                <thead>
                    <tr>
                        <td>Description</td><td>Qty</td><td>Price</td><td>Amount</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($vouchers as $voucher)
                    
                    <tr><td class="1-col">{{$voucher->name}}</td><td>{{$voucher->quantity}}</td><td>{{$voucher->price}}MMK</td><td class="r-col">{{$voucher->amount}}MMK</td></tr>
 
                    @endforeach
                    {{-- <tr><td>2</td><td class="1-col">treatment</td><td>1</td><td>$50</td><td class="r-col">$250.00</td></tr>
                    <tr><td>3</td><td class="1-col">medical supply</td><td>1</td><td>$50</td><td class="r-col">$250.00</td></tr>
                    <tr><td>4</td><td class="1-col">x-ray</td><td>1</td><td>$50</td><td class="r-col">$250.00</td></tr>
                    <tr><td>5</td><td class="1-col">services</td><td>1</td><td>$50</td><td class="r-col">$250.00</td></tr> --}}
                </tbody>
            </table>
            <div class="total-section">
                <div class="sub">
                    <p>Sub Total</p>
                    <p>$1,250.00</p>
                </div>
                <div class="tax">
                    <p>Tax</p>
                    <p>$0.00</p>
                </div>
                <div class="total">
                    <p>Grand Total:</p>
                    <p>$1,250.00</p>
                </div>
            </div>

            <div class="payment-terms">
                <div class="payment-detail">
                    <p>Payment Info</p>
                    <p><span>Account#</span>     123456</p>
                    <p><span>A/c Name:</span>     John Smith</p>
                    <p><span>Bank:</span>         KBZ Bank</p>
                </div>
                
            </div>
        </div>
    </body>
</html>