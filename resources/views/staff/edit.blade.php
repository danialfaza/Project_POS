@extends('layouts.master')
 
@section('content')
 
<div class="row">
    <div class="col-md-12">
        <h4>{{ $title }}</h4>
        <div class="box box-warning">
            <div class="box-header">
            </div>
            <div class="box-body">
              @foreach($data_staff as $p)
               <form role="form" method="post" action="{{url('staff/update')}}">
                {{ csrf_field() }}
                
                  <div class="box-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Nama Staff</label>
                      <input type="text" name="staff_nama" class="form-control" id="staff_nama"  value="{{$p->staff_nama}}">
                      <label for="exampleInputEmail1">Alamat Staff</label>
                      <input type="text" name="staff_alamat" class="form-control" id="staff_alamat" value="{{$p->staff_alamat}}">
                      <label for="exampleInputEmail1">No Staff</label>
                      <input type="text" name="staff_no" class="form-control" id="staff_no"  value="{{$p->staff_no}}">
                      <label for="exampleInputEmail1">Gaji Staff</label>
                      <input type="text" name="staff_gaji" class="form-control" id="staff_gaji"  value="{{$p->staff_gaji}}">
                  </div>
            </div>
            <!-- /.box-body -->

            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
        @endforeach
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