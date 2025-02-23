<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
         /* Reset */
         * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #FFDEE9, #B5FFFC);
            display: flex;
            flex-direction: column;
            min-height: 100vh;

        }

        /* Navbar */
        .navbar {
            background-color: #b0a1e0;
            padding: 15px 20px;
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar h1 {
            font-size: 1.8rem;
        }

        .navbar a {
            color: white;
            text-decoration: none;
            margin-left: 20px;
            font-weight: 600;
        }

        .navbar a:hover {
            text-decoration: underline;
        }

        /* Main Content */
        .container {
            flex: 1;
            padding: 40px 20px;
            max-width: 1200px;
            margin: 0 auto;
        }

        h2 {
            text-align: center;
            margin-bottom: 30px;
            color: #333;
        }

        /* Product Cards */
        .products {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
            justify-content: center;
        }

        .product-card {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 15px;
            text-align: center;
            width: 200px;
            cursor: pointer;
            transition: transform 0.2s;
        }

        .product-card img {
            width: 100%;
            height: 150px;
            object-fit: cover;
            border-radius: 8px;
        }

        .product-card h3 {
            font-size: 1.2rem;
            margin: 10px 0;
        }

        .product-card p {
            color: #4CAF50;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .product-card:hover {
            transform: scale(1.05);
        }

        /* Modal */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.5);
            justify-content: center;
            align-items: center;
        }

        .modal-content {
            background: white;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            width: 300px;
        }

        .modal-content h3 {
            margin-bottom: 20px;
        }

        .category-btn {
            display: block;
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            background-color: #b0a1e0;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1rem;
        }

        .category-btn:hover {
            background-color: #9a87d0;
        }

        .close-btn {
            background: #e74c3c;
            color: white;
            border: none;
            padding: 10px 20px;
            margin-top: 15px;
            border-radius: 5px;
            cursor: pointer;
        }

        /* Dropdown */
.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #fff;
    min-width: 160px;
    box-shadow: 0px 8px 16px rgba(0,0,0,0.2);
    z-index: 1;
    border-radius: 5px;
    overflow: hidden;
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

/* Show dropdown on hover */
.dropdown:hover .dropdown-content {
    display: block;
}

.produk {
    cursor: pointer;
    color: white;
    font-weight: 600;
    text-decoration: none;
}

.product-image {
    width: 100%;
    height: 150px;
    object-fit: cover;
    border-radius: 8px;
}

/* Footer */
.footer {
    background-color: #b0a1e0;
    color: white;
    text-align: center;
    padding: 15px;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <div class="navbar">
        <h1>POS</h1>
        <div>
            <a href="/">Home</a>
            <!-- Dropdown Produk -->
        <div class="dropdown">
            <a class="produk">Produk</a>
            <div class="dropdown-content">
                <a href="category/food-beverage">Food & Beverage</a>
                <a href="category/beauty-health">Beauty & Health</a>
                <a href="category/baby-kid">Baby & Kid</a>
                <a href="category/home-care">Home Care</a>
            </div>
        </div>
            <a href="http://localhost/PWL_2024/POS/public/sales">Transaksi</a>
            <a href="http://localhost/PWL_2024/POS/public/user/26/name/Syaqira">Profil</a>
        </div>
    </div>

    <!-- Main Content -->
    <div class="container">
        <h2>Produk Unggulan</h2>
        <div class="products">
            <!-- Product 1 -->
            <div class="product-card">
                <img src="{{ asset('image/teh.jpg') }}" alt="Teh" class="product-image">                
                <h4>Teh Botol Sosro</h4>
                <p>Rp 5.000</p>
                <button class="btn">+ Keranjang</button>
                <button class="btn">Beli</button>
            </div>

            <!-- Product 2 -->
            <div class="product-card">
                <img src="{{ asset('image/shampo2.jpg') }}" alt="Teh" class="product-image">
                <h4>Kerastase Bain Purete Symbiose 500ml Anti Dandruff Shampoo</h4>
                <p>Rp 200.000</p>
                <button class="btn">+ Keranjang</button>
                <button class="btn">Beli</button>
            </div>

            <!-- Product 3 -->
            <div class="product-card">
                <img src="{{ asset('image/pop_mie.jpg') }}" alt="Teh" class="product-image">
                <h4>Pop Mie Ayam</h4>
                <p>Rp 7.000</p>
                <button class="btn">+ Keranjang</button>
                <button class="btn">Beli</button>
            </div>

            <!-- Product 4 -->
            <div class="product-card">
                <img src="{{ asset('image/susu.jpg') }}" alt="Teh" class="product-image">
                <h4>Susu Ultra Milk</h4>
                <p>Rp 6.000</p>
                <button class="btn">+ Keranjang</button>
                <button class="btn">Beli</button>
            </div>

            <!-- Product 5 -->
            <div class="product-card">
                <img src="{{ asset('image/popok.jpg') }}" alt="Teh" class="product-image">
                <h4>Diapers MamyPoko</h4>
                <p>Rp 50.000</p>
                <button class="btn">+ Keranjang</button>
                <button class="btn">Beli</button>
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
       const categoryButtons = document.querySelectorAll('.category-btn');
       categoryButtons.forEach(btn => {
        btn.addEventListener('click', () => {
        const category = btn.innerText.toLowerCase().replace( /food-beverage & | /g, '-'); // Format URL
        window.location.href = `/${category}`; // Redirect ke halaman kategori
    });
});
       const categoryButtons = document.querySelectorAll('.category-btn');
       categoryButtons.forEach(btn => {
        btn.addEventListener('click', () => {
        const category = btn.innerText.toLowerCase().replace( /beauty-health & | /g, '-'); // Format URL
        window.location.href = `/${category}`; // Redirect ke halaman kategori
    });
});
       const categoryButtons = document.querySelectorAll('.category-btn');
       categoryButtons.forEach(btn => {
        btn.addEventListener('click', () => {
        const category = btn.innerText.toLowerCase().replace( /home-care & | /g, '-'); // Format URL
        window.location.href = `/${category}`; // Redirect ke halaman kategori
    });
});
       const categoryButtons = document.querySelectorAll('.category-btn');
       categoryButtons.forEach(btn => {
        btn.addEventListener('click', () => {
        const category = btn.innerText.toLowerCase().replace( /baby-kid & | /g, '-'); // Format URL
        window.location.href = `/${category}`; // Redirect ke halaman kategori
    });
});
    </script>
</body>
</html>
