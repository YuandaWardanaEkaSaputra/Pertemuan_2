<?php
// Interface
interface Model {
    public function Warna();
}
// interable
function getIterable():iterable {
  return ["Selamat ", "Datang"," Di"," Dealer Honda"];
  
}
$myIterable = getIterable();
foreach($myIterable as $item) {
  echo $item;
  
}
// class
class Produk {
    // Access modifiers Public
    // properti
  public $merk,
            $transmisi,
            $harga;

  // contruktor
  function __construct ($merk, $transmisi, $harga) {
    $this->merk = $merk;
    $this->transmisi = $transmisi;
    $this->harga = $harga;
  }
  // destructor
  function __destruct() {
    echo "Produk Motor : Merek : {$this->merk} | Transmisi : {$this->transmisi} | Harga : {$this->harga}.";
    echo "<br>";
  }
  
}

// Inheritance
class Produk2 extends Produk implements Model{
    public  function Warna (){
        echo "<hr>Produk yang ready di Dealer kami yaitu";
        echo "<br>";
    }
}
// Static Property
class Terjual {
    public static $satu = 100, $dua = 120, $tiga = 135, $empat = 180, $lima = 100;
}
// Static Methods
class Stok{
    public static function staticMethod (){
        echo "Supra X <br> Beat <br> Vario <br> Scoopy <br> Revo ";
        echo "<hr>";
    }
}

// objek
$produk1 = new Produk2("Beat,Vario,Scoopy", "Metic", 19000000);
$produk2 = new Produk2("Supra X,Revo", "Manual", 17000000);
$produk2 -> Warna();
Stok::staticMethod();
echo "Untuk Produk Supra X Terjual : " . Terjual::$satu;
echo "<br> Untuk Produk Beat Terjual : " . Terjual::$dua;
echo "<br> Untuk Produk Vario Terjual : " . Terjual::$tiga;
echo "<br> Untuk Produk Scoopy Terjual : " . Terjual::$empat;
echo "<br> Untuk Produk Revo Terjual : " . Terjual::$lima;
echo "<hr>";