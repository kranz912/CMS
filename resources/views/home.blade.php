@extends('layouts.layout')

@section('title', 'Home')

@section('nav')
    @parent
@endsection
@section('content')

@include('components.header')

@include('components.featured')

@include('components.posts')

@endsection