<?php

class ExpensesStore extends StoreBase
{
    protected $dtoName = 'Expense';

    public function __construct($db)
    {
        parent::__construct($db, 'expenses');
    }

    public function add(Expense $expense)
    {
        $columns = $this->objectKeysToString($expense, ['id']);
        $placeholders = $this->objectKeysToPlaceholdersString($expense, ['id']);

        $expense->updatedDate = time();
        $values = $this->objectToValues($expense, ['id']);

        $sql = "INSERT INTO $this->table($columns) VALUES($placeholders)";
        $query = $this->pdo->prepare($sql);
        $query->execute($values);
    }

    public function update(Expense $expense)
    {
        $setPairs = $this->objectKeysToSetPairsString($expense, ['id']);

        $expense->updatedDate = time();
        $values = $this->objectToValues($expense);

        $sql = "UPDATE $this->table SET $setPairs WHERE id = :id";
        $query = $this->pdo->prepare($sql);
        $query->execute($values);
    }
}
