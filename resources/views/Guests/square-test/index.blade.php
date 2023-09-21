@extends('guest_layout.master')
@section('content')

    <div style="height:500px;width:500px;">

        <form action="" id="">
            <button id="submit-payment">Click Here</button>
        </form>

    </div>
<script type="text/javascript" src="https://sandbox.web.squarecdn.com/v1/square.js"></script>
<script type="text/javascript">

    const paymentForm = new SqPaymentForm({
        applicationId: 'sandbox-sq0idb-L6XhC-UZ3Iz0yx_OA4KLqg',
    });
    console.log(paymentForm);
    // document.querySelector('#submit-payment').addEventListener('click', async () => {
    // const result = await paymentForm.requestCardNonce();

    // if (result.errors) {
    //     // Handle errors
    // } else {
    //     const nonce = result.nonce;
    //     console.log(nonce);
    //     // Send the nonce to your server
    //     // fetch('/process-payment', {
    //     // method: 'POST',
    //     // headers: {
    //     //     'Content-Type': 'application/json',
    //     // },
    //     // body: JSON.stringify({ nonce }),
    //     // });
    // }
    // });

</script>
@endsection