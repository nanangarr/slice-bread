<!-- resources/views/payment.blade.php -->
@extends('layouts.index')

@section('content')
    <div class="container">
        <h2>Payment Details</h2>

        <div class="row">
            <div class="col-md-6">
                <h4>Order Information</h4>
                <table class="table">
                    <tr>
                        <th>Order ID</th>
                        <td>{{ $pesanan->id }}</td>
                    </tr>
                    <tr>
                        <th>Customer Name</th>
                        <td>{{ $pesanan->nama }}</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>{{ $pesanan->email }}</td>
                    </tr>
                    <tr>
                        <th>Phone</th>
                        <td>{{ $pesanan->phone }}</td>
                    </tr>
                    <tr>
                        <th>Total Price</th>
                        <td>{{ number_format($pesanan->total_harga, 2, ',', '.') }}</td>
                    </tr>
                    <tr>
                        <th>Status</th>
                        <td>{{ $pesanan->status }}</td>
                    </tr>
                </table>
            </div>

            <div class="col-md-6">
                <h4>Payment</h4>
                <p>Click the button below to proceed with the payment via Midtrans:</p>

                <!-- Tombol untuk melakukan pembayaran -->
                <button id="pay-button" class="btn btn-primary">Pay Now</button>
            </div>
        </div>

        <br>

        @if(isset($snap_token))
            <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ env('MIDTRANS_CLIENT_KEY') }}"></script>
            <script type="text/javascript">
                var payButton = document.getElementById('pay-button');
                payButton.onclick = function (event) {
                    event.preventDefault();  // Mencegah form dikirimkan
                    // Pastikan token sudah terdefinisi dan valid
                    window.snap.pay('{{ $snap_token }}', {
                        onSuccess: function(result) {
                            alert('Payment success!');
                            // Anda bisa menambahkan aksi redirect atau lainnya di sini
                        },
                        onPending: function(result) {
                            alert('Waiting for payment confirmation');
                        },
                        onError: function(result) {
                            alert('Payment failed!');
                        }
                    });
                };
            </script>
        @endif
    </div>
@endsection
