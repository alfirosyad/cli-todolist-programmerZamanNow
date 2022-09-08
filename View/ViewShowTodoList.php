<?php
require_once "Model/TodoList.php";
require_once "BusinessLogic/ShowTodoList.php";
require_once "Helper/Input.php";
require_once "View/ViewShowTodoList.php";
require_once "View/ViewAddTodoList.php";
require_once "View/ViewRemoveTodoList.php";
/*
* tampilan Menampilkan data
* */
function viewShowTodoList()
{
  while (true) {
    showTodoList();
    echo PHP_EOL . "MENU" . PHP_EOL;
    echo "1. Tamba Todo" . PHP_EOL;
    echo "2. Hapus Todo" . PHP_EOL;
    echo "x. Keluar" . PHP_EOL;
    $pilihan = input("Pilih Menu");
    if ($pilihan == 1) {
      viewAddTodoList();
    } else if ($pilihan == 2) {
      viewRemoveTodoList();
    } else if ($pilihan == 'x') {
      break;
    } else {
      echo message('Pilihan Tidak dimengerti' ). PHP_EOL;
    }
  }
  echo message('Sampai Jumpa Lagi') . PHP_EOL;
}
