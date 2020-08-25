<?php
//PHP method dan property
//class manusia
class manusia{
    //property
    var $nama;
    var $warna;
    
    //method manusia
    function tampilkan_nama(){
        return "Nama saya nurachman <br/>";
    }
    
    function warna_kulit(){
        return "Warna kulit saya sawo matang <br/>";
    }
    
}
//instansiasi class manusia
$manusia = new manusia();

//memanggil method tampilkan_nama dari class manusia
echo $manusia->tampilkan_nama();

//memanggil method warna_kulit dari class manusia
echo $manusia->warna_kulit();
?>