<?php

require_once __DIR__ . "\..\Entity\Todolist.php";
require_once __DIR__ . "\..\Repository\TodolistRepository.php";
require_once __DIR__ . "\..\Service\TodolistService.php";
require_once __DIR__ . "\..\Config\Database.php";


use Entity\Todolist;
use Service\TodolistServiceImpl;
use Repository\TodolistRepositoryImpl;
use Config\Database;

function testShowTodolist(): void{

    $connection = Database::getConnection();
    $todolistRepository = new TodolistRepositoryImpl($connection);    
    $todolistService = new TodolistServiceImpl($todolistRepository);
    $todolistService->addTodolist("satu");
    $todolistService->addTodolist("dua");
    $todolistService->addTodolist("tiga");
    $todolistService->showTodolist();
}

function testAddTodolist(): void{

    $connection = Database::getConnection();
    $todolistRepository = new TodolistRepositoryImpl($connection);    
    $todolistService = new TodolistServiceImpl($todolistRepository);
    $todolistService->addTodolist("satu");
    $todolistService->addTodolist("dua");
    $todolistService->addTodolist("tiga");
    // $todolistService->showTodolist();
}

function testRemoveTodolist(): void{

    $connection = Database::getConnection();
    $todolistRepository = new TodolistRepositoryImpl($connection);    
    $todolistService = new TodolistServiceImpl($todolistRepository);
    
    echo $todolistService->removeTodolist(10) . PHP_EOL;
    echo $todolistService->removeTodolist(1) . PHP_EOL;
}

testShowTodolist();

