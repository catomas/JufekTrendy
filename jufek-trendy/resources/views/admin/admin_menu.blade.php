@extends('layouts.app')
<!-- Author: Juan Camilo Echeverri -->
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            {{ Breadcrumbs::render($data["id"]) }}
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="h1">
                    <div class="card-header"> {{$data["title"]}}</div>
                </div>
                <div class="d-grid gap-2 col-5 mx-auto">
                    @foreach ($data["routes"] as $route)
                    <a href="{{route($route["route"])}}" class="btn btn-primary btn-lg text-uppercase mx-auto mb-4" type="button"> {{$route["tittle"]}} </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

@endsection