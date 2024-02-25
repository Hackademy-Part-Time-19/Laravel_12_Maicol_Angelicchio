<x-main>
    <h1>Register</h1>
    <form action="/register" method="POST" class="mt-5 mx-auto col-lg-6">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" aria-describedby="name" name="name">
        @error('name') <span class="small text-danger">{{$message}}</span>@enderror
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" class="form-control" id="email" aria-describedby="email" name="email">
        @error('email') <span class="small text-danger">{{$message}}</span>@enderror
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password">
        @error('password') <span class="small text-danger">{{$message}}</span>@enderror
    </div>
    <div class="mb-3">
        <label for="password_confirmation" class="form-label">Password confirmation</label>
        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
        @error('password_confirmation') <span class="small text-danger">{{$message}}</span>@enderror
    </div>
    <button type="submit" class="btn btn-primary">Register</button>
    </form>
</x-main>