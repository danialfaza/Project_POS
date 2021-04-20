@extends('layouts.master')
 
@section('content')
 
<div class="row">
    <div class="col-md-6">
        <h4>Masukan Barang</h4>
        <div class="box box-warning">
            
            <div class="box-body">
               <form role="form" method="post" action="{{url('barang/add')}}">
                @csrf
                  <div class="box-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Nama Barang</label>
                      <select class="form-control" id="pilih_barang">
                        @foreach($data_barang as $dt)
                        <option>{{$dt->barang_nama}}</option>
                        @endforeach
                      </select>
                      <!-- <input type="text" name="barang_id" value=""><br> -->
                      <label for="exampleInputEmail1">Jumlah Barang</label>
                      <input type="number" name="barang_jumlah" class="form-control" id="barang_jumlah" placeholder="Jumlah Barang">
                  </div>
            </div>
            <!-- /.box-body -->

            <div class="box-footer">
                <button id="tambah" class="btn btn-primary">Tambahkan</button>
            </div>
        </form>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <h4>Pembayaran</h4>
        <div class="box box-warning">
            
            <div class="box-body">
               <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                
                                <th>Nama Barang</th>
                                <th>Jumlah Barang</th>
                                <th>Total Harga</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            
                            <tr>
                                <td id="nama_brg"></td>
                                <td id="jumlah_brg"></td>
                                <td id="haga_brg"></td>
                            </tr>
                            <tr>
                                <td>Total Pembayaran</td>
                                <td>13.00000</td>
                            </tr>
                            
                        </tbody>
                        
                    </table>
            </div>
             <button  class="btn btn-danger">Batal</button>
             <button  class="btn btn-success">Bayar</button>
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

        $("#tambah").click(function(){
            
         
        });
 
    })

    

</script>
 
@endsection