<?php 

class Counter {

    public static $jumlah = 10;

    public function kurang() {
        self::$jumlah--;
    }

}

$c1 = new Counter();
$c2 = new Counter();

$c1->tambah();
$c2->tambah();

echo Counter::$jumlah;

?>