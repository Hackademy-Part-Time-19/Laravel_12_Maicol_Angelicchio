<x-main>
    <div class="row">
        <h1 class="col-sm">CATEGORIE</h1>
        <button type="button" class="btn btn-primary col-sm"><a class="nav-link active" aria-current="page" href="{{ route('category.create')}}">Inserisci categorie</a></button>
    </div>

    <ul class="list-group list-group-flush">
        @foreach($categories as $category)
        <li class="list-group-item">{{$category['name']}}</li>
        <div class="row">
            <div class="col-sm-4">
                <button type="button" class="btn btn-warning">
                    <a href="{{ route('category.edit', ['category'=>$category->id])}}">Modified</a>
                </button>
            </div>
            <div class="col-sm-4">
                <form action=" {{ route('category.destroy', ['category'=>$category->id])}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
            <div class="col-sm-4">
                <button type="button" class="btn btn-success">
                    <a href="{{ route('byCategory', ['category'=>$category])}}">Articoli</a>
                </button>
            </div>
        </div>
        @endforeach
    </ul>
</x-main>