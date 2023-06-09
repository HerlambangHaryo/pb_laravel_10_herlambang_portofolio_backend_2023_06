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
                    <table id="datatableDefault" class="table  ">
                        <thead class=" ">
                            <tr>               
                                <x-html.th-content-width title="No." width="10%" />
                                <x-html.th-content title="Name"   />  
                                <x-html.th-content title="Logo"   /> 
                                <x-html.th-content title="ico"   />  
                                <x-html.th-content title="Theme"   />  
                                <x-html.th-content title="Mode"   />  
                                <x-html.th-content title="Color"   />  
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
                                        <!-- card-img --> 
                                            <img 
                                                width="100%"
                                                src="{{ asset('/storage/aboutapp/').'/'.$row->logo }}" 
                                                alt=""> 

                                        <!-- card-img --> 
                                        <img 
                                                width="100%"
                                                src="{{ public_path('/storage/aboutapp/').'/'.$row->logo }}" 
                                                alt=""> 

                                                

                                        <!-- card-img --> 
                                        <img 
                                                width="100%"
                                                src="{{ public_path('/public/storage/aboutapp/').'/'.$row->logo }}" 
                                                alt=""> 

                                        <!-- card-img --> 
                                            <img 
                                                width="100%"
                                                src="{{ asset('/public/studio_v30/assets/img/user/').'/profile.jpg' }}" 
                                                alt=""> 
                                    </td>  
                                    <td class="text-left">  
                                        <!-- card-img --> 
                                            <img 
                                                width="100%"
                                                src="{{ asset('/public/storage/aboutapp/').'/'.$row->ico }}" 
                                                alt=""> 
                                        <!-- card-img --> 
                                            <img 
                                                width="100%"
                                                src="{{ asset('/public/aboutapp/').'/'.$row->ico }}" 
                                                alt=""> 
                                        <!-- card-img --> 
                                            <img 
                                                width="100%"
                                                src="{{ Storage::url('aboutapp/z1APNxLsuhJzJqfZzglRZZhFotkPtqc6FI2kYINy.png') }}" 
                                                alt=""> 
                                        <!-- card-img --> 
                                            <img 
                                                width="100%"
                                                src="{{ Storage::url('aboutapp/'.$row->logo) }}" 
                                                alt=""> 


                                                <img 
                                                width="100%"
                                                src="http://laravel.herlambangharyo.my.id/public/storage/aboutapp/z1APNxLsuhJzJqfZzglRZZhFotkPtqc6FI2kYINy.png" 
                                                alt=""> 
                                                
                                    </td> 
                                    <td class="text-center">  
                                        {{ $row->theme }}  
                                        
                                        <!-- card-img --> 
                                        <img 
                                                width="100%"
                                                src="{{ asset('/storage/app/public/aboutapp/').'/'.$row->ico }}" 
                                                alt=""> 
                                        <!-- card-img --> 
                                            <img 
                                                width="100%"
                                                src="{{ asset('/storage/app/public/aboutapp/'.$row->ico) }}" 
                                                alt=""> 
                                        <!-- card-img --> 
                                            <img 
                                                width="100%"
                                                src="{{ asset('/storage/app/public/aboutapp/profile.jpg') }}" 
                                                alt=""> 
                                    </td>  
                                    <td class="text-center">  
                                        {{ $row->mode }}  
                                    </td>  
                                    <td class="text-center">  
                                        {{ $row->color }}  
                                    </td>    
                                    <td class="text-center"> 
                                        <a href="{{ route($content.'.edit', $row->id ) }}" 
                                            class="btn btn-default btn-sm" >
                                            <i class="far fa-edit fa-fw ms-auto text-dark text-opacity-50"></i>
                                            Edit  
                                        </a>      
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
