
@extends('layouts.layout')

@section('title')
    ALKEMY-APPS | Categories List
@endsection

@section('content')
<div class="aplicaciones mx-4">
    <h2 class="m-3">Categorias:</h2>
    
           @include('components.categoriesList')
       
    </div>
</div>

   
@endsection
