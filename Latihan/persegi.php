<?php

class bangundatar{
	public $p,$l;
    public $s;
    public $a,$t;

	function set_nilai($panjang,$lebar){
		$this->p= $panjang;
		$this->l= $lebar;
	}

    function get_nilai1(){
    	  return $this->p * $this->l;
    
	}
     function set_nilai1($sisi){
        $this->s= $sisi;
    }

    function get_nilai2(){
    return $this->s * $this->s;
    }	  
    
     function set_nilai2($alas,$tinggi){
        $this->a= $alas;
        $this->t= $tinggi;	  
	}

    function get_nilai3(){
          return 1/2 * $this->a * $this->t;
	}
}
$bangundatar1  = new bangundatar;
$bangundatar1 -> set_nilai(10,15);
$bangundatar1 -> set_nilai1(15,20);
$bangundatar1 -> set_nilai2(21,30);
echo"Hasil Persegi Panjang : " .$bangundatar1-> get_nilai1().'<br>';
echo"Hasil Persegi : " .$bangundatar1-> get_nilai2().'<br>';
echo"Hasil Segitiga : " .$bangundatar1-> get_nilai3().'<br>';

?>