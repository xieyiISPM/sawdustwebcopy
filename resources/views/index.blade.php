@extends('layouts.app')

@section('content')
    <!-- sliding images-->
    <div class="container-fluid">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="img/living1.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="img/kitchen1.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="img/kitchen2.jpg" alt="Third slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="img/landry1.jpg" alt="Third slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="img/bath1.jpg" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <!-- cardgroup -->
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                    <img class="img-responsive center-block " src="img/group.png"  width="64px" style="margin:0 auto;" >
                    <div class="card-body">
                        <h5 class="card-title">About us</h5>
                        <p class="card-text">Ashby's Cabinetry will help meet your home cabinetry needs with top notch quality, materials, and service.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                    <img class="img-responsive center-block" src="img/jobs.png" alt="Card image cap" width="64px" style="margin:0 auto;" >
                    <div class="card-body">
                        <h5 class="card-title">Jobs</h5>
                        <p class="card-text">Check out Job status and setup. <br> </p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                    <img class="img-responsive " src="img/phone.png" alt="Card image cap" width="64px" style="margin:0 auto;"/>
                    <div class="card-body">
                        <h5 class="card-title">Contact us</h5>
                        <p class="card-text">10865 Goodson Rd. Middleton, Idaho 83644 <br>Call (208) 590-3403 <br> Email: 2joshashby@gmail.com</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                    </div>
                </div>
            </div>
        </div>
@endsection