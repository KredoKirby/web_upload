<?php
    include "chapter_5_activity_functions.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
    <h1 class="display-3 fw-bold text-center mt-5 mb-5">Calculator</h1>
    <div class="container w-50 mt-3">
        <form action="#" method="post">
            <div class="row g-3">
                <div class="form-floating col-md-6">
                    <input type="number" name="first_number" id="first_number" class="form-control form-control-lg text-center" placeholder="First Number" required>
                    <label for="first_number">First Number</label>
                </div>
                <div class="form-floating col-md-6">
                    <input type="number" name="second_number" id="second_number" class="form-control form-control-lg text-center" placeholder="Second Number" required>
                    <label for="second_number">Second Number</label>
                </div>
            </div>
            <div class="container mt-4 d-flex justify-content-evenly">
                <input type="radio" class="btn-check" name="operator" value="addition" id="addition" autocomplete="off">
                <label class="btn btn-primary fw-bold" for="addition">Addition</label>

                <input type="radio" class="btn-check" name="operator" value="subtraction" id="subtraction" autocomplete="off">
                <label class="btn btn-danger fw-bold" for="subtraction">Subtraction</label>

                <input type="radio" class="btn-check" name="operator" value="multiplication" id="multiplication" autocomplete="off">
                <label class="btn btn-warning text-white fw-bold" for="multiplication">Multiplication</label>

                <input type="radio" class="btn-check" name="operator" value="division" id="division" autocomplete="off">
                <label class="btn btn-info text-white fw-bold" for="division">Division</label>

                <input type="radio" class="btn-check" name="operator" value="modulo" id="modulo" autocomplete="off">
                <label class="btn btn-secondary text-white fw-bold" for="modulo">Modulo</label>

                <input type="radio" class="btn-check" name="operator" value="exponential" id="exponential" autocomplete="off">
                <label class="btn btn-dark fw-bold" for="exponential">Exponential</label>
            </div>
            <div class="row mt-4">
                <button class="btn btn-success btn-lg fw-bold" type="submit" name="calculate">Calculate</button>
            </div>
        </form>
            <?php
                if(isset($_POST['calculate'])){
                    $first_number = $_POST['first_number'];
                    $second_number = $_POST['second_number'];
                    $operator = $_POST['operator'];
            ?>
        <h1 class="display-4 text-center mt-5">Result:</h1>
        <h1 class="display-1 text-center fw-bold">
            <?php
                    echo calculate($first_number, $second_number, $operator);
                }
            ?>
        </h1>
    </div>
</body>
</html>