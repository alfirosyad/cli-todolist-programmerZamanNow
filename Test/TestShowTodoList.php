<?php
require_once "Model/TodoList.php";
require_once "BusinessLogic/ShowTodoList.php";

// kita tambahkan sementara datanya
$todolist[1] = "Belajar PHP Dasar";
$todolist[2] = "Belajar PHP Database";
$todolist[3] = "Belajar PHP Web";
$todolist[4] = "Belajar Golang";

// kita tampilkan
showTodoList();
