<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receipt</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .container {
            margin-top: 50px;
        }

        .total {
            font-weight: bold;
            text-align: right;
        }
        .footer p {
            font-weight: 700;
            margin-bottom: 5px;
            text-align: center
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title text-center">Toko Wahyu Illahi</h3>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID Pembelian</th>
                                    <th>Product Name</th>
                                    <th>Quantity</th>
                                    <th>Total Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $transaction->id_transaction }}</td>
                                    <td>{{ $transaction->name_product }}</td>
                                    <td>{{ $transaction->qty }}</td>
                                    <td>Rp{{ $transaction->total_price }},00</td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="total">
                            <p>Total: Rp{{ $transaction->total_price }},00</p>
                        </div>
                    </div>
                    <footer class="footer">
                        <div class="container">
                            <p>Terima kasih atas pembelian Anda di Toko Wahyu Illahi. Semoga Anda puas dengan layanan kami!</p>
                        </div>
                    </footer>
                </div>
            </div>
        </div>
    </div>
</body>

</html>