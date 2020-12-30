
@extends('layouts.layout')

@section('title')
    ALKEMY-APPS | {{$title}}
@endsection

@section('content')
<div class="main-body-content">
    <div class="container my-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{$title}}</div>
                    @include('components.deleteAppForm')
                    <div class="card-body">
                        <form method="POST" action="{{route('appUpdate', ['id' => $appl->id])}}" enctype="multipart/form-data">
                            @method('PUT')
                            @include('components.appForm', ['btntext'=>'Modificar'])
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
@endsection
