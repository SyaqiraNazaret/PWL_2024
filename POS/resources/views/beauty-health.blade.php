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
            box-shadow: 0 10px 8px rgba(0,0,0,0.1);
            overflow: hidden;
            transition: transform 0.3s ease;
          
        }
        
        .product-card img {
            width: 100%;
            height: 150px;
            object-fit: cover;
            border-radius: 8px;
        }

        .product-card:hover {
            transform: translateY(10px);
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
        <h1>Beauty and Health<h1>
        <div>
            <a href="http://localhost/PWL_2024/POS/public/home">Home</a>
            <a href="http://localhost/PWL_2024/POS/public/sales">Transaksi</a>
            <a href="http://localhost/PWL_2024/POS/public/user/26/name/Syaqira">Profil</a>
        </div>
    </div>

    <!-- Product Grid -->
    <div class="product-grid">
        <!-- Product 1 -->
        <div class="product-card">
            <img src="{{ asset('image/lipstik.jpg') }}" alt="Product 1" class="product-image">
            <div class="product-info">
                <h4>WARDAH - Glasting Liquid Lip - Hi-Pigmented Glass Color, Ringan, Tidak Lengket, Transferproof</h4>
                <p>Rp30.000</p>
            </div>
        </div>

        <!-- Product 2 -->
        <div class="product-card">
            <img src="{{ asset('image/skincare.jpg') }}" alt="Product 1" class="product-image">
            <div class="product-info">
                <h4>SKINTIFIC - CALM & REPAIR 4PCS ROUTINE FOR DRY/IRRITATED SKIN</h4>
                <p>Rp215.000</p>
            </div>
        </div>

        <!-- Product 3 -->
        <div class="product-card">
            <img src="{{ asset('image/bedak.jpg') }}" alt="Product 1" class="product-image">
            <div class="product-info">
                <h3>Make Over SILKY SMOOTH TRANSLUCENT POWDER</h3>
                <p>Rp250.000</p>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="footer">
        <p>&copy; 2025 - Syaqira Nazaretna Point of Sales. All Rights Reserved.</p>
    </div>

    <!-- JavaScript -->
    <script>
        const productCards = document.querySelectorAll('.produk');
        const modal = document.getElementById('categoryModal');
        const closeModal = document.getElementById('closeModal');

        // Open Modal when Product Clicked
        productCards.forEach(card => {
            card.addEventListener('click', () => {
                const productName = card.getAttribute('data-product');
                modal.querySelector('h3').innerText = `Pilih Kategori untuk ${productName}`;
                modal.style.display = 'flex';
            });
        });

        // Close Modal
        closeModal.addEventListener('click', () => {
            modal.style.display = 'none';
        });

        // Close Modal when clicking outside
        window.addEventListener('click', (e) => {
            if (e.target == modal) {
                modal.style.display = 'none';
            }
        });

       // Handle Category Selection dan Redirect ke Halaman
       const categoryButtons = document.querySelectorAll('.-btn');
       categoryButtons.forEach(btn => {
        btn.addEventListener('click', () => {
        const  = btn.innerText.toLowerCase().replace( /food-beverage & | /g, '-'); // Format URL
        window.location.href = `/${}`; // Redirect ke halaman kategori
    });
});
       const categoryButtons = document.querySelectorAll('.-btn');
       categoryButtons.forEach(btn => {
        btn.addEventListener('click', () => {
        const  = btn.innerText.toLowerCase().replace( /beauty-health & | /g, '-'); // Format URL
        window.location.href = `/${}`; // Redirect ke halaman kategori
    });
});
       const categoryButtons = document.querySelectorAll('.-btn');
       categoryButtons.forEach(btn => {
        btn.addEventListener('click', () => {
        const  = btn.innerText.toLowerCase().replace( /home-care & | /g, '-'); // Format URL
        window.location.href = `/${}`; // Redirect ke halaman kategori
    });
});
       const categoryButtons = document.querySelectorAll('.-btn');
       categoryButtons.forEach(btn => {
        btn.addEventListener('click', () => {
        const  = btn.innerText.toLowerCase().replace( /baby-kid & | /g, '-'); // Format URL
        window.location.href = `/${}`; // Redirect ke halaman kategori
    });
});
    </script>
</body>
</html>
