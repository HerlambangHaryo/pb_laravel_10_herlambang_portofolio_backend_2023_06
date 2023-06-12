@extends('templates.'.$template.'.form_plugin')

@section('title', $panel_name)

@section('content')   

    <form class="col-12"  
        action="{{ route($content.'.destroy', $data->id ) }}" 
        method="POST"  
        enctype="multipart/form-data" 
        > 
        @csrf    
        @method('DELETE') 

        <div class="card mb-4">
            <x-studio_v30.general-form-card-header 
                view="{{ $view_file }}"  
                panel="{{ $panel_name }}"/>  
            <div class="card-body pb-4">      
                <div class="row justify-content-md-center">     
                    <div class="col-11"> 

                        <!-- Company -->
                            <div class="form-group row mb-3">
                                <label class="col-2 col-form-label">
                                    Company 
                                </label>
                                <div class="col-6">
                                    <input 
                                        type="text" 
                                        class="form-control form-control-lg"  
                                        name="company" 
                                        value="{{ old('company', $data->company) }}" 
                                        disabled
                                    >
                                </div>
                            </div>   

                        <!-- Company Logo -->
                            <div class="form-group row mb-3">
                                <label class="col-2 col-form-label">
                                    Company Logo 
                                </label>
                                <div class="col-6">
                                    <input 
                                        type="file" 
                                        class="form-control form-control-lg"  
                                        name="company_logo"  
                                        disabled
                                    >
                                </div>
                            </div>  

                        <!-- City -->
                            <div class="form-group row mb-3">
                                <label class="col-2 col-form-label">
                                    City 
                                </label>
                                <div class="col-3">
                                    <input 
                                        type="text" 
                                        class="form-control form-control-lg"  
                                        name="city" 
                                        value="{{ old('city', $data->city) }}" 
                                        disabled
                                    >
                                </div>
                            </div>     

                        <!-- Country -->
                            <div class="form-group row mb-3">
                                <label class="col-2 col-form-label">
                                    Country 
                                </label>
                                <div class="col-4">
                                    <input 
                                        type="text" 
                                        class="form-control form-control-lg"  
                                        name="country" 
                                        value="{{ old('country', $data->country) }}" 
                                        disabled
                                    >
                                </div>
                            </div>    

                        <!-- Title -->
                            <div class="form-group row mb-3">
                                <label class="col-2 col-form-label">
                                    Title 
                                </label>
                                <div class="col-6">
                                    <input 
                                        type="text" 
                                        class="form-control form-control-lg"  
                                        name="title" 
                                        value="{{ old('title', $data->title) }}" 
                                        disabled
                                    >
                                </div>
                            </div>   
                        <!-- start -->
                            <div class="form-group row mb-3">
                                <label class="col-2 col-form-label">
                                    Date Start 
                                </label>
                                <div class="col-4">
                                    <input 
                                        type="date" 
                                        class="form-control form-control-lg"  
                                        name="date_start" 
                                        value="{{ old('date_start', $data->date_start) }}" 
                                        disabled
                                    >
                                </div>
                            </div>   
                        <!-- end -->
                            <div class="form-group row mb-3">
                                <label class="col-2 col-form-label">
                                    Date End 
                                </label>
                                <div class="col-4">
                                    <input 
                                        type="date" 
                                        class="form-control form-control-lg"  
                                        name="date_end" 
                                        value="{{ old('date_end', $data->date_end) }}" 
                                        disabled
                                    >
                                </div>
                            </div>   

                            
                        <!-- Task -->
                            <div class="form-group row mb-3">
                                <label class="col-2 col-form-label">
                                    Task 
                                </label> 
                                <label class="col-8 col-form-label">
                                    {!!$data->task!!} 
                                </label>  
                            </div>  
                    </div> 
                </div> 
            </div>            
        </div> 

        <x-studio_v30.button-submit />
    </form> 
@endsection
