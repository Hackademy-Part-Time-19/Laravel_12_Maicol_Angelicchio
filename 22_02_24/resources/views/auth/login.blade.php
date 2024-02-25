<x-main>
    <h1>Login</h1>
    <form action="/login" method="POST" class="mt-5 mx-auto col-lg-6">
    @csrf
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
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</x-main>