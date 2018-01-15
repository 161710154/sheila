<?php

class penjumlahan{
	public $bil1,$bil2;

	function set_nilai($bilangan1,$bilangan2){
		$this->bil1= $bilangan1;
		$this->bil2= $bilangan2;
	}

    function get_nilai1(){
    	  return $this->bil1 + $this->bil2;
    	  
	}

    function get_nilai2(){
          return $this->bil1 * $this->bil2;
	}

}

$penjumlahan1 = new penjumlahan;
$perkalian1-> set_nilai(4,5);
echo "===============================".'<br>';
echo "Perhitungan bilangan 21 dengan bilangan 3".'<br>';
echo "===============================".'<br>';  
echo"Hasil Pertambahan : " .$penjumlahan1-> get_nilai1().'<br>';
echo"Hasil Perkalian : " .$perkalian1-> get_nilai2().'<br>';

?>