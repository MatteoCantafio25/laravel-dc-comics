@session('message')
    <div class="alert alert-{{session('type', 'success')}} alert-dismissible fade show" role="alert">
        <p class="mb-0">{{$value}}</p>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endsession