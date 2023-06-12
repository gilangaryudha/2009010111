$("#simpan").click(function(){
    var kode_produk =$("#kode_prduk").val()
    if (kode_produk ==""){
        $("#lihat_kode_produk").text("Kode Produk masih kosong")
    }else{
        $("#lihat_kode_produk").text("")
    }
    var nama_produk = $("#nama_produk").val()
    if (nama_produk = "") {
        $("#lihat_nama_produk").text("Nama Produk masih kosong")
    } 
})