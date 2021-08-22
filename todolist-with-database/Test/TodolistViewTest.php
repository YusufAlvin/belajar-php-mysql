<?php 
require_once __DIR__ . "\..\Entity\Todolist.php";
require_once __DIR__ . "\..\Repository\TodolistRepository.php";
require_once __DIR__ . "\..\Service\TodolistService.php";
require_once __DIR__ . "\..\View\TodolistView.php";
require_once __DIR__ . "\..\Helper\InputHelper.php";

use Entity\Todolist;
use Service\TodolistServiceImpl;
use Repository\TodolistRepositoryImpl;
use View\TodolistView;

function testViewShowTodolist():void{
    $todolistRepository = new TodolistRepositoryImpl();    
    $todolistService = new TodolistServiceImpl($todolistRepository);
    $todolistView = new TodolistView($todolistService);
    $todolistService->addTodolist("satu");
    $todolistService->addTodolist("dua");
    $todolistService->addTodolist("tiga");
    $todolistService->addTodolist("empat");
    $todolistService->addTodolist("lima");

    $todolistView->showTodolist();
}

function testViewAddTodolist():void{
    $todolistRepository = new TodolistRepositoryImpl();    
    $todolistService = new TodolistServiceImpl($todolistRepository);
    $todolistView = new TodolistView($todolistService);
    $todolistService->addTodolist("satu");
    $todolistService->addTodolist("dua");
    $todolistService->addTodolist("tiga");

    $todolistView->addTodolist();

    $todolistService->showTodolist();
}

function testRemoveTodolist():void{
    $todolistRepository = new TodolistRepositoryImpl();    
    $todolistService = new TodolistServiceImpl($todolistRepository);
    $todolistView = new TodolistView($todolistService);
    $todolistService->addTodolist("satu");
    $todolistService->addTodolist("dua");
    $todolistService->addTodolist("tiga");

    $todolistService->showTodolist();
    $todolistView->removeTodolist();
    $todolistService->showTodolist();
}
testRemoveTodolist();