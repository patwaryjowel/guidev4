@extends('backend.master.index')
@section('content')
@include('backend.page.manage-testimonial')
@endsection


@section('customcss')
  <!-- Plugin CSS (Plugins Files for only this Page) -->
    <link rel="stylesheet" href="{{asset('admin/assets/css/plugins/chart/apexcharts.css')}}" />
    <link rel="stylesheet" href="{{asset('admin/assets/css/plugins/jqvmap.css')}}" />
    <link rel="stylesheet" href="{{asset('admin/assets/css/plugins/datatables.min.css')}}" />

@endsection
@section('customscript')
   <!-- Plugins & Activation JS For Only This Page -->

    <!-- Apex Chart Script -->
    <script src="{{asset('admin/assets/js/plugins/chart/apexcharts/apexcharts.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/plugins/chart/apexcharts/homeOne.js')}}"></script>

    <!-- VMap Script -->
    <script src="{{asset('admin/assets/js/plugins/jvmap/jquery.vmap.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/plugins/jvmap/maps/jquery.vmap.world.js')}}"></script>
    <script src="{{asset('admin/assets/js/plugins/jvmap/maps/samples/jquery.vmap.sampledata.js')}}"></script>

    
@endsection