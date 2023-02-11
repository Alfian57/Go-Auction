$(document).ready(function () {
    $(".btn-logout").on("click", function (e) {
        e.preventDefault();
        var form = $(this).parents("form");

        swal({
            title: "Logout ?",
            text: "Anda Akan Dialihkan Kembali Ke Halaman Login",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        }).then((result) => {
            if (result) {
                form.submit();
            }
        });
    });
});
