<?php


/**
 * get all order list
 * @return array order list
 */
function getOrderList() {
    include_once "DBConnection.php";
    $query = "SELECT * FROM m_orders";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    return $row;
}

/**
 * add order
 * @param array $order order data
 * @return void
 */
function addOrder($order) {
    include_once "DBConnection.php";
    $query = "INSERT INTO m_orders ";
    $stmt = $pdo->prepare($query);
    $stmt->bindValue(":name", $order["name"]);
    $stmt->execute();
}

?>