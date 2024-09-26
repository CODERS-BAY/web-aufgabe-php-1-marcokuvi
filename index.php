<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Exercise</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<style>
    .numberField {
        width: 50px;
    }

    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
    -webkit-appearance: none;
    margin: 0;
}

    input[type=number] {
    -moz-appearance: textfield;
}

</style>

<body>

    <header class=jumbotron> 
        <h1>Php Exercise 1</h1>
    </header>
    
    <div class="container">
    <?php

        $article1 = 22.50;
        $article2 = 12.30;
        $article3 = 5.20;
        $result = $article1 + $article2 + $article3;
        $resultAddedTax = $result * 0.8;

        echo "<p> First article : $article1 € </p>";
        echo "<p> Third article : $article3 € </p>";
        echo "<p> Second article : $article2 € </p>";

        echo "<p> Netto price: $result € </p>";
        echo "<p> Value added tax: 20% </p>";
        echo "<p> Brutto price: $resultAddedTax € </p>"
    ?>
    </div>

    <div class="container">
        <form action="index.php">
            <p>Your number : <input class="numberField" type="number" name="number" placeholder="0"></p>
        </form>
    <?php
        $number = $_GET["number"];
        $squareNumber = $number * $number;
        echo "<p> The Square number is $squareNumber";
    ?>
    </div>

    <div class="container">
    <form action="index.php">
            <p>Liter : <input class="numberField" type="number" name="liter" placeholder="0"></p>
            <h2>Benzin</h2>
            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                <label class="btn btn-secondary">
                    <input type="radio" name="benzin" value="normal" id="normal" autocomplete="off"> Normal
                </label>
                <label class="btn btn-secondary">
                    <input type="radio" name="benzin" value="super" id="super" autocomplete="off"> Super
                </label>
                <label class="btn btn-secondary">
                    <input type="radio" name="benzin" value="diesel" id="super" autocomplete="off"> Diesel
                </label>
                </div>
            <button class="btn btn-light" type="submit">Submit</button>
        </form>
        <?php
            $liter = $_GET["liter"];
            $benzin = $_GET["benzin"];

            if ($liter < 100) {
                if ($benzin == "normal") {
                    $literPrice = $liter * 1.35;
                    echo "Your price: $literPrice";
                } elseif ($benzin == "super") {
                    $literPrice = $liter * 1.40;
                    echo "Your price: $literPrice";
                } elseif ($benzin == "diesel") {
                    $literPrice = $liter * 1.10;
                    echo "Your price: $literPrice";
                }
            } else {
                if ($benzin == "normal") {
                    $literPrice = $liter * 1.35;
                    $discountPrice = $literPrice * 0.98;
                    echo "Your price with discount: $discountPrice";
                } elseif ($benzin == "super") {
                    $literPrice = $liter * 1.40;
                    $discountPrice = $literPrice * 0.98;
                    echo "Your price with discount: $discountPrice";
                } elseif ($benzin == "diesel") {
                    $literPrice = $liter * 1.10;
                    $discountPrice = $literPrice * 0.98;
                    echo "Your price with discount: $discountPrice";
                }
            }
            
        ?>
    </div>







    



    
</body>
</html>