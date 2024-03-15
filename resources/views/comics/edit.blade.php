@extends('layouts.app')

@section('title', 'Edit Comic')

@section('main-content')
 @include('includes.forms.edit_comic')
@endsection

@section('spam')
    <!-- Includo la sezione spam dalla cartella includes -->
    @include('includes.spam')
@endsection