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

    public function anasayfa() {
        $id = Session::get("ID");
        if ($id < 0) {
            header("Refresh:0; url=" . SITE_URL);
        } else {
            $anasayfa = array();
            $anaIcerik = array();
            $altIcerik = array();
            $model = $this->load->model("Panel_Model");
            $anasayfaAnaIcerik = $model->anasayfaIcerik();
            $a  = 0;
            foreach ($anasayfaAnaIcerik as $anasayfaAnaIcerikk) {
                $anaIcerik[$a]["id"] = $anasayfaAnaIcerikk["id"];
                $anaIcerik[$a]["baslik"] = $anasayfaAnaIcerikk["baslik"];
                $anaIcerik[$a]["icerik"] = $anasayfaAnaIcerikk["icerik"];
                $a++;
            }
            
             $anasayfaltIcerik = $model->anasayfaAltIcerik();
            $a  = 0;
            foreach ($anasayfaltIcerik as $anasayfaltIcerikk) {
                $altIcerik[$a]["id"] = $anasayfaltIcerikk["id"];
                $altIcerik[$a]["alt_icerik_baslik"] = $anasayfaltIcerikk["alt_icerik_baslik"];
                $altIcerik[$a]["alt_icerik"] = $anasayfaltIcerikk["alt_icerik"];
                $a++;
            }
            $anasayfa[0] = $anaIcerik;
            $anasayfa[1] = $altIcerik;
            $this->load->view("Template_BackEnd/header");
            $this->load->view("Template_BackEnd/left");
            $this->load->view("Template_BackEnd/anasayfa", $anasayfa);
            $this->load->view("Template_BackEnd/footer");
        }
    }

    public function ayarlar() {
        $id = Session::get("ID");
        if ($id < 0) {
            header("Refresh:0; url=" . SITE_URL);
        } else {
            $model = $this->load->model("Panel_Model");
            $ayarliste = $model->ayarselect();

            $this->load->view("Template_BackEnd/header");
            $this->load->view("Template_BackEnd/left");
            $this->load->view("Template_BackEnd/ayarlar", $ayarliste);
            $this->load->view("Template_BackEnd/footer");
        }
    }

}
?>

