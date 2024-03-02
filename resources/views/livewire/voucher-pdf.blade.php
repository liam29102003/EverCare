<div class="d-flex align-items-center">
    <button wire:click='back
    ' class="btn-btn-success" >Back</button>
    <div class=" card p-4 px-5 border-0 shadow-sm">
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
            <p class="mb-0">Billing to</p>
            <p>Evercare Company</p>
            <p  class="mb-0"><span>Contact:</span>123456789</p>
            <p class="mb-0"><span>Email:</span>evercare@email.com</p>
            <p><span>Address:</span>Hlaing Township, Yangon</p>
        </div>
        <table>
            <thead>
                <tr>
                    <td>No</td><td>Description</td><td>Qty</td><td>Total Price</td><td>Price</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($vouchers as $voucher)
                
                <tr><td>1</td><td class="1-col">{{$voucher->name}}</td><td>{{$voucher->quantity}}</td><td>{{$voucher->price}}MMK</td><td class="r-col">{{$voucher->amount}}MMK</td></tr>

                @endforeach
                {{-- <tr><td>2</td><td class="1-col">treatment</td><td>1</td><td>$50</td><td class="r-col">$250.00</td></tr>
                <tr><td>3</td><td class="1-col">medical supply</td><td>1</td><td>$50</td><td class="r-col">$250.00</td></tr>
                <tr><td>4</td><td class="1-col">x-ray</td><td>1</td><td>$50</td><td class="r-col">$250.00</td></tr>
                <tr><td>5</td><td class="1-col">services</td><td>1</td><td>$50</td><td class="r-col">$250.00</td></tr> --}}
            </tbody>
        </table>
        <div class="d-flex justify-content-between">
            <div></div>
            <div class="total-section text-end mt-2 ">
                <div class="sub ">
                    <p class="mb-0">Sub Total</p>
                    <p class="mb-0">{{$total}}MMK</p>
                </div>
                <div class="tax ">
                    <p class="mb-0">Tax</p>
                    <p class="mb-0">1000MMK</p>
                </div>
                <div class="total ">
                    <p>Grand Total:</p>
                    <p>{{$total}}MMK</p>
                </div>
            </div>
        </div>
       

        <div class="payment-terms">
            <div class="payment-detail">
                <p class="mb-0">Payment Info</p>
                <p class="mb-0"><span>Account#</span>     123456</p>
                <p class="mb-0"><span>A/c Name:</span>     John Smith</p>
                <p class="mb-0"><span>Bank:</span>         KBZ Bank</p>
            </div>
            
        </div>
    </div>
</div>
