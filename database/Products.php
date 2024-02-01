<?php

class Products
{
    public static $pdo;

    public string $name;
    public string $info;
    public string $price;
    public string $photo;

    public static function addProducts(string $name, string $info, string $price, string $photo)
    {
        $query = "INSERT INTO products(name, info, price, photo) VALUES (?,?,?,?)";
        $delivr = self::$pdo->prepare($query);
        $result = $delivr->execute([$name, $info, $price, $photo]);
        return $result;
    }

    public static function getAllProducts()
    {
        $stmt = self::$pdo->prepare("SELECT * FROM products");
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Products');
        $stmt->execute();
        $posts = $stmt->fetchAll();
        return $posts;
    }

}
