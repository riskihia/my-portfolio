<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>
    <link href="{{asset('bootstrap-5/css/bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="{{asset('bootstrap-5/js/bootstrap.bundle.min.js')}}" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    
</head>
<body>
    <div class="container">
        <h1>Blog Riski
            <a class="btn btn-success" href="{{ url('posts/create') }}">+ Buat Postingan</a>
        </h1>

        @foreach($posts as $post)
            @php($post = explode(",",$post))
            <div class="card mb-3"> 
                <div class="card-body">
                    <h5 class="card-title">{{ $post[1] }}</h5>
                    <p class="card-text">{{$post[2]}}</p>
                    <p class="card-text"><small class="text-body-secondary">Last updated {{ date('d M Y H:i', strtotime($post[3]))}}</small></p>
                    <a href="{{ url("posts/$post[0]") }}" class="btn btn-primary">Selengkapnya</a>
                </div>
            </div>
        @endforeach
    </div>
</body>
</html>