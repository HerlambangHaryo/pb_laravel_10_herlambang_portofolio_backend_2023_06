@extends('templates.'.$template.'.form_plugin')

@section('title', $panel_name)

@section('content')   

    <form class="col-12" action="{{ route($content.'.store' ) }}" 
        method="POST"  
        enctype="multipart/form-data" 
        > 
        @csrf    

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
                                    >
                                </div>
                            </div>   

                            
                        <!-- Task -->
                            <div class="form-group row mb-3">
                                <label class="col-2 col-form-label">
                                    Task 
                                </label> 
                                <div class="col-8">
                                    <textarea 
                                        name="task" 
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
