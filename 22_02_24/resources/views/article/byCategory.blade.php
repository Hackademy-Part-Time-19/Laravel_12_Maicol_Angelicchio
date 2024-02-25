<x-main>

    <h1 class="col-sm">ARTICOLI PER CATEGORIA: {{$categoryName}}</h1>

    <ul class="list-group list-group-flush">
        @foreach($articleByCategory as $article)
        <li class="list-group-item">{{$article['title']}}</li>
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