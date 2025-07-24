<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
         <link href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.min.css" rel="stylesheet">
<style>
    .container {
        max-width: 800px;
    }
</style>
</head>
<body>
    <?php
    $products = [   
        ['id'=>1001,'name'=>'apple','price'=>60,'quantity'=>50],
        ['id'=>1002,'name'=>'banana','price'=>20,'quantity'=>100],
        ['id'=>1003,'name'=>'orange','price'=>30,'quantity'=>80],
        ['id'=>1004,'name'=>'grape','price'=>50,'quantity'=>30],
        ['id'=>1005,'name'=>'mango','price'=>40,'quantity'=>60],
        ['id'=>1006,'name'=>'kiwi','price'=>70,'quantity'=>20],
        ['id'=>1007,'name'=>'peach','price'=>90,'quantity'=>10],
        ['id'=>1008,'name'=>'pear','price'=>80,'quantity'=>40],
        ['id'=>1009,'name'=>'plum','price'=>55,'quantity'=>25],
        ['id'=>1010,'name'=>'watermelon','price'=>45,'quantity' => 15],
        ['id'=>1011,'name'=>'pineapple','price'=>65,'quantity'=>35],
        ['id'=>1012,'name'=>'strawberry','price'=>75,'quantity'=>45],
        ['id'=>1013,'name'=>'blueberry','price'=>85,'quantity'=>55],
        ['id'=>1014,'name'=>'raspberry','price'=>105,'quantity'=>65],
        ['id'=>1015,'name'=>'blackberry','price'=>105,'quantity'=>75]
        
    ];
    
    ?>
    <div class="container mt-5">
        <h1>Product List</h1>

        <form action=""method="post" class="mb-3">
            <div>
                <input type="number" name="price" placeholder="Enter Price" class="form-control mb-2" id="">
                <button type="submit" class="btn btn-primary">Filter</button>
            </div>
            
        </form>
        <table id="productTable" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                </tr>
            </thead>
            <tbody>
                <?php
                //check if the form is submitted 
            if (isset($_POST['price']) && !empty($_POST['price'])) {
                $filterPrice = $_POST['price'];
                $filterProducts = array_filter($products, function($product) use ($filterPrice) {
                    return $product['price'] == $filterPrice;
                });
                // Re-index the array to start from 0
                $filterProducts = array_values($filterProducts);
            }else {
                $filterProducts = $products;
            }




 foreach ($filterProducts as $index => $product) {
     // echo "สินค้า: " . $product['name'] ." ราคา: ".$product['price']." บาท " .$product['quantity']." ชิ้น<br>";
     echo "<tr>";
     echo "<td>" . $index+1 . "</td>";
     echo "<td>" . $product['id'] . "</td>";
     echo "<td>" . $product['name'] . "</td>";
     echo "<td>" . $product['price'] . "</td>";
     echo "<td>" . $product['quantity'] . "</td>";
     echo "</tr>";
    }
    ?>            
                <!-- <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr> -->
            </tbody>
        </table>
    </div>
</body>
 <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>

<script src="https://cdn.datatables.net/2.0.8/js/dataTables.min.js"></script>
<script>
    let table = new DataTable('#productTable');
</script>
 

</html>