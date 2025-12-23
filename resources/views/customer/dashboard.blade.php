<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Donlight | Home</title>

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', sans-serif;
        }

        body {
            background: #f7fbff;
        }

        /* NAVBAR */
        .navbar {
            background: #fff;
            padding: 18px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 10px;
            font-weight: bold;
            font-size: 20px;
        }

        .logo img {
            width: 40px;
        }

        .nav-icons {
            display: flex;
            gap: 20px;
            align-items: center;
            font-size: 22px;
        }

        .nav-home {
            background: linear-gradient(135deg, #1bd8c6, #18b3ff);
            color: white;
            padding: 8px 22px;
            border-radius: 30px;
            display: flex;
            gap: 6px;
            align-items: center;
        }

        /* HERO */
        .hero {
            margin: 40px;
            padding: 40px;
            border-radius: 30px;
            background: linear-gradient(135deg, #ff5fa2, #3cead9);
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: white;
        }

        .hero-left {
            max-width: 55%;
        }

        .badge {
            background: rgba(255,255,255,0.25);
            padding: 6px 14px;
            border-radius: 20px;
            font-size: 13px;
        }

        .hero h1 {
            font-size: 46px;
            margin: 15px 0;
            line-height: 1.2;
        }

        .hero p {
            margin-bottom: 25px;
            opacity: 0.9;
        }

        .btn-primary {
            background: white;
            color: #ff5fa2;
            border: none;
            padding: 12px 26px;
            border-radius: 30px;
            font-weight: bold;
            cursor: pointer;
        }

        .hero img {
            width: 300px;
            border-radius: 20px;
        }

        /* PROMO */
        .promo {
            margin: 0 40px;
            padding: 25px 30px;
            background: linear-gradient(135deg, #ff5fa2, #5be9ff);
            border-radius: 25px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: white;
        }

        .btn-secondary {
            background: white;
            color: #ff5fa2;
            padding: 10px 22px;
            border-radius: 30px;
            border: none;
            font-weight: bold;
            cursor: pointer;
        }

        /* CATEGORY */
        .category {
            margin: 50px 40px;
        }

        .category h2 {
            margin-bottom: 25px;
        }

        .category-list {
            display: flex;
            gap: 30px;
        }

        .category-card {
            width: 180px;
            height: 120px;
            border-radius: 22px;
            background: linear-gradient(135deg, #ff5fa2, #ff7eb3);
            color: white;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 10px;
            font-size: 18px;
            cursor: pointer;
        }

        .category-card i {
            font-size: 30px;
        }
    </style>
</head>

<body>

<!-- NAVBAR -->
<div class="navbar">
    <div class="logo">
        <img src="https://via.placeholder.com/40" alt="logo">
        Donlight
    </div>

    <div class="nav-icons">
        <div class="nav-home">
            <i class="bi bi-house"></i> Home
        </div>
        <i class="bi bi-receipt"></i>
        <i class="bi bi-cart"></i>
        <i class="bi bi-geo-alt"></i>
        <i class="bi bi-person"></i>
    </div>
</div>

<!-- HERO -->
<div class="hero">
    <div class="hero-left">
        <span class="badge">New Flavors Available!</span>
        <h1>Sweet Moments,<br>Delivered Fresh</h1>
        <p>
            Order your favorite donuts and drinks, delivered hot
            to your doorstep in 30 minutes or less!
        </p>
        <button class="btn-primary">ORDER NOW</button>
    </div>

    <img src="https://via.placeholder.com/300x260" alt="hero">
</div>

<!-- PROMO -->
<div class="promo">
    <div>
        <span class="badge">Limited Time Offer</span>
        <h2>Get 30% OFF on your first order!</h2>
    </div>
    <button class="btn-secondary">CLAIM OFFER</button>
</div>

<!-- CATEGORY -->
<div class="category">
    <h2>Shop by Category</h2>

    <div class="category-list">
        <div class="category-card">
            <i class="bi bi-circle"></i>
            Donuts
        </div>
        <div class="category-card">
            <i class="bi bi-cup-straw"></i>
            Drinks
        </div>
        <div class="category-card">
            <i class="bi bi-box"></i>
            Bundles
        </div>
    </div>
</div>

</body>
</html>
