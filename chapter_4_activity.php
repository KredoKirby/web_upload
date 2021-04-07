<?php
    include "chapter_4_activity_functions.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SALES</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
    <h1 class="display-3 fw-bold text-center mt-3 mb-5">SALES</h1>

    <div class="container w-50 mt-5 mx-auto">
        <form action="#" method="post">
            <div class="row g-3 mb-3">
                <div class="col-md-4">
                    <h2 class="fw-bold mt-2">Shirts</h2>
                </div>
                <div class="form-floating col-md-4">
                    <input type="number" name="shirts_price" id="shirts_price" class="border border-success border-2 form-control text-center" placeholder="Shirt Price" required>
                    <label for="shirts_price">Price</label>
                </div>
                <div class="form-floating col-md-4">
                    <input type="number" name="shirts_quantity" id="shirts_quantity" class="border border-success border-2 form-control text-center" placeholder="Shirt Quantity" required>
                    <label for="shirts_quantity">Quantity</label>
                </div>
            </div>

            <div class="row g-3 mb-3">
                <div class="col-md-4">
                    <h2 class="fw-bold mt-2">Pants</h2>
                </div>
                <div class="form-floating col-md-4">
                    <input type="number" name="pants_price" id="pants_price" class="border border-danger border-2 form-control text-center" placeholder="Pants Price" required>
                    <label for="pants_price">Price</label>
                </div>
                <div class="form-floating col-md-4">
                    <input type="number" name="pants_quantity" id="pants_quantity" class="border border-danger border-2 form-control text-center" placeholder="Pants Quantity" required>
                    <label for="pants_quantity">Quantity</label>
                </div>
            </div>

            <div class="row g-3 mb-5">
                <div class="col-md-4">
                    <h2 class="fw-bold mt-2">Shoes</h2>
                </div>
                <div class="form-floating col-md-4">
                    <input type="number" name="shoes_price" id="shoes_price" class="border border-warning border-2 form-control text-center" placeholder="Shoes Price" required>
                    <label for="shoes_price">Price</label>
                </div>
                <div class="form-floating col-md-4">
                    <input type="number" name="shoes_quantity" id="shoes_quantity" class="border border-warning border-2 form-control text-center" placeholder="Shoes Quantity" required>
                    <label for="shoes_quantity">Quantity</label>
                </div>
            </div>

            <div class="row g-3">
                <div class="col">
                    <input type="submit" value="Submit" name="submit" class="btn btn-lg btn-primary form-control">
                </div>
            </div>
        </form>

        <?php
        
            if(isset($_POST['submit'])){
                $shirts_price = $_POST['shirts_price'];
                $shirts_quantity = $_POST['shirts_quantity'];
                $pants_price = $_POST['pants_price'];
                $pants_quantity = $_POST['pants_quantity'];
                $shoes_price = $_POST['shoes_price'];
                $shoes_quantity = $_POST['shoes_quantity'];

                // $shirts_price, $shirts_quantity, $pants_price, $pants_quantity, $shoes_price, $shoes_quantity;
                $shirts_total = computeShirtsTotal($shirts_price, $shirts_quantity);
                $pants_total = computePantsTotal($pants_price, $pants_quantity);
                $shoes_total = computeShoesTotal($shoes_price, $shoes_quantity);

                $total_price = $shirts_total + $pants_total + $shoes_total;

                displayTotalTable($shirts_price, $shirts_quantity, $shirts_total, $pants_price, $pants_quantity,$pants_total, $shoes_price, $shoes_quantity, $shoes_total, $total_price);
            }
        
        ?>

    </div>
</body>
</html>