<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Bayar Pesanan</title>
    <link rel="stylesheet" href="{{ asset('css/order_detail.css') }}">
    <link rel="stylesheet" href="{{ asset('css/order.css') }}">
    <script src="https://app.sandbox.midtrans.com/snap/snap.js"
        data-client-key="{{ env('MIDTRANS_CLIENT_KEY') }}"></script>
</head>

<body>
    <div class="container">
        <div class="detail-card">
            <h3>Item Laundry</h3>
            <div class="items-list">
                <div class="item-row header">
                    {{-- <div>Item</div> --}}
                    <div>Layanan</div>
                    <div>Jumlah</div>
                    <div>Subtotal</div>
                </div>

                <div class="item-row">
                    <div>{{ $transaction->service->name }}</div>
                    <div>{{ $transaction->quantity ?? '-' }}</div>
                    <div>Rp {{ number_format($transaction->amount, 0, ',', '.') }}</div>
                </div>
            </div>
            <div class="service-notes">
                <p>Catatan: {{ $transaction->notes }}</p>
            </div>
            <button id="pay-button" class="btn" style="width: 100%; margin-top: 10px; padding: 10px;">Bayar
                Sekarang</button>
        </div>
    </div>
    <script>
        var payButton = document.getElementById('pay-button');
        payButton.addEventListener('click', function () {
            window.snap.pay('{{ $snapToken }}', {
                onSuccess: function (result) {
                    alert("Pembayaran berhasil!");
                    window.location.href = "{{ route('order') }}";
                },
                onPending: function (result) {
                    alert("Menunggu pembayaran...");
                    window.location.href = "{{ route('order') }}";
                },
                onError: function (result) {
                    alert("Pembayaran gagal!");
                },
                onClose: function () {
                    alert('Anda menutup popup tanpa menyelesaikan pembayaran');
                }
            });
        });
    </script>
</body>

</html>