<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>shopping cart</title>

     <script src="interface.js" defer></script>
    <!-- الخطوط وأيقونات FontAwesome -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

    <style>
       * {
           margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Montserrat", sans-serif;
            user-select: none;
            scroll-behavior: smooth;
        }

        body {
            background-color: #f8f9fa;
            font-size: 20px;
        }

        .container {
            width: 60%;
            margin: 50px auto;
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 1px 1px 10px silver;
            text-align: center;
        }

        h1 {
            color: #27ae60;
            font-size: 28px;
        }

        .cart-items {
            list-style: none;
            padding: 0;
        }

        .cart-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px;
            border-bottom: 1px solid #ddd;
        }

        .cart-item img {
            width: 80px;
            height: 80px;
            border-radius: 5px;
        }

        .cart-item .info {
            flex-grow: 1;
            margin-right: 15px;
        }

        .cart-item h3 {
            font-size: 18px;
            margin: 5px 0;
        }

        .cart-item p {
            font-size: 16px;
            color: #f8562d;
        }

        .cart-item button {
            background: transparent;
            border: none;
            font-size: 20px;
            color: red;
            cursor: pointer;
        }

        .total {
            font-size: 22px;
            font-weight: bold;
            margin-top: 20px;
        }

        .checkout-btn {
            display: block;
            width: 80%;
            padding: 10px;
            background-color: #27ae60;
            color: white;
            border-radius: 5px;
            font-size: 18px;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s ease;
            margin: 20px auto;
            border: none;
        }

        .checkout-btn:hover {
            background-color: #219150;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>shopping cart</h1>
        <ul class="cart-items">
            <li class="cart-item">
                <img src="imag/book3.jpg">
                <div class="info">
                    <h3>name</h3>
                    <p>price <span class="price">50</span>$</p>
                </div>
                <button class="remove-btn"><i class="fa-solid fa-trash"></i></button>
            </li>
            <li class="cart-item">
                <img src="imag/book2.jpg">
                <div class="info">
                    <h3>name</h3>
                    <p>price <span class="price">40</span> $</p>
                </div>
                <button class="remove-btn"><i class="fa-solid fa-trash"></i></button>
            </li>
        </ul>

        <p class="total">total <span id="total-price">90</span> $</p>
        <button class="checkout-btn">buying</button>
    </div>

</body>
</html>
