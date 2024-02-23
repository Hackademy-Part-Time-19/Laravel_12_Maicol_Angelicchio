<x-main>
    <h1>INSERISCI ARTICOLO</h1>

    @if(session()->has('success'))
        <h2 class="alert alert-success">{{session('success')}}</h2>
    @endif

    <form method="POST" action="{{ route('article.store')}}" class="mt-5 mx-auto col-lg-6">
        @csrf
        <div class="mb-3">
            <label class="form-label">Articolo</label>
            <input type="text" class="form-control" id="title" name="title">
            @error('title')<div><span class="text-danger">{{$message}}</span></div>@enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Categoria</label>
            <input type="text" class="form-control" id="category" name="category">
            @error('category')<div><span class="text-danger">{{$message}}</span></div>@enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Descrizione</label>
            <input type="text" class="form-control" id="description" name="description">
            @error('description')<div><span class="text-danger">{{$message}}</span></div>@enderror
        </div>
            <button type="submit" class="btn btn-primary">Inserisci</button>
    </form>
</x-main>