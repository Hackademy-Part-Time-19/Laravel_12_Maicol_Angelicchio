<x-main>
    @if(auth()->check() && auth()->user())
        <h1>BENVENUTO {{ auth()->user()->name }}</h1>
    @else
        <h1>BENVENTUTO</h1>
    @endif
</x-main>