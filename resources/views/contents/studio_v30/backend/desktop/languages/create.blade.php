@extends('templates.'.$template.'.form_plugin')

@section('title', $panel_name)

@section('content')   

    <form class="col-12" action="{{ route($content.'.store' ) }}" 
        method="POST"   
        > 
        @csrf    

        <div class="card mb-4">
            <x-studio_v30.general-form-card-header 
                view="{{ $view_file }}"  
                panel="{{ $panel_name }}"/>  
            <div class="card-body pb-4">      
                <div class="row justify-content-md-center">     
                    <div class="col-11"> 
 

                        <!-- Title -->
                        <div class="form-group row mb-3">
                                <label class="col-2 col-form-label">
                                    Title 
                                </label>
                                <div class="col-6">
                                    <input 
                                        type="text" 
                                        class="form-control form-control-lg"  
                                        name="name" 
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
                                        title="Contents"></textarea> 
                                </div>
                            </div>  
                    </div> 
                </div> 
            </div>            
        </div> 

        <x-studio_v30.button-submit />
    </form>

    <script>
        
  $('.summernote').summernote({
    height: 300
  });
    </script>
@endsection
