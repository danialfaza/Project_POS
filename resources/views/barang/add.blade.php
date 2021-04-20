@extends('layouts.master')
 
@section('content')
 
<div class="row">
    <div class="col-md-12">
        <h4>{{ $title }}</h4>
        <div class="box box-warning">
            <div class="box-header">
            </div>
            <div class="box-body">
               <form role="form" method="post" action="{{url('barang/add')}}">
                @csrf
                  <div class="box-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Nama Barang</label>
                      <input type="text" name="barang_nama" class="form-control" id="barang_nama" placeholder="Nama Barang">
                      <label for="exampleInputEmail1">Jumlah Barang</label>
                      <input type="number" name="barang_jumlah" class="form-control" id="barang_jumlah" placeholder="Jumlah Barang">
                      <label for="exampleInputEmail1">Harga Barang</label>
                      <input type="number" name="barang_harga" class="form-control" id="barang_harga" placeholder="Harga Barang">
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