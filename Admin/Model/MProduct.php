<?php


/**
 * get all product list
 * @return array product list
 */
function getProductList() {
    include_once "DBConnection.php";
    $query = "SELECT * FROM m_products";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    return $row;
}

/**
 * add product
 * @param array $product product data
 * @return void
 */
function addProduct($product) {
    include_once "DBConnection.php";
    $query = "INSERT INTO m_products ";
    $stmt = $pdo->prepare($query);
    $stmt->bindValue(":name", $product["name"]);
    $stmt->bindValue(":price", $product["price"]);
    $stmt->execute();
}

?>
