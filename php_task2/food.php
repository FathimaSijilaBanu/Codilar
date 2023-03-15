<?php
$foodItems = array(
  array(
    "name" => "Pizza",
    "price" => 200,
    "description" => "A delicious cheesy pizza",
    "picture" => "pizza.jpg"
  ),
  array(
    "name" => "Burger",
    "price" => 150,
    "description" => "A classic beef burger",
    "picture" => "burger.jpg",
  ),
  array(
    "name" => "Salad",
    "price" => 70,
    "description" => "A fresh and healthy salad",
    "picture" => "salad.jpg"
  ),
  array(
    "name" => "Shavarma",
    "price" => 100,
    "description" => "Fresh, delicious shawarma rolls",
    "picture" => "shawarma.jpg"
  ),
  array(
    "name" => "Pasta",
    "price" => 300,
    "description" => "A hearty serving of pasta",
    "picture" => "pasta.jpg"
  ),
  array(
    "name" => "Steak",
    "price" => 250,
    "description" => "A juicy, grilled steak",
    "picture" => "steak.jpg"
  ),
);
$jsonData = json_encode($foodItems);
echo $jsonData;
?>
