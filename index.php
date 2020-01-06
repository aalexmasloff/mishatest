﻿<?php

require __DIR__ . '/vendor/autoload.php';

ini_set('display_errors', 1);
//require_once 'application/bootstrap.php';

require_once 'models/category.php';
require_once 'models/subcategory.php';
require_once 'models/expense.php';
require_once 'models/queryParams.php';
require_once 'stores/storeBase.php';
require_once 'stores/categoryStore.php';

$store = new CategoryStore('db/test.db');

//$store->add('NEW');

$category = $store->getById(1);
var_dump($category);

//var_dump($store->objectKeysToString($category));
$cat = new Category();
$cat->id = 11;
$cat->name = 'Updated';
$store->update($cat);

$total = $store->getTotal();
var_dump($total);



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

            
           