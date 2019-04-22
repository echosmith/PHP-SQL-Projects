<?php

include_once 'dbconnect.php';

function getAllTestData(){
    $db = getDatabase();
           
    $stmt = $db->prepare("SELECT * FROM corps");

     $results = array();
     if ($stmt->execute() && $stmt->rowCount() > 0) {
         $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
     }
    return $results;
}

function getSearchTest($column, $searchWord){

    $db = getDatabase();
    
    $stmt = $db->prepare("SELECT * FROM corps WHERE $column LIKE :search");

    $search = '%'.$searchWord.'%';
    $binds = array(
        ":search" => $search
    );
    $results = array();
    if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    return $results;
}

function getSortTest($column, $order) {
    $db = getDatabase();
    
    $stmt = $db->prepare("SELECT * FROM corps ORDER BY $column $order");

    $results = array();
    if ($stmt->execute() && $stmt->rowCount() > 0) {
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    return $results;
}