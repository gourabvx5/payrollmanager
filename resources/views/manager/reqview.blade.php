@include('layouts.header') 


<div class="container w-50">
    <h3 class="p-3">Payroll Manager | Manager Leave Processing Center </h3>
</div>

<div class="container">
    
<div class="row row-cols-1 my-auto">
  <div class="col">
    <div class="card p-3">
      <div class="card-body">
        <h5 class="card-title">Employee Name:{{$leaves->name}}</h5>
        <h6 class="card-title">Employee Email:{{$leaves->email}}</h6>
        <h6 class="card-title">Requested Leaves:{{$leaves->leavedays}}</h6>
        <p class="card-text display-6">Leave Reason:{{$leaves->leavereason}}</p>
        <a class="btn btn-success" href="/manager/dashboard">Back</a>
        <a class="btn btn-warning" href="/manager/leave/{$leaves->id}">Edit</a>
        </form>
      </div>
    </div>
    
  </div>

@include('layouts.footer')
