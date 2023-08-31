@include('layouts.header')

<div class="container">
<form method="POST" action="/employee/login" class="form-group w-50 ms-auto me-auto mt-5">
    @csrf
    <h2>Payroll Manager | Manager Login</h2>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
    @error('email')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
    @enderror
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" name="password" id="exampleInputPassword1">
    @error('password')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
    @enderror
  </div>
  <button type="submit" class="btn btn-outline-dark">Login</button>
</form>
</div>

@include('layouts.footer')