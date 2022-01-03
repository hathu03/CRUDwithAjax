<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container">
    <button id="add-book" class="btn btn-success mt-5 mb-3">Create-Book</button>
    <div class="card">
        <div class="card-header">
            Book Manager
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Code</th>
                    <th scope="col">Author</th>
                </tr>
                </thead>
                <tbody class="book-list">

                </tbody>
            </table>
        </div>
    </div>
</div>
<button class="logout">Logout</button>


<div class="modal modal-add" tabindex="1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form class="from-add " method="post">
                <div class="modal-header">
                    <h5 class="modal-title">Create Book</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <label>Tiêu đề</label>
                    <input type="text" class="form-control" id="book-title" name="title" placeholder="Nhập tiêu đề">
                    <label>Mã Code</label>
                    <input type="number" class="form-control" id="book-code" name="code" placeholder="Nhập mã code">
                    <label>Tác giả</label>
                    <input type="text" class="form-control" id="book-author" name="author" placeholder="Nhập tác giả">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary add-book">Add</button>
                    <button type="button" class="btn btn-secondary close" >Close</button>
                </div>
            </form>
        </div>
    </div>
</div>


<div class="modal modal-update" tabindex="2">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form class="from-add " method="post">
                <div class="modal-header">
                    <h5 class="modal-title">Update Book</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <label>ID</label>
                    <input type="text" class="form-control" id="id" name="title" placeholder="id" readonly>
                    <label>Tiêu đề</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Nhập tiêu đề">
                    <label>Mã Code</label>
                    <input type="number" class="form-control" id="code" name="code" placeholder="Nhập mã code">
                    <label>Tác giả</label>
                    <input type="text" class="form-control" id="author" name="author" placeholder="Nhập tác giả">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary update-book">Update</button>
                    <button type="button" class="btn btn-light close" >Close</button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{ asset("js/main.js") }}"></script>
</html>
