<?php

require_once "Model/TodoList.php";
require_once "BusinessLogic/ShowTodoList.php";
require_once "BusinessLogic/AddTodoList.php";
require_once "BusinessLogic/RemoveTodoList.php";

addTodoList("PHP Dasar");
addTodoList("Siswa Belajar PHP");
addTodoList("Siswa Belajar Golang");
addTodoList("Siswa Belajar Python");
addTodoList("Siswa Belajar Web");
addTodoList("Siswa Belajar Master");

$hasil = removeTodoList(1);
echo "<pre>";
var_dump($hasil);
die();