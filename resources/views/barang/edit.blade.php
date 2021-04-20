@extends('layouts.master')
 
@section('content')
 
<div class="row">
    <div class="col-md-12">
        <h4>{{ $title }}</h4>
        <div class="box box-warning">
            <div class="box-header">
            </div>
            <div class="box-body">
              @foreach($data_barang as $p)
               <form role="form" method="post" action="{{url('barang/update')}}">
                {{ csrf_field() }}
                
                  <div class="box-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Nama Barang</label>
                      <input type="text" name="barang_nama" class="form-control" id="barang_nama" placeholder="Nama Barang" value="{{$p->barang_nama}}">
                      <label for="exampleInputEmail1">Jumlah Barang</label>
                      <input type="number" name="barang_jumlah" class="form-control" id="barang_jumlah" placeholder="Jumlah Barang" value="{{$p->barang_jumlah}}">
                      <label for="exampleInputEmail1">Harga Barang</label>
                      <input type="number" name="barang_harga" class="form-control" id="barang_harga" placeholder="Harga Barang" value="{{$p->barang_harga}}">
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