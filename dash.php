<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Card</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" integrity="sha256-46r060N2LrChLLb5zowXQ72/iKKNiw/lAmygmHExk/o=" crossorigin="anonymous" />
    <?php include 'style1.php';?>
</head>
<body>
    <div class="background"></div>
    <div class="product-card">
        <div class="left-column">
            <img src="https://i.postimg.cc/Zq5q5Tng/darkblue.png" alt="backpack">
        </div>
        <div class="right-column">
            <div class="product-name">
                <h1>NIKE CLASSIC BACKPACK</h1>
                <p>MEN'S BACKPACK</p>
            </div>
            <div class="price">Rs. 850/-</div>
            <div class="description">
                <p>
                    The Nike Men's Backpack from Nike will carry your gear in style. This attractive backpack is designed with a man's proportions in mind.
                </p>
            </div>
            <div class="colors">
                <span class="darkblue"></span>
                <div class="quantity">
                    QTY <input type="number" min="1" max="2" step="1" value="1">
                </div>
            </div>
            <button class="btn" type="submit">
                <i class="fas fa-shopping-cart"></i> ADD TO CART
            </button>
        </div>
    </div>
</body>