<?php

    function computeShirtsTotal($shirts_price, $shirts_quantity){
        return $shirts_price * $shirts_quantity;
    }

    function computePantsTotal($pants_price, $pants_quantity){
        return $pants_price * $pants_quantity;
    }

    function computeShoesTotal($shoes_price, $shoes_quantity){
        return $shoes_price * $shoes_quantity;
    }

    function displayTotalTable($shirts_price, $shirts_quantity, $shirts_total, $pants_price, $pants_quantity,$pants_total, $shoes_price, $shoes_quantity, $shoes_total, $total_price){
        echo "
            <div class= 'container mx-auto my-5'>
                <table class = 'table table-striped table-hover'>
                    <thead class = 'bg-dark text-white'>
                        <th>Item Name</th>
                        <th>Number of Items</th>
                        <th>Price</th>
                        <th>Total</th>
                    </thead>     
                    <tbody>
                        <tr>
                            <th>Shirts</th>
                            <td>$shirts_quantity</td>
                            <td>$shirts_price</td>
                            <td>$shirts_total</td>
                        </tr>
                        <tr>
                            <th>Pants</th>
                            <td>$pants_quantity</td>
                            <td>$pants_price</td>
                            <td>$pants_total</td>
                        </tr>
                        <tr>
                            <th>Shoes</th>
                            <td>$shoes_quantity</td>
                            <td>$shoes_price</td>
                            <td>$shoes_total</td>
                        </tr>
                    </tbody>           
                </table>
            </div>
            ";
    }

?>