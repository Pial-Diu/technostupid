@extends('frontend.master')

@section('title')
  Home
@endsection

@section('bottom-css')

@endsection

@section('bottom-scripts')

@endsection

@section('content')
  
  @include('frontend.includes.header')

  @include('frontend.includes.intro')

  @include('frontend.includes.about')
  
  @include('frontend.includes.projects')

  @include('frontend.includes.experience')

  @include('frontend.includes.contact')

@endsection