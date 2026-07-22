@extends('layouts.app')

@section('title', 'Miyami restaurant - Fresh Food Every Day')
@section('description', 'Miyami restaurant offers the best cuisine in town, with a focus on fresh ingredients and exceptional service.')
@section('keywords', 'Miyami, restaurant, good food, cuisine, dining')

@section('content')
    @include('sections.banner')
    @include('sections.offer')
    @include('sections.food')
    @include('sections.about')
    @include('sections.book')
    @include('sections.client')
@endsection