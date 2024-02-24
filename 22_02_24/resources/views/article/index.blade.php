<x-main>
   <div class="row">
        <h1 class="col-sm">ARTICOLI</h1>
        <button type="button" class="btn btn-primary col-sm"><a class="nav-link active" aria-current="page" href="{{ route ('article.create')}}">Inserisci articoli</a></button>
   </div>

    <ul class="list-group list-group-flush">
        @foreach($articles as $article)
        <li class="list-group-item">Articolo: {{$article['title']}}</li>
        <li class="list-group-item">Categoria: {{$article->category->name}}</li>
        <li class="list-group-item">Descrizione: {{$article['description']}}</li>
        <div>
            <button type="button" class="btn btn-warning">
                <a href="{{ route('article.edit', ['article'=>$article->id])}}">Modified</a>
            </button>
            <form action=" {{ route('article.destroy', ['article'=>$article->id])}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </div>
        @endforeach
    </ul>
</x-main>