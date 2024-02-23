<x-main>
    <h1>INSERISCI CATEGORIA</h1>

    @if(session()->has('success'))
        <h2 class="alert alert-success">{{session('success')}}</h2>
    @endif

    <form method="POST" action="{{ route('category.store')}}" class="mt-5 mx-auto col-lg-6">
        @csrf
        <div class="mb-3">
            <label class="form-label">Categoria</label>
            <input type="text" class="form-control" id="name" name="name">
            @error('name')<div><span class="text-danger">{{$message}}</span></div>@enderror
        </div>
            <button type="submit" class="btn btn-primary">Inserisci</button>
    </form>
</x-main>