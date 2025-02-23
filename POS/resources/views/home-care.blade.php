<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Beauty & Health</title>
    <style>
        /* Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        /* Body Style */
        body {
            background: linear-gradient(135deg, #FFDEE9, #B5FFFC);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            color: #333;
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

        /* Dropdown */
        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px rgba(0,0,0,0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: #333;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {
            background-color: #f1f1f1;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        /* Header Container */
        .header {
            width: 100%;
            display: flex;
            justify-content: flex-start;
            padding: 20px;
        }

        /* Header Text */
        h1 {
            font-size: 2rem;
            color: white;
            text-shadow: 2px 2px 5px rgba(0,0,0,0.1);
        }

        /* Button Style */
        .btn {
            padding: 12px 24px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 30px;
            font-size: 1rem;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            margin: 20px auto;
            display: block;
        }

        .btn:hover {
            background-color: #45a049;
            transform: scale(1.1);
        }

        /* Product Grid */
        .product-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            width: 80%;
            margin: 30px auto;
        }

        /* Product Card */
        .product-card {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            overflow: hidden;
            transition: transform 0.3s ease;
        }

        .product-card:hover {
            transform: translateY(-10px);
        }

        .product-image {
            width: 100%;
            height: 150px;
            object-fit: cover;
        }

        .product-info {
            padding: 15px;
            text-align: center;
        }

        .product-info h3 {
            font-size: 1.2rem;
            color: #333;
            margin-bottom: 10px;
        }

        .product-info p {
            font-size: 0.9rem;
            color: #666;
        }

        /* Footer */
        .footer {
            background-color: #b0a1e0;
            color: white;
            text-align: center;
            padding: 15px;
            margin-top: auto;
            width: 100%;
            border-top: 3px solid #4e3b94;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <div class="navbar">
        <h1>Home Care</h1>
        <div>
            <div>
                <a href="http://localhost/PWL_2024/POS/public/home">Home</a>
                <a href="http://localhost/PWL_2024/POS/public/sales">Transaksi</a>
                <a href="http://localhost/PWL_2024/POS/public/user/26/name/Syaqira">Profil</a>
            </div>
        </div>
    </div>

    <!-- Product Grid -->
    <div class="product-grid">
        <!-- Product 1 -->
        <div class="product-card">
            <img src="{{ asset('image/sabun.jpg') }}" alt="Produk 1" class="product-image">
            <div class="product-info">
                <h4>Soklin Deterjen Cair Japanese Sakura Strawberry Pouch 700 ml/h4>
                <p>Rp12.500</p>
            </div>
        </div>

        <!-- Product 2 -->
        <div class="product-card">
            <img src="{{ asset('image/handuk.jpg') }}" alt="Produk 2" class="product-image">
            <div class="product-info">
                <h4>King Rabbit Luxury Bamboo Towel<h4>
                <p>Rp90.000</p>
            </div>
        </div>

        <!-- Product 3 -->
        <div class="product-card">
            <img src="{{ asset('image/diffuser.jpg') }}" alt="Produk 2" class="product-image">
            <div class="product-info">
                <h4>Poupeepou - Reed Diffuser Aromaterapi Aesthetic dan Refill Diffuser </h4>
                <p>Rp30.000</p>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="footer">
        <p>&copy; 2025 - Syaqira Nazaretna Point of Sales. All Rights Reserved.</p>
    </div>

</body>
</html>
