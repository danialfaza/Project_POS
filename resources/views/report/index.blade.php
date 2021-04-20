@extends('layouts.master')
 
@section('content')
 
<div class="row">
    <div class="col-md-12">
        <h4>{{$title}}</h4>
        <div class="box box-warning">
             <div class="box-header">
                <p>
                    
                     <a href="{{url('report/excel')}}" class="btn btn-sm btn-flat btn btn-success">Export Excel</a>
                   
                    
                </p>
            </div>
            
            <div class="box-body">
              
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

        $("#tambah").click(function(){
            
         
        });
 
    })

    

</script>
 
@endsection