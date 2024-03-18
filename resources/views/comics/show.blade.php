@extends('layouts.app')

@section('title', 'Laravel Comics Detail Page')

@section('cdns')
    <!-- Fontawesome -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css' integrity='sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==' crossorigin='anonymous'/>
@endsection

@section('main-content')
    @include('includes.comics.serie')
@endsection


@section('details')
    @include('includes.comics.details')
@endsection

@section('scripts')
   <script>
        // Prendo l'elemento che mi interessa
        const deleteForm = document.getElementById('delete-form');
        
        deleteForm.addEventListener('submit', e => {
            // Elimino il comportamento naturale del form
            e.preventDefault();
        
             // Chiedo la conferma all'utente
            const confirmation = confirm('Sei sicuro di voler eliminare {{$comic->title}}?');
        
            // Se conferma invio il form
            if(confirmation) deleteForm.submit();
        });
   </script>
@endsection 