@extends('backend.master.index')
@section('content')
@include('backend.page.index')
@endsection


@section('customcss')
 <!-- Plugin CSS (Plugins Files for only this Page) -->
    <link rel="stylesheet" href="{{asset('admin/assets/css/plugins/chart/apexcharts.css')}}" />
    <link rel="stylesheet" href="{{asset('admin/assets/css/plugins/jqvmap.css')}}" />
    <link rel="stylesheet" href="{{asset('admin/assets/css/plugins/datatables.min.css')}}" />
  @endsection



  @section('customscript')
  <!-- Apex Chart Script -->
    <script src="{{asset('admin/assets/js/plugins/chart/apexcharts/apexcharts.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/plugins/chart/apexcharts/homeOne.js')}}"></script>

    <!-- VMap Script -->
    <script src="{{asset('admin/assets/js/plugins/jvmap/jquery.vmap.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/plugins/jvmap/maps/jquery.vmap.world.js')}}"></script>
    <script src="{{asset('admin/assets/js/plugins/jvmap/maps/samples/jquery.vmap.sampledata.js')}}"></script>
    <script>
        $("#vmap-world").vectorMap({
            map: "world_en",
            backgroundColor: "transparent",
            color: "#006491",
            hoverColor: "#014E72",
            selectedColor: "#014E72",
            borderColor: "#ffffff",
            enableZoom: false,
            values: sample_data,
            scaleColors: ["#006491", "#9FD1E8"],
            showTooltip: true,
            onLoad: function(event, map) {
                var legend = map.container[0].previousElementSibling,
                    colors = map.colorScale.colors,
                    text = ["Most saleing", "Less saleing"];
                if (legend) {
                    colors.forEach(function(e, i) {
                        legend.innerHTML = legend.innerHTML + '<div class="legend-item"><span style="background-color:rgb(' + colors[i] + ');"></span>' + text[i] + "</div>";
                    });
                }
            },
        });
    </script>

    <script src="{{asset('admin/assets/js/plugins/datatables.min.js')}}"></script>


  @endsection