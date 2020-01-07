<?php

require __DIR__ . '/vendor/autoload.php';

ini_set('display_errors', 1);

require_once 'application/globals.php';
require_once 'application/entities/categoryEntity.php';
require_once 'application/entities/subcategoryEntity.php';
require_once 'application/entities/expenseEntity.php';
require_once 'application/models/queryParams.php';
require_once 'application/models/expense.php';
require_once 'application/stores/storeBase.php';
require_once 'application/stores/categoryStore.php';
require_once 'application/stores/subcategoryStore.php';
require_once 'application/stores/expensesStore.php';
require_once 'application/core/controllerApi.php';
require_once 'application/controllersApi/categoriesController.php';

require_once 'application/bootstrap.php';

date_default_timezone_set($G_TimeZone);

var_dump(date_default_timezone_get());
echo(date("F d, Y h:i:s", time()));


var_dump($_SERVER);

// $store = new ExpensesStore('db/test.db');
// $expense = new ExpenseEntity();
// $expense->categoryId = 1;
// $expense->subcategoryId = 1;
// $expense->price = 15.35;
// $expense->quantity = 1;
// $expense->sum = 15.35;
// $expense->description = 'My second purchase';
// $expense->notes = 'My second notes';
// $expense->purchaseDate = time();
// $expense->id = 1;

//$store->update($expense);

//$category = $store->getById(1);
//var_dump(json_encode($store->getAll()));

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

       
