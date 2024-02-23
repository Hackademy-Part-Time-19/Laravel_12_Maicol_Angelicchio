<x-main>
    <h1>CATEGORIE</h1>
    <ul class="list-group list-group-flush">
        @foreach($categories as $category)
        <li class="list-group-item">{{$category['name']}}</li>
        <div>
            <button type="button" class="btn btn-warning">
                <a href="{{ route('category.edit', ['category'=>$category->id])}}">Modified</a>
            </button>
            <form action=" {{ route('category.destroy', ['category'=>$category->id])}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </div>
        @endforeach
    </ul>
</x-main>