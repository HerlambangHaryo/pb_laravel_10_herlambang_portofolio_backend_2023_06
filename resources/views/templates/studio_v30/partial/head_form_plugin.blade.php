<meta charset="utf-8" />
<title>@yield('title')</title>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta name="description" content="@yield('metaDescription')" />
<meta name="author" content="@yield('metaAuthor')" />
<meta name="keywords" content="@yield('metaKeywords')" />

<!-- ================== BEGIN core-css ================== -->
<link href="{{ asset('/public/studio_v30') }}/assets/css/vendor.min.css" rel="stylesheet" />
<link href="{{ asset('/public/studio_v30') }}/assets/css/app.min.css" rel="stylesheet" />
<!-- ================== END core-css ================== -->

<!-- ================== BEGIN page-css ================== -->
<link href="{{ asset('/public/studio_v30') }}/assets/plugins/tag-it/css/jquery.tagit.css" rel="stylesheet" />
<link href="{{ asset('/public/studio_v30') }}/assets/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css" rel="stylesheet" />
<link href="{{ asset('/public/studio_v30') }}/assets/plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" />
<link href="{{ asset('/public/studio_v30') }}/assets/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css" rel="stylesheet" />
<link href="{{ asset('/public/studio_v30') }}/assets/plugins/bootstrap-slider/dist/css/bootstrap-slider.min.css" rel="stylesheet" />
<link href="{{ asset('/public/studio_v30') }}/assets/plugins/blueimp-file-upload/css/jquery.fileupload.css" rel="stylesheet" />
<link href="{{ asset('/public/studio_v30') }}/assets/plugins/summernote/dist/summernote-lite.css" rel="stylesheet" />
<link href="{{ asset('/public/studio_v30') }}/assets/plugins/spectrum-colorpicker2/dist/spectrum.min.css" rel="stylesheet" />
<link href="{{ asset('/public/studio_v30') }}/assets/plugins/select-picker/dist/picker.min.css" rel="stylesheet" />
<!-- ================== END page-css ================== -->

{!! define_aboutapp('ico') !!}
@stack('css')
