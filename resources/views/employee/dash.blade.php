@include('layouts.header') 


<div class="container w-50">
    <h3 class="p-3">Payroll Manager | Employee Leave Application </h3>
<form class="row g-3" action="/employee/leaverequest" method="post">
  <div class="col-md-6">
    <label for="name" class="form-label">Employee Name</label>
    <input type="name" class="form-control" id="name" name="name">
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" class="form-control" id="email" name="email">
  </div>
  <div class="col-12">
  <label for="leavereason" class="form-label">Reason For Leave</label>   
  <textarea class="w-100" name="leavereason" id="leavereason" cols="60" rows="5"></textarea>  
  </div>
  <div class="col-md-12">
    <label for="inputCity" class="form-label">How Many Leaves Do You Require ?</label>
    <input type="text" class="form-control" id="leavedays" name="leavedays">
  </div>
  <div class="col-md-12">
    <label for="inputState" class="form-label">Type Of Leave (Annual/Sick/Emeergency)</label>
    <input type="text" class="form-control" id="leavetype" name="leavetype">
</div>
<h3 class="pt-1">Total Leavs alloted for you</h3>
  <div class="col-md-4">
    <label for="inputZip" class="form-label">Annual Leaves</label>
    <input type="text" class="form-control" id="annual" name="annual" value="20" >
  </div>
  <div class="col-md-4">
    <label for="inputZip" class="form-label">Sick Leaves</label>
    <input type="text" class="form-control" id="sick" name="sick" value="20">
  </div>
  <div class="col-md-4">
    <label for="inputZip" class="form-label">Emeergency Leaves</label>
    <input type="text" class="form-control" id="emergency" name="emergency" value="10">
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-outline-success">Apply For Leave</button>
  </div>
</form>
</div>


@include('layouts.footer')
