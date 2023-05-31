<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog Web</title>
    <link rel="stylesheet" type="text/css" href="style.css">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<!--
<style>
    body
    {
    background-image: url('/images/pic-1.jpeg');
    background-repeat: no-repeat;
    background-size:cover;
    position: fixed;
    width: 100vw;
    height: 100vh;
    position: absolute;
    overflow: hidden;
    }

</style>
-->

</head>
<body>
    <!--
    <h1 style='color:red;background-color:yellow;font-size:60px'>
        This is my Home page
    </h1>
    -->
    <nav>
        <label class="logo"style=font-size:20px>Blog Web</label>

        <ul>
            <li>
                <a href="">Home</a>
            </li>

            <li>
                <a href="">About</a>
            </li>

            <li>
                <a href="">Contact</a>
            </li>

            @if (Route::has('login'))

            @auth
            <li>
                <a href="{{ url('/dashboard') }}"class='btn btn-success'>{{ Auth::user()->name }}</a>
            </li>

            @else

            <li>
                <a href="{{ route('login') }}"class='btn btn-primary'>Login</a>
            </li>

            <li>
                <a href="{{ route('register') }}"class='btn btn-success'>Register</a>
            </li>

            @endauth
            @endif

    </nav>

        @foreach ($post as $post )


        <div class="div_design">
            <label>{{$post->Username}}</label>
            <p>{{$post->Description}}</p>

            <img src="/uploads/gallery/{{$post->Image}}" height="300px" width="100%">
        </div>

        @endforeach
</body>
</html>
