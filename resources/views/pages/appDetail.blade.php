
@extends('layouts.layout')

@section('title')
    ALKEMY-APPS | {{$title}} List
@endsection

@section('content')
@include('components.fullAppCard');
@endsection
