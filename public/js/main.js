$(document).ready(function () {
    let baseUrl = origin;
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax(
        {
            url: origin + "/api/books",
            type: "GET",
            dataType: "json",
            success: function (res) {
                displayAllBook(res)
            }
        }
    );

    function displayAllBook(books) {
        let html = "";
        for (let i = 0; i < books.length; i++) {
            html += `<tr id="book-${books[i].id}">
                <td>${books[i].id}</td>
            <td>${books[i].title}</td>
            <td>${books[i].code}</td>
            <td>${books[i].author}</td>
            <td><button data-id="${books[i].id}" class="btn btn-warning edit-book">Update</button></td>
            <td><button data-id="${books[i].id}" class="btn btn-danger delete-book">Delete</button></td>
             </tr>`;
        }

        $(".book-list").html(html);
    }

    $('body').on("click", ".delete-book", function () {
        let id = $(this).attr("data-id");
        if (confirm('Are you sure?')) {
            $.ajax({
                url: origin + "/api/books/delete/" + id,
                type: "GET",
                success: function (res) {
                    $(`#book-${id}`).remove();
                }
            });
        }
    });

    $('body').on("click", "#add-book",function (){
        $(".modal-add").show();
    });
    $('body').on("click", ".close",function (){
        $(".modal").hide();
    });


    function addBook(book){
        let html =  `<tr id="book-${book.id}">
                <td>${book.id}</td>
            <td>${book.title}</td>
            <td>${book.code}</td>
            <td>${book.author}</td>
            <td><button data-id="${book.id}" class="btn btn-warning edit-book">Update</button></td>
            <td><button data-id="${book.id}" class="btn btn-danger delete-book">Delete</button></td>
             </tr>`;
        $('.book-list').prepend(html);
    }

    $('body').on("click", ".add-book",function (){
        let title = $('#book-title').val();
        let code = $('#book-code').val();
        let author = $('#book-author').val();
        $('.add-book').attr('disabled',true);

        $.ajax({
            url:origin + '/api/books/add',
            type: 'post',
            dataType: 'json',
            data: {
                title : title,
                code : code,
                author : author
            }, success:function (res){
                console.log(res.data)
                $('.add-book').attr('disabled',false);
                $('.from-add').trigger('reset');
                $(".modal").hide();
                addBook(res.data);
            }
        });


    });

    $('body').on("click", ".edit-book",function () {
        $('.modal-update').show();
        let id = $(this).attr('data-id');

        $.ajax({
            url: origin + '/api/books/'+id + '/edit/',
            type: 'get',
            dataType: 'json',
            success: function (res) {
                console.log(res.data)
                $('#id').val(res.data.id);
                $('#title').val(res.data.title);
                $('#code').val(res.data.code);
                $('#author').val(res.data.author);
            }
        });
    });
    $('body').on("click", ".update-book",function () {
        let id = $('#id').val();
        $.ajax({
            url: origin + '/api/books/'+id +'/update/',
            type: 'post',
            dataType: 'json',
            data:{
                id: id,
                title: $('#title').val(),
                code: $('#code').val(),
                author: $('#author').val(),
            },
            success: function (res) {
                console.log(res.data)
                $(".modal").hide();
                $(`#book-${id} td:nth-child(1)`).html(res.data.id);
                $(`#book-${id} td:nth-child(2)`).html(res.data.title);
                $(`#book-${id} td:nth-child(3)`).html(res.data.code);
                $(`#book-${id} td:nth-child(4)`).html(res.data.author);
            }
        });
    });
    $('body').on("click", ".logout", function (){
        $.ajax({
            url: baseUrl + '/api/auth/logout',
            type: 'GET',
            success: function () {
                window.location = baseUrl;
            }
        })
    })

});
