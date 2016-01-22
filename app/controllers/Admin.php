<?php

class Admin extends Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->home();
    }

    public function home() {
            $this->load->view("Template_BackEnd/header");
            $this->load->view("Template_BackEnd/left");
            $this->load->view("Template_BackEnd/home");
            $this->load->view("Template_BackEnd/footer");
    }

    public function Profil() {
        $id = Session::get("ID");
        if ($id < 0) {
            header("Refresh:0; url=" . SITE_URL);
        } else {
            $model = $this->load->model("Panel_Model");
            $profilarray = array();
            $profil = array();
            $kategori = array();
            //kategorileri listeleme
            $profilliste = $model->profilselect($id);
            foreach ($profilliste as $profillistee) {
                $profil['ID'] = $id;
                $profil['Ad'] = $profillistee['fwkullaniciAd'];
                $profil['Adres'] = $profillistee['fwkullaniciAdres'];
                $profil['Sehir'] = $profillistee['fwkullaniciSehir'];
                $profil['Cinsiyet'] = $profillistee['fwkullaniciCinsiyet'];
                $profil['Mail'] = $profillistee['fwkullaniciEmail'];
            }

            $kategoriliste = $model->kategoriselect();
            $a = 0;
            foreach ($kategoriliste as $kategorilistee) {
                $kategori[$a]['KategoriID'] = $kategorilistee['ID'];
                $kategori[$a]['Kategoriad'] = $kategorilistee['ad'];
                $kategori[$a]['KategoriIcerik'] = $kategorilistee['icerik'];
                $a++;
            }
            $profilarray[0] = $profil;
            $profilarray[1] = $kategori;

            $this->load->view("Template_BackEnd/header");
            $this->load->view("Template_BackEnd/left");
            $this->load->view("Template_BackEnd/profil", $profilarray);
            $this->load->view("Template_BackEnd/footer");
        }
    }

    public function ayarlar() {
           $model = $this->load->model("Panel_Model");
            $ayararray = array();
            $ayarliste = $model->ayarselect();

            $this->load->view("Template_BackEnd/header");
            $this->load->view("Template_BackEnd/left");
            $this->load->view("Template_BackEnd/ayarlar",$ayarliste);
            $this->load->view("Template_BackEnd/footer");
    }

}
?>

