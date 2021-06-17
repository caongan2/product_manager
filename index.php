<?php
include "vendor/autoload.php";

use Services\ProductManager;
use Models\Product;

$manager = new ProductManager();
//$manager->addProduct(new Product("mac", 23));
//$manager->addProduct(new Product("dell", 23));
//$manager->addProduct(new Product("hp", 23));
//$manager->addProduct(new Product("mac", 23));
//$manager->addProduct(new Product("mac", 23));
//$manager->addProduct(new Product("mac", 23));
//$manager->addProduct(new Product("mac", 23));
//$manager->addProduct(new Product("mac", 23));
//$manager->addProduct(new Product("mac", 23));
//$manager->addProduct(new Product("mac", 23));
//$manager->addProduct(new Product("mac", 23));
//$manager->addProduct(new Product("mac", 23));
$products = $manager->getProducts();


$name = $_POST['name'];
(int)$price = $_POST['price'];



$products = [];
$item = [
    'name' => $name,
    'price' => $price
];
foreach ($products as $product) {
    $product = new Product($name, $price);
    array_push($products, $product);
}


$product = new Product($name, $price);

$manager->addProduct($product);
$manager->addProduct($product);
$manager->addProduct($product);
$manager->addProduct($product);
$manager->addProduct($product);
$manager->addProduct($product);
$products = $manager->getProducts();

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <table>
        <tr>
            <td>name:</td>
            <td><input type="text" name="name"></td>
        </tr>
        <tr>
            <td>price:</td>
            <td><input type="number" name="price"></td>
        </tr>
    </table>
    <input type="submit" value="Submit">
</form>

<form action="">
    <table>
        <thead>
        <th>STT</th>
        <th>Name</th>
        <th>Price</th>
        <th>Image</th>
        </thead>
        <tbody>
        <?php foreach ($products as $key => $product): ?>
            <tr>
                <td><?php echo $key + 1 ?></td>
                <td><?php echo $product->name ?></td>
                <td><?php echo $product->price ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</form>
</body>
</html>
