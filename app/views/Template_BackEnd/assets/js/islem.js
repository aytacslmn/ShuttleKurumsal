$(document).on("click", "button#profilDuzenle", function (e) {
    var ad = $("#ad").val();
    var adres = $("#adres").val();
    var sehir = $("input[name=sehir]").val();
    var cinsiyettext = $("#cinsiyet option:selected").text();
    var cinsiyetval = $("#cinsiyet option:selected").val();
    var email = $(".email").val();
    $.ajax({
        type: "post",
        url: SITE_URL + "/Admin_Ajax",
        cache: false,
        dataType: "json",
        data: {"ad": ad, "adres": adres, "sehir": sehir,
            "cinsiyetval": cinsiyetval, "email": email, "tip": "profilDuzenle"},
        success: function (cevap) {
            if (cevap.hata) {
                reset();
                alertify.alert(cevap.hata);
                return false;
            } else {
                reset();
                alertify.success(cevap.result);
                return false;
            }
        }
    });
});


$(document).on("click", "button#ayarDuzenle", function (e) {
    var baslik = $("#baslik").val();
    var aciklama = $("#aciklama").val();
    var keyw = $("#keyw").val();
    var is = $("#is").val();
    var mail = $("#mail").val();
    var adres = $("#adres").val();


    $.ajax({
        type: "post",
        url: SITE_URL + "/Admin_Ajax",
        cache: false,
        dataType: "json",
        data: {"baslik": baslik, "aciklama": aciklama,"keyw": keyw, "is": is,  "mail": mail, "adres": adres, "tip": "ayarDuzenle"},
        success: function (cevap) {
            if (cevap.hata) {
                reset();
                alertify.alert(cevap.hata);
                return false;
            } else {
                reset();
                alertify.success(cevap.result);
                return false;
            }
        }
    });
});

$(document).on('click', 'a#aaduzenle', function (e) {
    var id = $(this).attr("value");
    var alt_icerik_baslik = $(this).parent().parent().find('td:eq(0)').text();
    var alt_icerik = $(this).parent().parent().find('td:eq(1)').text();
    $("#sakliID").val(id);
    $("#abaslik").val(alt_icerik_baslik);
    $("#aicerik").val(alt_icerik);
    $("#anasayfaModal").modal('show');
});


$(document).on('click', '#aIcerikDuzenle', function (e) {
   var abaslik = $("#abaslik").val();
     var aicerik = $("#aicerik").val();
    var id = $("#sakliID").val();
    $.ajax({
        type: "post",
        url: SITE_URL + "/Admin_Ajax",
        cache: false,
        dataType: "json",
        data: {"abaslik": abaslik, "aicerik": aicerik, "id": id, "tip": "aIcerikDuzenle"},
        success: function (cevap) {
            if (cevap.hata) {
                reset();
                alertify.alert(cevap.hata);
                $("#anasayfaModal").modal('hide');
                return false;
            } else {
                $("tr#aatable_" + id + " td:eq(0)").text(abaslik);
                $("tr#aatable_" + id + " td:eq(1)").text(aicerik);
                reset();
                alertify.success(cevap.result);
                $("#anasayfaModal").modal('hide');
                return false;
            }
        }
    });
});

$(document).on('click', 'a#aanaduzenle', function (e) {
    var id = $(this).attr("value");
    var icerik_baslik = $(this).parent().parent().find('td:eq(0)').text();
    var icerik = $(this).parent().parent().find('td:eq(1)').text();
    $("#anasakliID").val(id);
    $("#anabaslik").val(icerik_baslik);
    $("#anaicerik").val(icerik);
    $("#anasayfaAnaModal").modal('show');
});


$(document).on('click', '#aAnaIcerikDuzenle', function (e) {
   var abaslik = $("#anabaslik").val();
     var aicerik = $("#anaicerik").val();
    var id = $("#anasakliID").val();
    $.ajax({
        type: "post",
        url: SITE_URL + "/Admin_Ajax",
        cache: false,
        dataType: "json",
        data: {"abaslik": abaslik, "aicerik": aicerik, "id": id, "tip": "anaIcerikDuzenle"},
        success: function (cevap) {
            if (cevap.hata) {
                reset();
                alertify.alert(cevap.hata);
                $("#anasayfaAnaModal").modal('hide');
                return false;
            } else {
                $("tr#aanatable_" + id + " td:eq(0)").text(abaslik);
                $("tr#aanatable_" + id + " td:eq(1)").text(aicerik);
                reset();
                alertify.success(cevap.result);
                $("#anasayfaAnaModal").modal('hide');
                return false;
            }
        }
    });
});


window.onload = function () {
    var fileInput = document.getElementById('fileInput');
    var fileDisplayArea = document.getElementById('fileDisplayArea');
       var resimGuncelle = document.getElementById('resimGuncelle');
    var dosyaAlani = document.getElementById('dosyaAlani');

    fileInput.addEventListener('change', function (e) {
        var file = fileInput.files[0];
        var imageType = /image.*/;
        if (file.type.match(imageType)) {
            var reader = new FileReader();
            reader.onload = function (e) {
                fileDisplayArea.innerHTML = "";

                var img = new Image();
                img.src = reader.result;

                fileDisplayArea.appendChild(img);
            }
            reader.readAsDataURL(file);
        } else {
            fileDisplayArea.innerHTML = "Dosya Yüklenemedi!!"
        }
    });
    
        resimGuncelle.addEventListener('change', function (e) {
        var file = resimGuncelle.files[0];
        var imageType = /image.*/;
        if (file.type.match(imageType)) {
            var reader = new FileReader();
            reader.onload = function (e) {
                dosyaAlani.innerHTML = "";

                var img = new Image();
                img.src = reader.result;

                dosyaAlani.appendChild(img);
            }
            reader.readAsDataURL(file);
        } else {
            dosyaAlani.innerHTML = "Dosya Yüklenemedi!!"
        }
    });
}

