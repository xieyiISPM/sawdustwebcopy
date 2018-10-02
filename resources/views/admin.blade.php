@extends('layouts.app')

@section('title')

    Login

@endsection

@section('content')
    <div class="container mt-5 mb-5 ">
        <div class="row justify-content-md-center">
            <div class="col col-lg-2">
            </div>
            <div class="col-md-auto ">
            <div class="card  shadow" style="width: 40rem; background-color: #e1f5fe;">
                <div class="card-body ">
                    @include('inc.adminform')
                </div>
            </div>
            </div>
            <div class="col col-lg-2">
            
            </div>
        </div>
</div>
@stop