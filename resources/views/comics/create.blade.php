@extends('layouts.app')

@section('title', 'Create Comic')

@section('main-content')
 @include('includes.create_comic')
@endsection

@section('spam')
    <!-- Includo la sezione spam dalla cartella includes -->
    @include('includes.spam')
@endsection
