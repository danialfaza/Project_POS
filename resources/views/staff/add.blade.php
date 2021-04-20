@extends('layouts.master')
 
@section('content')
 
<div class="row">
    <div class="col-md-12">
        <h4>{{ $title }}</h4>
        <div class="box box-warning">
            <div class="box-header">
            </div>
            <div class="box-body">
               <form role="form" method="POST" action="{{url('staff/add')}}">
                @csrf
                  <div class="box-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Nama staff</label>
                      <input type="text" name="staff_nama" class="form-control" id="staff_nama" placeholder="Nama Staff">
                      <label for="exampleInputEmail1">Alamat staff</label>
                      <input type="text" name="staff_alamat" class="form-control" id="staff_alamat" placeholder="Alamat staff">
                      <label for="exampleInputEmail1">No staff</label>
                      <input type="number" name="staff_no" class="form-control" id="staff_no" placeholder="No staff">
                      <label for="exampleInputEmail1">Gaji staff</label>
                      <input type="number" name="staff_gai" class="form-control" id="staff_gai" placeholder="Gaji staff">
                  </div>
            </div>
            <!-- /.box-body -->

            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>
</div>
</div>

@endsection
 
@section('scripts')
 
<script type="text/javascript">
    $(document).ready(function(){
 
        // btn refresh
        $('.btn-refresh').click(function(e){
            e.preventDefault();
            $('.preloader').fadeIn();
            location.reload();
        })
 
    })
</script>
 
@endsection