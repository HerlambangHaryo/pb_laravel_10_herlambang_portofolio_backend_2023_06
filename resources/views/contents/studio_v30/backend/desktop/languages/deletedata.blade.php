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


                        <!-- Name -->
                        <div class="form-group row mb-3">
                                <label class="col-2 col-form-label">
                                    Name 
                                </label>
                                <div class="col-6">
                                    <input 
                                        type="text" 
                                        class="form-control form-control-lg"  
                                        name="name" 
                                        value="{{ old('name', $data->name) }}" 
                                        disabled
                                    >
                                </div>
                            </div>    

                            
                        <!-- Description -->
                            <div class="form-group row mb-3">
                                <label class="col-2 col-form-label">
                                    Description 
                                </label> 
                                <div class="col-8">
                                    <textarea 
                                        name="description" 
                                        class="summernote" 
                                        id="contents" 
                                        title="Contents" disabled>{{$data->description}}</textarea> 
                                </div>
                            </div>  
                    </div> 
                </div> 
            </div>            
        </div> 

        <x-studio_v30.button-submit />
    </form> 
@endsection
