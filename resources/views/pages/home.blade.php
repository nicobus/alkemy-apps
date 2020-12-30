
@extends('layouts.layout')

@section('title')
    ALKEMY-APPS | Home
@endsection

@section('content')
<div class="aplicaciones mx-4">
    <h2 class="m-3">Apps</h2>
    <div class="row">
        @foreach ($apps as $aplication)
           @include('components.basicAppCard')
       @endforeach
    </div>
    <p>{{$apps->links()}}</p>
</div>
@endsection
