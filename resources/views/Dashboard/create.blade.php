<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <link rel="stylesheet" href="{{asset('summernote-bs4.css')}}">

    <!-- Title Page-->
    <title>{{$title}}</title>

    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Main CSS-->
    <link rel="stylesheet" href="{{asset('Css/main.css')}}">
</head>

<body>
<div class="page-wrapper bg-dark p-t-100 p-b-50">
    <div class="wrapper wrapper--w900">
        <div class="card card-6">
            <div class="card-heading">
                <h2 class="title">Create Data</h2>
            </div>
            <div class="card-body">
                <form action="{{route('dashboard.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-row">
                        <div class="name">Title</div>
                        <div class="value">
                            <input class="input--style-6" type="text" name="title" placeholder="Example:Design">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="name">Slug</div>
                        <div class="value">
                            <div class="input-group">
                                <input class="input--style-6" type="text" name="slug" placeholder="design-grapis">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="name">Categoty</div>
                        <select class="form-select" aria-label="Default select example" name="categories_id">
                            <option selected>Select Category</option>
                            @foreach($categories as $category)
                            <option value="{{$category->id}}" class="text-danger" >{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-row">
                        <div class="name">Body</div>
                        <div class="value">
                            <div class="input-group">
                                <textarea id="summernote" name="body"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="name">Image</div>
                        <div class="value">
                            <div class="input-group js-input-file">
                                <input class="input-file" type="file" name="image" id="file">
                                <label class="label--file" for="file">Choose file</label>
                                <span class="input-file__info">No file chosen</span>
                            </div>
                            <div class="label--desc">Upload your CV/Resume or any other relevant file. Max file size 50 MB</div>
                        </div>
                    </div>
            <div class="card-footer">
                <button class="btn btn--radius-2 btn--blue-2" type="submit">Add Data</button>
            </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('#summernote').summernote();
    });
</script>

<!-- Jquery JS-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="/summernote-bs4.js"></script>


<!-- Main JS-->
<script src="Js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->
