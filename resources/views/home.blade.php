@extends('layouts.app')

@section('title', 'Laravel Comics Layout')

@section('cdns')
    <!-- Fontawesome -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css' integrity='sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==' crossorigin='anonymous'/>
@endsection

@section('main-content')
    @include('includes.advice')
@endsection

@section('spam')
    <!-- Includo la sezione spam dalla cartella includes -->
    @include('includes.spam')
@endsection