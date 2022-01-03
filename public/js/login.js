$(document).ready(function () {
    let baseUrl = origin;
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('body').on('click', '.login', function () {
        let email = $('#email').val();
        let password = $('#password').val();
        $.ajax({
            url: baseUrl + "/api/auth",
            type: "POST",
            dataType: "json",
            data:{
                email: email,
                password: password,
            },
            success: function (res) {
                console.log(res);
                window.location = baseUrl + "/api/bookslist";
            }
        })

    })
    $('body').on('click', '.register', function () {
      $('.modal-register').show();
        let name = $('#name').val()
        let email = $('#email-register').val();
        let password = $('#password-register').val();
        $.ajax({
            url: baseUrl + "/api/auth",
            type: "POST",
            dataType: "json",
            data:{
                name: name,
                email: email,
                password: password,
            },
            success: function (res) {
                console.log(res);
                window.location = baseUrl + "/api/bookslist";
            }
        })
    })



});
