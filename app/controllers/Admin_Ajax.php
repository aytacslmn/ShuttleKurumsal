<?php

class Admin_Ajax extends Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->ajaxCall();
    }

    public function ajaxCall() {
        //session güvenlik kontrolü
        $form = $this->load->otherClasses('Form');

        if ($_POST && $_SERVER["HTTP_X_REQUESTED_WITH"] == "XMLHttpRequest") {
            $sonuc = array();
            //model bağlantısı
            $Panel_Model = $this->load->model("Panel_Model");
            $form->post("tip", true);
            $tip = $form->values['tip'];
            Switch ($tip) {

                case "ayarDuzenle":
                    $form->post("baslik", true);
                    $form->post("aciklama", true);
                    $form->post("keyw", true);
                    $form->post("is", true);
                    $form->post("mail", true);
                    $form->post("adres", true);
                    $baslik = $form->values['baslik'];
                    $aciklama = $form->values['aciklama'];
                    $keyw = $form->values['keyw'];
                    $is = $form->values['is'];
                    $mail = $form->values['mail'];
                    $adres = $form->values['adres'];
                    if ($baslik != "") {
                        if ($aciklama != "") {
                            if ($keyw != "") {
                                if ($is != "") {
                                    if ($mail != "") {
                                        if ($adres != "") {
                                            $id = 1;
                                            if ($form->submit()) {
                                                $dataAyar = array(
                                                    'site_baslik' => $baslik,
                                                    'site_aciklama' => $aciklama,
                                                    'site_keyw' => $keyw,
                                                    'is_tel' => $is,
                                                    'site_mail' => $mail,
                                                    'adres' => $adres
                                                );
                                            }
                                            $result = $Panel_Model->ayarupdate($dataAyar, $id);
                                            if ($result) {
                                                $sonuc["result"] = "Başarılı bir şekilde güncellenme olmuştur.";
                                            } else {
                                                $sonuc["hata"] = "Bir hata oluştu.Tekrar deneyiniz";
                                            }
                                        } else {
                                            $sonuc["hata"] = "Lütfen adresi boş bırakmayınız.";
                                        }
                                    } else {
                                        $sonuc["hata"] = "Lütfen maili boş girmeyiniz.";
                                    }
                                } else {
                                    $sonuc["hata"] = "Lütfen is Telefonunu giriniz.";
                                }
                            } else {
                                $sonuc["hata"] = "Lütfen keyword alanını  boş bırakmayınız.";
                            }
                        } else {
                            $sonuc["hata"] = "Lütfen acıklamayı boş bırakmayınız.";
                        }
                    } else {
                        $sonuc["hata"] = "Lütfen basliği boş girmeyiniz.";
                    }
                    break;
                case "aIcerikDuzenle":
                    $form->post("abaslik", true);
                    $form->post("aicerik", true);
                    $form->post("id", true);
                    $abaslik = $form->values['abaslik'];
                    $aicerik = $form->values['aicerik'];
                    $id = $form->values['id'];
                    if ($abaslik != "") {
                        if ($aicerik != "") {
                            if ($form->submit()) {
                                $dataAnasayfa = array(
                                    'alt_icerik_baslik' => $abaslik,
                                    'alt_icerik' => $aicerik
                                );
                            }
                            $result = $Panel_Model->anasayfaUpdate($dataAnasayfa, $id);
                            if ($result) {
                                $sonuc["result"] = "Başarılı bir şekilde güncellenme olmuştur.";
                            } else {
                                $sonuc["hata"] = "Bir hata oluştu.Tekrar deneyiniz";
                            }
                        } else {
                            $sonuc["hata"] = "Alt içeriği giriniz";
                        }
                    } else {
                        $sonuc["hata"] = "Lütfen başlık giriniz";
                    }
                    break;
                case "anaIcerikDuzenle":
                    $form->post("abaslik", true);
                    $form->post("aicerik", true);
                    $form->post("id", true);
                    $abaslik = $form->values['abaslik'];
                    $aicerik = $form->values['aicerik'];
                    $id = $form->values['id'];
                    if ($abaslik != "") {
                        if ($aicerik != "") {
                            if ($form->submit()) {
                                $dataAnasayfa = array(
                                    'baslik' => $abaslik,
                                    'icerik' => $aicerik
                                );
                            }
                            $result = $Panel_Model->anasayfaAnaIcerikUpdate($dataAnasayfa, $id);
                            if ($result) {
                                $sonuc["result"] = "Başarılı bir şekilde güncellenme olmuştur.";
                            } else {
                                $sonuc["hata"] = "Bir hata oluştu.Tekrar deneyiniz";
                            }
                        } else {
                            $sonuc["hata"] = "Alt içeriği giriniz";
                        }
                    } else {
                        $sonuc["hata"] = "Lütfen başlık giriniz";
                    }
                    break;
            }
            echo json_encode($sonuc);
        } else {
            header("Location:" . SITE_URL);
        }
    }

}
?>
                                                                                                     
