@extends('front.master.index')
@section('content')
@include('front.page.multi-page-form')
@endsection


@section('customscript')
@include('front.page.script.single-tour-details')
@endsection





@section('paymentscript')
<script>

function pricecalculation() {
var str = $('#tour_price :selected').val();
var price = str.slice(1, str.indexOf("USD"));
console.log('Amount'+price);

$('#total_amount').val(price);
}
pricecalculation();

$('#tour_price').click(function() {
    pricecalculation();
});
</script>

@endsection
