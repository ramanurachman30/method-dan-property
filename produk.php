<?php
class produk{
	public $namaBarang = "laptop";
	public $merk = "asus";
	public $harga = 7000000;
	public function getCetak(){
		return "$this->namaBarang, $this->merk, $this->harga";
	}
}

// $produk1 = new produk();
// $produk->namaBarang="flashdisk";
// var_dump($produk1);

$produk2 = new produk();
$produk2->namaBarang="mouse";
$produk2->propertyBaru="Biru";
echo "nama barang 1:" . $produk2->getCetak();

echo "<br>";

$produk3 = new produk();
$produk3->namaBarang="flashdisk";
$produk3->merk="sandisk";
$produk3->harga=100000;
echo "nama barang 2: " . $produk3->getCetak();
?>