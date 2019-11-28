<!-- index.html -->
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/assets/styles/bootstrap.min.css" >
    <title>Phòng Vận Hành</title>
    <!-- Link -->
{{--    <link rel="stylesheet" href="../../css/style.css">--}}
</head>
<body>
<header class="container" id="header">
    <div class="row">
        <div class="logo"><img src="/assets/images/logo.png" alt="logo VCB"></div>
        <div class="header align-content-center text-center m-auto text-danger">
            <h1>PHÒNG VẬN HÀNH</h1>
            <h3>Ngân Hàng TMCP Ngoại Thương Việt Nam</h3>
        </div>
    </div>
</header>
<!-- navbar -->
<section class="container ">
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#"> HOME </a>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Batch Processing Daily <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Monitoring System</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"> Sevice Desk System</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"> Document all system </a>
                </li>
            </ul>
            @if(!isset($isLogin))
                <form class="form-inline my-2 my-lg-0" action="{{route('login')}}" method="post">
                    <button class="btn btn-outline-success m-2 my-2 my-sm-0" type="submit">Đăng nhập </button>
                </form>

            @endif
            <form class="form-inline my-2 my-lg-0" action="{{route('home')}}" method="GET">
                <button class="btn btn-outline-danger  my-2 my-sm-0" type="submit">Đăng xuất  </button>
            </form>
        </div>
    </nav>
</section>


@section('contents')
@show

<footer>
    <div class="container">
        <div class="row text-center">
            <div class="col-md-4">
                <!-- <img src="./Images/logo.jpeg" style="height: 20%"> -->
                <h4>Phòng Vận Hành </h4>
                <hr class="light">
                <p>mymail@vietcombank.com.vn</p>
                <p>198 Trần Quang Khải street, Hanoi, Vietnam</p>
            </div>
            <div class="col-md-4">
                <!-- <hr class="light"> -->
                <h4>Working hours</h4>
                <hr class="light">
                <p> Phone : 024.39340595</p>
                <p>All time: 8am - 5pm - 8am</p>
            </div>
            <div class="col-md-4">
                <!-- <hr class="light"> -->
                <h4>Services</h4>
                <hr class="light">
                <p>Run Batch processing</p>
                <p>Monitor System</p>
                <p>Save tape in Storage</p>
            </div>
            <div class="col-12 ">
                <hr class="light-100">
                <h5>&copy; Giangbeo v1.1</h5>
            </div>
        </div>
    </div>
</footer>
<!-- Optional JavaScript -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="/assets/scripts/bootstrap.min.js" ></script>

@yield('inline-scripts')

</body>
</html>
