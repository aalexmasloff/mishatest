<?php

class StoreBase
{
    protected $pdo;
    protected $table;
    protected $dtoName;

    public function __construct($db, $table)
    {
        $this->table = $table;
        $this->pdo = new PDO('sqlite:' . $db);
        $this->pdo->SetAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->pdo->SetAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    }

    public function getById(int $id)
    {
        $sql = "SELECT * FROM $this->table WHERE id = $id";
        $query = $this->pdo->query($sql);
        $query->setFetchMode(PDO::FETCH_CLASS, $this->dtoName);

        return $query->fetch();
    }

    public function getAll()
    {
        $sql = "SELECT * FROM $this->table";
        $query = $this->pdo->query($sql);
        $query->setFetchMode(PDO::FETCH_CLASS, $this->dtoName);

        return $query->fetchAll();
    }

    public function getTotal()
    {
        $sql = "SELECT COUNT() as count FROM $this->table";
        $query = $this->pdo->query($sql);
        $query->setFetchMode(PDO::FETCH_ASSOC);

        $result = $query->fetch();
        return (int)$result["count"];
    }

    public function getPaged(QueryParams $queryParams)
    {
        $skip = $queryParams->pageNumber * $queryParams->pageSize;
        $sql = "SELECT * FROM $this->table ORDER BY 
        $queryParams->orderField $queryParams->order LIMIT $skip, $queryParams->pageSize";
        
        $query = $this->pdo->query($sql);
        $query->setFetchMode(PDO::FETCH_CLASS, $this->dtoName);

        return $query->fetchAll();
    }

    public function delete(int $id)
    {
        $sql = "DELETE FROM $this->table WHERE id = $id";
        $this->pdo->exec($sql);
    }

    public function objectKeysToString($obj, string $glue = ",")
    {
      if(!$obj){
         return '';
      }
         
      $keys = array_keys((array)$obj);   
      return implode($glue, $keys);
    }
}