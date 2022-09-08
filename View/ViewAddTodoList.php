<?php
require_once "Model/TodoList.php";
require_once "Helper/Input.php";
require_once "BusinessLogic/AddTodoList.php";
require_once "Helper/Message.php";

function viewAddTodoList()
{
  echo "MENAMBAH TODO" . PHP_EOL;
  $todo = input("Todo (x untuk batal)");
  if ($todo == "x") {
    // batal
    echo message("Batal Menambah TODO") . PHP_EOL;
  } else if ($todo == "") {
    echo message("Gagal , Isi Todo Masih Kosong") .PHP_EOL;
  } else {
    addTodoList($todo);
  }
}
