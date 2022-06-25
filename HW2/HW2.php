<?php
//  Parent class olarak tasitlar tanimlandi.
// marka ve model tüm taşıtların ortak noktası bu yüzden parent classta.
abstract class tasitlar {

    public $marka;
    public $model;
    
    
    public function assign($marka,$model){

        $this-> marka = $marka;
        $this-> model = $model;

    }
    
}
 // child class olarak araba tanımlandı.
 // plaka no ve tekerlek sayisi araba ve motorsiklet classının ortak yönü ama ayrı ayrı tanımlamak iki classı ilerisi için mantıklı olur.
class araba extends tasitlar {
    public $plaka_no;
    public $tekerlek_sayisi;
    
    public function assign_araba($plaka_no,$tekerlek_sayisi=4) {
        $this-> plaka_no=$plaka_no;
        $this-> tekelek_sayisi=$tekerlek_sayisi;
    }
    
    public function show_araba() {
        echo "plaka no: $this->plaka_no \nmarka: $this->marka \nmodel: $this->model \ntekerlek sayisi: $this->tekelek_sayisi \n";
    }
}

// child class olarak motorsiklet tanimlandi.
class motorsiklet extends araba {
    public $plaka_no;
    public $tekerlek_sayisi;
    
    public function assign_motorsiklet($plaka_no,$tekerlek_sayisi=2) {
        $this-> plaka_no=$plaka_no;
        $this-> tekelek_sayisi=$tekerlek_sayisi;
    }
    public function show_motorsiklet() {
        echo "\nplaka no: $this->plaka_no \nmarka: $this->marka \nmodel: $this->model \ntekerlek sayisi: $this->tekelek_sayisi \n";
    }
}

// kanat acikligi sadece ucaga ait.
// child class olarak ucak tanimlandi.
class ucak extends tasitlar {
    public $kanat_acikligi;
    
    public function assign_ucak($kanat_acikligi) {
        $this-> kanat_acikligi = $kanat_acikligi;
    }
    
    public function show_ucak(){
        echo "\nmarka: $this->marka \nmodel: $this->model \nkanat acikligi: $this->kanat_acikligi \n";
    }
}

$audi = new araba();
$audi->assign("AUDI","A8");
$audi->assign_araba("16 BS 1963");
$audi->show_araba();

$honda = new motorsiklet();
$honda->assign("HONDA","FORZA");
$honda->assign_motorsiklet("16 AGA 2010","2");
$honda->show_motorsiklet();

$airbus = new ucak();
$airbus->assign("AIRBUS","OFK250");
$airbus->assign_ucak("100 m");
$airbus->show_ucak();
?>