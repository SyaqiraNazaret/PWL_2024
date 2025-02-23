<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Penjualan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #FFDEE9, #B5FFFC);
            margin: 0px;
            padding: 0;
            color: #fff;
            display: flex;
            flex-direction: column;
            align-items: center;     /* Tengah Horizontal */

        }

        header {
            text-align: center;
            padding: 20px;
            background: #b0a1e0;
        }

        h1 {
            margin: 0;
        }

        .container {
            display: center;
            justify-content: space-around;
            padding: 30px;
        }

        .products, .cart {
            background: rgba(0, 0, 0, 0.3);
            padding: 20px;
            border-radius: 10px;
            width: 45%;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        h2 {
            text-align: center;
        }

        .product, .cart-item {
            display: flex;
            justify-content: space-between;
            margin: 10px 0;
            padding: 10px;
            background: #b0a1e0;
            border-radius: 5px;
        }

        button {
            padding: 8px 16px;
            border: none;
            border-radius: 5px;
            background-color: #28a745;
            color: white;
            cursor: pointer;
        }

        button:hover {
            background-color: #218838;
        }

        .checkout {
            text-align: center;
            margin-top: 20px;
        }

        .checkout button {
            background-color: #ffc107;
        }

        .checkout button:hover {
            background-color: #e0a800;
        }
         /* Navbar */
         .navbar {
            background-color: #b0a1e0;
            padding: 15px 20px;
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
        }

        .navbar h1 {
            font-size: 1.8rem;
        }

        .navbar a {
            color: white;
            text-decoration: none;
            margin-left: 20px;
            font-weight: 600;
            position: relative;
        }

        .navbar a:hover {
            text-decoration: underline;
        }

    </style>
</head>
<body>
    <!-- Navbar -->
    <div class="navbar">
        <h1>Transaksi</h1>
        <div>
            <div>
                <a href="http://localhost/PWL_2024/POS/public/home">Home</a>
                <a href="http://localhost/PWL_2024/POS/public/sales">Transaksi</a>
                <a href="http://localhost/PWL_2024/POS/public/user/26/name/Syaqira">Profil</a>
            </div>
        </div>
    </div>
        <!-- Keranjang -->
        <div class="cart">
            <h2>Keranjang</h2>
            <div class="cart-item">
                <span>Produk A x1</span>
                <span>Rp10.000</span>
            </div>
            <div class="cart-item">
                <span>Produk B x2</span>
                <span>Rp20.000</span>
            </div>

            <div class="checkout">
                <h3>Total: Rp30.000</h3>
                <button>Proses Pembayaran</button>
                <button><a href="http://localhost/PWL_2024/POS/public/home" class="btn"></a>Kembali</button>
            </div>
        </div>
    </div>

</body>
</html>
