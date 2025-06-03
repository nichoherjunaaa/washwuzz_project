<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Bayar Pesanan</title>
    <link rel="stylesheet" href="{{ asset('css/order_detail.css') }}">
    <link rel="stylesheet" href="{{ asset('css/order.css') }}">
    <script src="https://app.sandbox.midtrans.com/snap/snap.js"
        data-client-key="{{ env('MIDTRANS_CLIENT_KEY') }}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
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
                    <div>Rp {{ number_format($transaction->quantity * $transaction->service->price, 0, ',', '.') }}</div>
                </div>
            </div>
            <div class="service-notes">
                <p>Catatan: {{ $transaction->notes }}</p>
            </div>
            <button id="pay-button" class="btn" style="width: 100%; margin-top: 10px; padding: 10px;">Bayar
                Sekarang</button>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        var payButton = document.getElementById('pay-button');
        payButton.addEventListener('click', function () {
            window.snap.pay('{{ $snapToken }}', {
                onSuccess: function (result) {
                    Swal.fire({
                        title: "Sukses!",
                        text: "Pembayaran berhasil",
                        icon: "success"
                    });
                    window.location.href = "{{ route('order') }}";
                },
                onPending: function (result) {
                    Swal.fire({
                        icon: "warning",
                        title: "Oops...",
                        text: "Pembayaran sedang diproses",
                        footer: '<a href="#">Why do I have this issue?</a>'
                    });
                    window.location.href = "{{ route('order') }}";
                },
                onError: function (result) {
                    Swal.fire({
                        icon: "error",
                        title: "Oops...",
                        text: "Pembayaran gagal"
                    });
                },
                onClose: function () {
                    alert('Anda menutup popup tanpa menyelesaikan pembayaran');
                }
            });
        });
    </script>
</body>

</html>