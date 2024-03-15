<div class="container">
    <div class="card my-5">
        <div class="card-title d-flex align-items-center justify-content-between p-3">
            <h1 class="mb-0">Add Comic form</h1>
            <a class="btn btn-secondary" href="{{route('comics.index')}}">Go Back</a>
        </div>
        <div class="card-body p-3">
            @if($errors->any())
                <div class="alert alert-danger">
                    <h4 class="mb-3">Some fields are invalid</h4>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{route('comics.store')}}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" name="title" class="form-control" id="title" placeholder="Title" value="{{old('title')}}">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="thumb" class="form-label">Thumbnail</label>
                            <input type="text" name="thumb" class="form-control" id="thumb" placeholder="Thumb" value="{{old('thumb')}}">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="price" class="form-label">Price</label>
                            <input type="text" name="price" class="form-control" id="price" placeholder="Price" value="{{old('price')}}">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="series" class="form-label">Series</label>
                            <input type="text" name="series" class="form-control" id="series" placeholder="Series" value="{{old('series')}}">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="artists" class="form-label">Artists</label>
                            <input type="text" name="artists" class="form-control" id="artists" placeholder="Artists" value="{{old('artists')}}">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="writers" class="form-label">Writers</label>
                            <input type="text" name="writers" class="form-control" id="writers" placeholder="Writers" value="{{old('writers')}}">
                        </div>
                    </div>
                    <div class="col-6">
                        <label for="type" class="form-label">Type</label>
                        <select class="form-select" name="type" id="type">
                            <option>select</option>
                            <option @if(old('type', '') === 'comic book') selected @endif value="comic book">comic book</option>
                            <option @if(old('type', '') === 'graphic novel') selected @endif value="graphic novel">graphic novel</option>
                        </select>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="sale_date" class="form-label">Sale date</label>
                            <input type="date" name="sale_date" class="form-control" id="sale_date" placeholder="Sale date" value="{{old('sale_date')}}">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea name="description" class="form-control" id="description" placeholder="Description" rows="3">{{old('descriprion', '')}}</textarea>
                        </div>
                    </div>
                </div>
                <div class="d-flex align-items-center justify-content-end gap-2">
                    <button type="submit" class="btn btn-success">Save</button>
                    <button type="reset" class="btn btn-secondary">Empty the field</button>
                </div>
            </form>
        </div>
    </div>
</div>