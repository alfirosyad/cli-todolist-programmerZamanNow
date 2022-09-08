<?php
/*
* Menambah data
* */
function addTodoList(String $todo)
{
  global $todolist;

  $number = count($todolist) + 1;

  $todolist[$number] = $todo;
}