<?php
class Expense
{
    public function __construct()
    {
        $this->updatedDate = time();
    }
    
    public $id;
    public $purchaseDate;
    public $updatedDate;
    public $categoryId;
    public $subcategoryId;
    public $price;
    public $quantity;
    public $sum;
    public $description;
    public $notes;
}