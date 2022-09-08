<?php
/*
* Menghapus data
* */
function removeTodoList(int $number): bool
{
  if ($number > sizeof($GLOBALS['todolist']) || $number == 0) {
    return false;
  }
  for ($i = $number; $i < sizeof($GLOBALS['todolist']); $i++) {
    $GLOBALS['todolist'][$i] = $GLOBALS['todolist'][$i + 1];
  }
  unset($GLOBALS['todolist'][sizeof($GLOBALS['todolist'])]);
  return true;
}
