<?php
/*
* Menampilkan data
* */
function showTodoList()
{
  global $todolist;

  echo "TodoList " . PHP_EOL;
  foreach ($todolist as $number => $value) {
    echo "$number. $value" . PHP_EOL;
  }
}
