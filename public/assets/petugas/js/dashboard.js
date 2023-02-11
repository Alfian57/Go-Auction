$(document).ready(function () {
    $("#datatables").DataTable();

    $(".btn-delete").on("click", function (e) {
        e.preventDefault();
        var form = $(this).parents("form");

        swal({
            title: "Apakah Anda Yakin ?",
            text: "Data Akan Dihapus Secara Permanen",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        }).then((willDelete) => {
            if (willDelete) {
                form.submit();
            }
        });
    });

    $(".btn-pemenang").on("click", function (e) {
        e.preventDefault();
        var form = $(this).parents("form");

        swal({
            title: "Jadikan Pemenang ?",
            text: "Setelah Terpilih, Lelang Akan Ditutup Otomatis",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        }).then((willDelete) => {
            if (willDelete) {
                form.submit();
            }
        });
    });
});
