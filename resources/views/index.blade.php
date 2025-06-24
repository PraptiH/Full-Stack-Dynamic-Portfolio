<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            overflow: hidden;
        }
        img {
            width: 500px;
            border-radius: 
        }

        nav {
            border: solid black 2px;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 20px;
        }

        .details {
            border: solid black 2px;
            display: flex;
            justify-content: space-around;
            gap: 20px;
        }

        .social {
            width: 24px;
            border-radius: 100px;
        }

        .footer-text {
            font-weight: bold
        }

        .footer-icon {
            margin-top: 10px;
            display: grid;
            align-items: center gap:20px;
            gap: 10px
        }

        a {
            text-decoration: none;
        }

        .btn {
            padding: 5px;
            background-color: blue;
            font-weight: bold;
            border-radius: 10px;
        }
        .list{
            font-size: 24px;
        }
        .info{
        display: flex;
        align-items: center;
        }
        @media only screen and (max-width<1000px) {
         .info{
           display: block;
        }
        .home{
            text-align: center;
            display:flex;
            align-items: center;
            margin-top:20px
        }
    }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">

</head>

<body>
    @yield('main-content')
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q"
        crossorigin="anonymous"></script>

</body>

</html>