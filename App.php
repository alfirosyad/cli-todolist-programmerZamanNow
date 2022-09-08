<?php
require_once "Model/TodoList.php";
require_once "BusinessLogic/ShowTodoList.php";
require_once "BusinessLogic/AddTodoList.php";
require_once "BusinessLogic/RemoveTodoList.php";
require_once "View/ViewShowTodoList.php";
require_once "View/ViewAddTodoList.php";
require_once "View/ViewRemoveTodoList.php";
require_once "Helper/Input.php";

echo "Aplikasi Todo List" . PHP_EOL;

addTodoList("Belajar Dasar PHP");
addTodoList("Belajar Dasar Javascript");
addTodoList("Belajar Dasar GoLang");
addTodoList("Mohammad Zuz");
addTodoList("Ubaidillah");
viewShowTodoList();