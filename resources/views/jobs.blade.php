@extends('layouts.app')
@section('title')
    jobs
@endsection
@section('content')
<div class="card text-center">
            <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Living Room</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Master Bath</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#">Kitchen</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#">Bath rooms</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#">Laundry Room</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#">Others</a>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <h5 class="card-title">Special title treatment</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
@endsection