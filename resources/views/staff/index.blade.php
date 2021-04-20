@extends('layouts.master')
 
@section('content')
 
<div class="row">
    <div class="col-md-12">
        <h4>{{ $title }}</h4>
        <div class="box box-warning">
            <div class="box-header">
                <p>
                    <button class="btn btn-sm btn-flat btn-warning btn-refresh"><i class="fa fa-refresh"></i> Refresh</button>
                     <a href="{{url('staff/add')}}" class="btn btn-sm btn-flat btn-primary">Tambah</a>
                    
                </p>
            </div>
            <div class="box-body">
            	<div class="table-responsive">
            		<table class="table">
            			<thead>
            				<tr>
            					
            					<th>Nama</th>
                                <th>Alamat</th>
            					<th>No HP</th>
            					<th>Gaji</th>
            					<th>Aksi</th>
            				</tr>
            			</thead>
            			<tbody>
            				@foreach($data_staff as $staff)
            				<tr>
            					<td>{{$staff->staff_nama}}</td>
            					<td>{{$staff->staff_alamat}}</td>
                                <td>{{$staff->staff_no}}</td>
            					<td>{{$staff->staff_gaji}}</td>
            					<td><div style="width:60px">
            						<a href="{{url('staff/'.$staff->staff_id)}}" class="btn btn-warning btn-xs btn-edit" id="edit"><i class="fa fa-pencil-square-o"></i></a>
            						<a href="{{url('staff/hapus/'.$staff->staff_id)}}" class="btn btn-danger btn-xs" id="delete"><i class="fa fa-trash-o"></i></a></div></td>
            				</tr>
            				@endforeach
            			</tbody>
            			
            		</table>
            		
            	</div>
               
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