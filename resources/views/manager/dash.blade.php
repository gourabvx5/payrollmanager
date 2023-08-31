@include('layouts.header') 


<div class="container w-50">
    <h3 class="p-3">Payroll Manager | Manager Leave Processing Center </h3>
</div>

<div class="container">
    @foreach($leaves as $leave)
<div class="row row-cols-1 my-auto">
  <div class="col">
    <div class="card p-3">
      <div class="card-body">
        <h5 class="card-title">Employee Name:{{$leave->name}}</h5>
        <h6 class="card-title">Employee Email:{{$leave->email}}</h6>
        <h6 class="card-title">Requested Leaves:{{$leave->leavedays}}</h6>
        <p class="card-text text-truncate">Leave Reason:{{$leave->leavereason}}</p>
        <a class="btn btn-warning" href="{{ route('leavereq.show', ['id' => $leave->id]) }}">Review Leave Request</a>
      </div>
    </div>
    @endforeach
  </div>

@include('layouts.footer')
