<?php
require_once "BusinessLogic/AddTodoList.php";
require_once "View/ViewShowTodoList.php";

// melakukan penambahan data
addTodoList("Belajar Dasar PHP");
addTodoList("Belajar Dasar Javascript");
addTodoList("Belajar Dasar GoLang");
addTodoList("Mohammad Zuz");
addTodoList("Ubaidillah");

viewShowTodoList();