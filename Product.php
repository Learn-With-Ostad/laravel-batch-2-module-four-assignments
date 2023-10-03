<?php
class Product
{

    public int $id;
    public string $name;
    public float $price;

    public function __construct(int $id, string $name, float $price)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }

    public function getFormattedPrice(): string
    {
        return "$" . round($this->price, 2);
    }

    public function showDetails()
    {
        # get formatted price from another function
        $price = $this->getFormattedPrice();

        echo "ID: " . $this->id . "<br/>";
        echo "Name: " . $this->name . "<br/>";
        echo "Price: " . $price . "<br/>";
    }
}

// Test the Product class
$product = new Product(1, 'T-shirt', 19.99);
$product->showDetails();
