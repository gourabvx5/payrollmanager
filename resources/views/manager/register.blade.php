@include('layouts.header')

<div class="container">
<form method="POST" action="/manager/register" class="form-group w-50 ms-auto me-auto mt-5">
    @csrf
    <h2>Payroll Manager | Manager Registration</h2>
  <div class="mb-3">
    <label for="name" class="form-label">Full Name</label>
    <input type="name" class="form-control" id="name" name="name" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" name="password" id="exampleInputPassword1">
  </div>
    <input type="hidden" value="0" name="usertype" id="usertype">
  <button type="submit" class="btn btn-outline-dark">Submit</button>
</form>
</div>

@include('layouts.footer')