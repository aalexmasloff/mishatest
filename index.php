<?php

require __DIR__ . '/vendor/autoload.php';

ini_set('display_errors', 1);
//require_once 'application/bootstrap.php';

require_once 'entities/categoryEntity.php';
require_once 'entities/subcategoryEntity.php';
require_once 'entities/expenseEntity.php';
require_once 'models/queryParams.php';
require_once 'models/expense.php';
require_once 'stores/storeBase.php';
require_once 'stores/categoryStore.php';
require_once 'stores/subcategoryStore.php';
require_once 'stores/expensesStore.php';

$timeZone = 'Europe/Moscow';
date_default_timezone_set($timeZone);

var_dump(date_default_timezone_get());
echo(date("F d, Y h:i:s", time()));


$store = new ExpensesStore('db/test.db');
$expense = new ExpenseEntity();
$expense->categoryId = 1;
$expense->subcategoryId = 1;
$expense->price = 15.35;
$expense->quantity = 1;
$expense->sum = 15.35;
$expense->description = 'My second purchase';
$expense->notes = 'My second notes';
$expense->purchaseDate = time();
$expense->id = 1;

//$store->update($expense);

//$category = $store->getById(1);
var_dump($store->getAll());

//var_dump($store->objectKeysToPlaceholdersString($category));
// $cat = new Category();
// $cat->id = 11;
// $cat->name = 'Updated';
// $store->update($cat);

// $total = $store->getTotal();
// var_dump($total);



// $params = new QueryParams();
// $params->pageNumber = 2;
// $params->pageSize = 4;
// $page0 = $store->getPaged($params);
// var_dump($page0);
// foreach ($category as $row) {
//     echo "$row[name]\n";
// }


//sqlite:/opt/databases/mydb.sq3

//use Envms\FluentPDO\{Query,Utilities};

//$pdo = new PDO("sqlite:db/test.db");
//$fluent = new \Envms\FluentPDO\Query($pdo);

//$query = $fluent->from('categories')->limit(5);

// foreach ($query as $row) {
//     echo "$row[name]\n";
// }

// $query2 = $fluent->from('categories')
//              ->leftJoin('subcategories ON subcategories.categoryId = categories.id');

//              foreach ($query2 as $row) {
//                 echo "$row[subcategories_name]\n";
//             }

            
           
