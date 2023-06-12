<!DOCTYPE html>
<html  
	lang="{{ app()->getLocale() }}"{{ (!empty($htmlAttribute)) ? $htmlAttribute : '' }}  
	class="{!! define_aboutapp('mode') !!}">
    <head>
        @include('templates.'.$template.'.partial.head_form_plugin') 
    </head>
    <body class="pace-done theme-{!! define_aboutapp('color') !!}"> 
        <!-- BEGIN #app -->
        <div id="app" class="app {{ (!empty($appClass)) ? $appClass : '' }}">
            <!-- BEGIN #header --> 
            @include('templates.'.$template.'.partial.header')
            <!-- END #header -->
            
            <!-- BEGIN #sidebar --> 
            <x-studio_v30.sidebar-nav title="{!!$active_as!!}"/>
            <!-- END #sidebar -->
            
            <!-- BEGIN #content -->
            
            <div id="content" class="app-content">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-12">							
                            <x-studio_v30.breadcrumb link2="{{ route($content.'.index') }}" level2="{!!$panel_name!!}" level3="{!!$view_file!!}" /> 				
                            @yield('content')
                        </div>
                    </div>
                </div>
            </div>
            <!-- END #content -->
            
            <!-- BEGIN btn-scroll-top -->
            <a href="#" data-click="scroll-top" class="btn-scroll-top fade"><i class="fa fa-arrow-up"></i></a>
            <!-- END btn-scroll-top -->
            <!-- BEGIN theme-panel -->
            <div class="theme-panel">
                <a href="javascript:;" data-click="theme-panel-expand" class="theme-collapse-btn"><i class="fa fa-cog"></i></a>
                <div class="theme-panel-content">
                    <ul class="theme-list clearfix">
                        <li><a href="javascript:;" class="bg-red" data-theme="theme-red" data-click="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Red" data-original-title="" title="">&nbsp;</a></li>
                        <li><a href="javascript:;" class="bg-pink" data-theme="theme-pink" data-click="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Pink" data-original-title="" title="">&nbsp;</a></li>
                        <li><a href="javascript:;" class="bg-orange" data-theme="theme-orange" data-click="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Orange" data-original-title="" title="">&nbsp;</a></li>
                        <li><a href="javascript:;" class="bg-yellow" data-theme="theme-yellow" data-click="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Yellow" data-original-title="" title="">&nbsp;</a></li>
                        <li><a href="javascript:;" class="bg-lime" data-theme="theme-lime" data-click="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Lime" data-original-title="" title="">&nbsp;</a></li>
                        <li><a href="javascript:;" class="bg-green" data-theme="theme-green" data-click="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Green" data-original-title="" title="">&nbsp;</a></li>
                        <li><a href="javascript:;" class="bg-teal" data-theme="theme-teal" data-click="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Teal" data-original-title="" title="">&nbsp;</a></li>
                        <li><a href="javascript:;" class="bg-cyan" data-theme="theme-cyan" data-click="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Aqua" data-original-title="" title="">&nbsp;</a></li>
                        <li class="active"><a href="javascript:;" class="bg-blue" data-theme="" data-click="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Default" data-original-title="" title="">&nbsp;</a></li>
                        <li><a href="javascript:;" class="bg-purple" data-theme="theme-purple" data-click="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Purple" data-original-title="" title="">&nbsp;</a></li>
                        <li><a href="javascript:;" class="bg-indigo" data-theme="theme-indigo" data-click="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Indigo" data-original-title="" title="">&nbsp;</a></li>
                        <li><a href="javascript:;" class="bg-gray-600" data-theme="theme-gray-600" data-click="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Gray" data-original-title="" title="">&nbsp;</a></li>
                    </ul>
                    <hr class="mb-0" />
                    <div class="row mt-10px pt-3px">
                        <div class="col-9 control-label text-dark fw-bold">
                            <div>Dark Mode <span class="badge bg-primary ms-1 position-relative py-4px px-6px" style="top: -1px">NEW</span></div>
                            <div class="lh-14 fs-13px">
                                <small class="text-dark opacity-50">
                                    Adjust the appearance to reduce glare and give your eyes a break.
                                </small>
                            </div>
                        </div>
                        <div class="col-3 d-flex">
                            <div class="form-check form-switch ms-auto mb-0 mt-2px">
                                <input type="checkbox" class="form-check-input" name="app-theme-dark-mode" id="appThemeDarkMode" value="1" />
                                <label class="form-check-label" for="appThemeDarkMode">&nbsp;</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END theme-panel -->
        </div>
        <!-- END #app -->
          
        @include('templates.'.$template.'.partial.scripts') 
        
        <!-- ================== BEGIN page-js ================== -->
        <script src="{{ asset('/public/studio_v30') }}/assets/plugins/jquery-migrate/dist/jquery-migrate.min.js"></script>
        <script src="{{ asset('/public/studio_v30') }}/assets/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
        <script src="{{ asset('/public/studio_v30') }}/assets/plugins/moment/min/moment.min.js"></script>
        <script src="{{ asset('/public/studio_v30') }}/assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
        <script src="{{ asset('/public/studio_v30') }}/assets/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
        <script src="{{ asset('/public/studio_v30') }}/assets/plugins/bootstrap-slider/dist/bootstrap-slider.min.js"></script>
        <script src="{{ asset('/public/studio_v30') }}/assets/plugins/bootstrap-3-typeahead/bootstrap3-typeahead.js"></script>
        <script src="{{ asset('/public/studio_v30') }}/assets/plugins/jquery.maskedinput/src/jquery.maskedinput.js"></script>
        <script src="{{ asset('/public/studio_v30') }}/assets/plugins/tag-it/js/tag-it.min.js"></script>
        <script src="{{ asset('/public/studio_v30') }}/assets/plugins/blueimp-file-upload/js/vendor/jquery.ui.widget.js"></script>
        <script src="{{ asset('/public/studio_v30') }}/assets/plugins/blueimp-tmpl/js/tmpl.min.js"></script>
        <script src="{{ asset('/public/studio_v30') }}/assets/plugins/blueimp-load-image/js/load-image.all.min.js"></script>
        <script src="{{ asset('/public/studio_v30') }}/assets/plugins/blueimp-canvas-to-blob/js/canvas-to-blob.min.js"></script>
        <script src="{{ asset('/public/studio_v30') }}/assets/plugins/blueimp-gallery/js/jquery.blueimp-gallery.min.js"></script>
        <script src="{{ asset('/public/studio_v30') }}/assets/plugins/blueimp-file-upload/js/jquery.iframe-transport.js"></script>
        <script src="{{ asset('/public/studio_v30') }}/assets/plugins/blueimp-file-upload/js/jquery.fileupload.js"></script>
        <script src="{{ asset('/public/studio_v30') }}/assets/plugins/blueimp-file-upload/js/jquery.fileupload-process.js"></script>
        <script src="{{ asset('/public/studio_v30') }}/assets/plugins/blueimp-file-upload/js/jquery.fileupload-image.js"></script>
        <script src="{{ asset('/public/studio_v30') }}/assets/plugins/blueimp-file-upload/js/jquery.fileupload-audio.js"></script>
        <script src="{{ asset('/public/studio_v30') }}/assets/plugins/blueimp-file-upload/js/jquery.fileupload-video.js"></script>
        <script src="{{ asset('/public/studio_v30') }}/assets/plugins/blueimp-file-upload/js/jquery.fileupload-validate.js"></script>
        <script src="{{ asset('/public/studio_v30') }}/assets/plugins/blueimp-file-upload/js/jquery.fileupload-ui.js"></script>
        <script src="{{ asset('/public/studio_v30') }}/assets/plugins/summernote/dist/summernote-lite.min.js"></script>
        <script src="{{ asset('/public/studio_v30') }}/assets/plugins/spectrum-colorpicker2/dist/spectrum.min.js"></script>
        <script src="{{ asset('/public/studio_v30') }}/assets/plugins/select-picker/dist/picker.min.js"></script>
        <script src="{{ asset('/public/studio_v30') }}/assets/plugins/highlight.js/highlight.min.js"></script>
        <script src="{{ asset('/public/studio_v30') }}/assets/js/demo/highlightjs.demo.js"></script>
        <script src="{{ asset('/public/studio_v30') }}/assets/js/demo/form-plugins.demo.js"></script>
        <!-- ================== END page-js ================== -->
    </body>
</html>
