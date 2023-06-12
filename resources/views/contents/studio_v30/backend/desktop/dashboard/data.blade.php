@extends('templates.'.$template.'.datatable')

@section('title', $panel_name)

@section('content')   
    <div id="datatable" class="mb-5">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-6">
                        Data {!!$panel_name!!} 
                    </div>
                    <div class="col-6">

                    </div> 
                </div>
            </div>
            <div class="card-body">      
                <div> 
                </div>
            </div>            
        </div>
    </div>
@endsection
