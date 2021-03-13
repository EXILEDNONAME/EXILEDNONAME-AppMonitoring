@extends('layouts.pages.dashboard', ['page' => 'dashboard'])
@push('title', 'Dashboard')

@push('content-body')
<div id="output"></div>
<br>

<div class="row">
  <div class="col-md-3">
    <div class="alert alert-custom alert-white alert-shadow fade show gutter-b" role="alert">
      <div class="alert-icon">
        <span class="svg-icon svg-icon-success">
          <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg-->
          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
              <rect x="0" y="0" width="24" height="24"></rect>
              <circle fill="#000000" cx="9" cy="15" r="6"></circle>
              <path d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z" fill="#000000" opacity="0.3"></path>
            </g>
          </svg>
          <!--end::Svg Icon-->
        </span>
      </div>
      <div class="alert-text">
        Welcome {{ Auth::User()->name }}, <br>
        <span class="text-muted"> Application Version 1.0.0 </span>
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="alert alert-custom alert-white alert-shadow fade show gutter-b" role="alert">
      <div class="alert-icon">
        <span class="svg-icon svg-icon-info"><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo1\dist/../src/media/svg/icons\General\User.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
            <polygon points="0 0 24 0 24 24 0 24"/>
            <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
            <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero"/>
          </g>
        </svg><!--end::Svg Icon--></span>
      </div>
      <div class="alert-text">
        <span class="font-weight-bold"> Total Users </span><br> 5 Users
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-lg-12">
    <div class="card card-custom bgi-no-repeat bgi-size-cover gutter-b">
      <div class="card-header" style="">
        <div class="card-title">
          <h5 class="text-dark font-weight-bold"> User Registered </h5>
        </div>
        <div class="card-toolbar">
          <h5 class="text-dark font-weight-bold">
            <!--  -->
          </h5>
        </div>
      </div>

      <div class="card-body">
        <div id="chart"></div>
      </div>

    </div>
  </div>
</div>
@endpush

@push('js')
<script src="/assets/backend/js/pages/widgets.js?v=7.0.5"></script>

<script>
"use strict";

// Shared Colors Definition
const primary = '#6993FF';
const success = '#1BC5BD';
const info = '#8950FC';
const warning = '#FFA800';
const danger = '#F64E60';

// Class definition
function generateBubbleData(baseval, count, yrange) {
  var i = 0;
  var series = [];
  while (i < count) {
    var x = Math.floor(Math.random() * (750 - 1 + 1)) + 1;;
    var y = Math.floor(Math.random() * (yrange.max - yrange.min + 1)) + yrange.min;
    var z = Math.floor(Math.random() * (75 - 15 + 1)) + 15;
    series.push([x, y, z]);
    baseval += 86400000;
    i++;
  }
  return series;
}

function generateData(count, yrange) {
  var i = 0;
  var series = [];
  while (i < count) {
    var x = 'w' + (i + 1).toString();
    var y = Math.floor(Math.random() * (yrange.max - yrange.min + 1)) + yrange.min;
    series.push({
      x: x,
      y: y
    });
    i++;
  }
  return series;
}

var KTApexChartsDemo = function () {
  var _demo1 = function () {
    const apexChart = "#chart";
    var data =  <?php echo '[' . $data_chart .']'; ?>;
    var options = {
      series: [
        { name: 'Users', data: data },
      ],
      chart: { height: 350, type: 'line' },
      dataLabels: { enabled: false },
      stroke: { curve: 'smooth' },
      xaxis: { categories: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'], },

      colors: [info, success, danger]
    };

    var chart = new ApexCharts(document.querySelector(apexChart), options);
    chart.render();
  }

  return {
    // public functions
    init: function () {
      _demo1();
    }
  };
}();

jQuery(document).ready(function () {
  KTApexChartsDemo.init();
});
</script>
@endpush
