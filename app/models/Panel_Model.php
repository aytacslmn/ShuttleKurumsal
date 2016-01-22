<?php

class Panel_Model extends Model {

    public function __construct() {
        parent::__construct();
    }

    public function select() {
        $sql = "SELECT * FROM table";
        return $this->db->select($sql);
    }

    public function insert($data) {
        return ($this->db->insert("table", $data));
    }

    public function update($data, $gelenid) {
        return ($this->db->update("table", $data, "table_id=$gelenid"));
    }

    public function delete($gelenid) {
        return ($this->db->delete("table", "table_id=$gelenid"));
    }

    //login select formu
    public function loginselect($email, $sifre) {
        $sql = "SELECT ad,cinsiyet,eposta,sifre,profil_resmi FROM uyeler WHERE eposta='$email' AND sifre='$sifre'";
        return $this->db->select($sql);
    }
    
   public function ayarselect($id) {
        $sql = "SELECT site_baslik,site_aciklama,is_tel,site_keyw,site_mail,adres FROM ayarlar WHERE id=1";
        return $this->db->select($sql);
    }
    
    public function ayarupdate($dataAyar, $id) {
        return ($this->db->update("ayarlar", $dataAyar, "id=$id"));
    }


}

?>
