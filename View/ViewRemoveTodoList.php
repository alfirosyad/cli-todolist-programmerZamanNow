<?php
function viewRemoveTodoList()
{
  echo "MENGHAPUS TODO" . PHP_EOL;
  $pilihan = input("Nomor (x untuk batal)");
  if ($pilihan == 'x') {
    echo "Batal Menghapus TODO" . PHP_EOL;
  } else if ($pilihan == '') {
    echo message("Gagal , Nomor Belum Diisi") . PHP_EOL;
  } else {
    $success = removeTodoList((int)$pilihan);
    if ($success) {
      echo message("Sukses menghapus todo nomor $pilihan") . PHP_EOL;
    } else {
      echo message("Gagal menghapus todo nomor $pilihan" ). PHP_EOL;
    }
  }
}
