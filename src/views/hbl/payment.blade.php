Processing to payment, do not close or press back, if it takes longer you can click pay button
<form hidden method="post" action="{{ route('bickyraj.hbl.paymentrequest') }}" enctype="multipart/form-data" name="authForm">
    <input type="hidden" name="formID" value="{{ $payment['formID'] }}">
    <input type="hidden" id="api_key" name="api_key" class="form-textbox validate[required]" size="50" value="{{ $payment['api_key'] }}">
    <input type="hidden" name="input_currency" value="{{ $payment['input_currency'] }}">
    <input type="hidden" id="merchant_id" name="merchant_id" class="form-textbox validate[required]" size="50" value="{{ $payment['merchant_id'] }}">
    <input type="hidden" id="input_amount" name="input_amount" class="form-textbox validate[required]" size="50" value="{{ $payment['input_amount'] }}">
    <input type="hidden" name="input_3d" value="{{ $payment['input_3d'] }}">
    <input type="hidden" id="success_url" name="success_url" class="form-textbox" size="50" value="{{ route('front.payment.callback', ['invoceId' => $payment['invoiceNo']]) }}">
    {{-- <input type="hidden" id="success_url" name="success_url" class="form-textbox" size="50" value="http://localhost/hbldemo/?payment=success"> --}}
    <input type="hidden" id="fail_url" name="fail_url" class="form-textbox" size="50" value="{{ route('bickyraj.hbl.payment.failed') }}">
    <input type="hidden" id="cancel_url" name="cancel_url" class="form-textbox" size="50" value="{{ route('bickyraj.hbl.payment.canceled') }}">
    <input type="hidden" id="backend_url" name="backend_url" class="form-textbox" size="50" value="http://localhost/hbldemo/?payment=backend">
    <input type="hidden" id="simple_spc" name="simple_spc" value="{{ $payment['simple_spc'] }}">
<input type="submit" value="pay">
</form>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
<script>
    document.authForm.submit();
</script>
