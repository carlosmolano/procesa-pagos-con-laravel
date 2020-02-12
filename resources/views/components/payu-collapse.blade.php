<label class="mt-3">Card details:</label>

<div class="form-group form-row">
    <div class="col-4">
        <input class="form-control" name="card" type="text" placeholder="Card Number">
    </div>

    <div class="col-2">
        <input class="form-control" name="cvc" type="text" placeholder="CVC">
    </div>

    <div class="col-1">
        <input class="form-control" name="month" type="text" placeholder="MM">
    </div>

    <div class="col-1">
        <input class="form-control" name="year" type="text" placeholder="YY">
    </div>

    <div class="col-2">
        <select class="custom-select" name="network">
            <option selected>Select</option>
            <option value="visa">VISA</option>
            <option value="amex">AMEX</option>
            <option value="diners">DINERS</option>
            <option value="mastercard">MASTERCARD</option>
        </select>
    </div>
</div>



<div class="form-group form-row">
    <div class="col-5">
        <input class="form-control" name="name" type="text" placeholder="Your Name">
    </div>
    <div class="col-5">
        <input class="form-control" name="email" type="email" placeholder="email@example.com" >
    </div>
</div>


<div class="form-group form-row">
    <div class="col">
        <small class="form-text text-mute"  role="alert" >Your payment will be converted to {{ strtoupper(config('services.payu.base_currency')) }}</small>
    </div>
</div>
