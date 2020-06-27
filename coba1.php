<?php

  //cara pertama

  $buah['jambu'] = 'Merah';

  $buah['apel']  = 'Orange';

  $buah['jeruk'] = 'Hijau';

  //$buah adalah nama variable dan yang di dalam tanda [''] adalah nilai atau kata kunci array tersebut

//Cara kedua

  $buah = array(

  'jambu' => array('warna' => 'Merah','ukuran' => '10cm'),

  'apel'  => array('warna' => 'Orange','ukuran' => '20cm'),

  'jeruk' => array('warna' => 'Hijau','ukuran' => '15cm')

  );

//untuk menjalankan cara pertama : echo $buah['jambu'];

//untuk menjalankan cara kedua  :
foreach($buah as $key => $val){
echo 'Warna buah '.$key.' adalah '.$val['warna'].' Ukurannya = '.$val['ukuran'].' <br/>';
}


?>