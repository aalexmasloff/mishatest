<?php

class ExpensesStore extends StoreBase
{
    protected $dtoName = 'Expense';

    public function __construct($db)
    {
        parent::__construct($db, 'subcategories');
    }

    public function add($categoryId, $name)
    {   
        $sql = "INSERT INTO $this->table(categoryId, name) VALUES(:name, :categoryId)";
        $query = $this->pdo->prepare($sql);
        $query->execute(['categoryId' => $categoryId, 'name' => $name]);
    }

    public function update(Subcategory $category)
    {   
        $sql = "UPDATE $this->table SET name = :name, categoryId = :categoryId WHERE id = :id";
        $query = $this->pdo->prepare($sql);
        $query->execute(['categoryId' => $category->categoryId, 'name' => $category->name, 'id' => $category->id]);
    }
}