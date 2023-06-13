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
                    <div class="col-6 text-end"> 
                        <x-studio_v30.button-create content="{{$content}}" /> 
                    </div>
                </div>
            </div>
            <div class="card-body">      
                <div>
                    <table id="datatableDefault" class="table  ">
                        <thead class=" ">
                            <tr>               
                                <x-html.th-content-width title="No." width="10%" />  
                                <x-html.th-content title="Name"   />   
                                <x-html.th-content title="Description"   />   
                                <x-html.th-content-width title="Action" width="15%" /> 
                            </tr>
                        </thead>
                        <tbody>   

                            @forelse ($data as $row)
                                <tr>
                                    <td class="text-center">
                                        {{ $loop->iteration }}
                                    </td> 
                                    <td class="text-center">  
                                        {{ $row->name }}  
                                    </td>    
                                    <td class="text-left">  
                                        {{ $row->description }}  
                                    </td>    
                                    <td class="text-center"> 
                                        <x-studio_v30.menu-dropdown-data content="{{$content}}" id="{{$row->id}}" />  
                                    </td>  
                                </tr>
                                @empty 
                                    
                            @endforelse     
                        </tbody>
                    </table>   
                </div>
            </div>            
        </div>
    </div>
@endsection
