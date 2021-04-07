<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Age Discount</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
    <div class="container w-50 mx-auto mt-5">
        <form action="#" method="post">
            <div class="row g-3 mb-4">
                <div class="col-md-12">
                    <h1 class="display-4 text-center">How many customers?</h1>
                </div>
            </div>
            <div class="row g-3 mb-4">
                <div class="col-md-6 mx-auto">
                    <input type="number" name="number_of_customers" class="form-control form-control-lg border border-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 mx-auto">
                    <input type="submit" value="Submit" name="submit" class="form-control btn btn-primary text-uppercase">
                </div>
            </div>
        </form>
        <?php
        
            if(isset($_POST['submit'])){
                $number_of_customers = $_POST['number_of_customers'];
        ?>

            <hr>
            <div class="container mx-auto mt-5">
                <h1 class="display-4 mb-4 text-center">Ages of the customers:</h1>
                <form action="#" method="post">
                    <?php
                        for($i = 1; $i <= $number_of_customers; $i++){
                    ?>
                        <div class="row g-3 mb-3">
                            <div class="col-md-4">
                                <h2 class="display-6 text-end">Person <?php echo $i;?></h2>
                            </div>
                            <div class="col-md-6">
                                <input type="number" name="age[]" class="form-control form-control-lg text-center border border-success" placeholder="Enter Age Here:">
                            </div>
                        </div>
                    <?php
                        }
                    ?>
                        <div class="row">
                            <div class="col-md-12">
                                <input type="submit" value="Calculate" name="calculate" class="form-control btn btn-success">
                            </div>
                        </div>
                </form>
            </div>
        <?php
            }elseif(isset($_POST['calculate'])){
                $age = $_POST['age'];

                
            }
        
        ?>
    </div>
</body>
</html>