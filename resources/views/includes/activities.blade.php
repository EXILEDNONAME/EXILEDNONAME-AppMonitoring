<div class="row">
  @php $activity = activities($model); @endphp
  <div class="{{ isset($chart) ? 'col-xl-4' : 'col-xl-4' }}">
    <div class="card card-custom bgi-no-repeat bgi-size-cover gutter-b">
      <!--begin::Header-->
      <div class="card-header align-items-center border-0 mt-4">
        <h3 class="card-title align-items-start flex-column">
          <span class="font-weight-bolder text-dark">My Activity</span>
          <span class="text-muted mt-3 font-weight-bold font-size-sm">
            @if (!empty($activity))
            {{ $activity->count() }} Activities
            @else
            0 Activities
            @endif
          </span>
        </h3>
        <div class="card-toolbar"> </div>
      </div>

      <div class="card-body">
        <div class="example-preview">
          <div class="timeline timeline-2">
            <div class="timeline-bar"></div>

            @php $activity = activities($model)->take(5); @endphp
            @if (!empty($activity) && !empty($activity->count()))
            @foreach($activity as $item)
            <div class="timeline-item">
              @if ($item->description == 'created')
              <span class="timeline-badge bg-success"></span>
              <div class="timeline-content justify-content-between">
                <span class="mr-3">
                  <span class="text-muted"> {{ $item->created_at->diffForHumans() }}, </span><br>
                  @if (!empty($item->causer->name))
                  ({{ $item->causer->name }}) - Created Item
                  @else
                  <s> User Not Found </s>
                  @endif
                </span>
              </div>
              @endif
              @if ($item->description == 'updated')
              <span class="timeline-badge bg-warning"></span>
              <div class="timeline-content justify-content-between">
                <span class="mr-3">
                  <span class="text-muted"> {{ $item->created_at->diffForHumans() }}, </span><br>
                  @if (!empty($item->causer->name))
                  ({{ $item->causer->name }}) - Updated Item
                  @else
                  <s> User Not Found </s>
                  @endif
                </span>
              </div>
              @endif
              @foreach($item['properties'] as $data_object)
              @if ($item->description == 'deleted')
              <span class="timeline-badge bg-danger"></span>
              <div class="timeline-content justify-content-between">
                <span class="mr-3">
                  <span class="text-muted"> {{ $item->created_at->diffForHumans() }}, </span><br>
                  @if (!empty($item->causer->name))
                  ({{ $item->causer->name }}) - Deleted Item {{ $data_object['name'] }}
                  @else
                  <s> User Not Found </s>
                  @endif
                </span>
              </div>
              @endif
              @endforeach
            </div>
            @endforeach
            @else
            <span class="text-muted"> No Recent Activities ... </span>
            @endif

          </div>
        </div>

      </div>
    </div>
  </div>

  @if ( !empty($chart) && $chart == 'true')
  <div class="{{ isset($chart) ? 'col-xl-8' : 'col-xl-4' }}">
    <div class="card card-custom bgi-no-repeat bgi-size-cover gutter-b">
      <div class="card-header" style="">
        <div class="card-title">
          <h5 class="text-dark font-weight-bold"> Traffics <span class="text-muted"> - ({{ \Carbon\Carbon::now()->format('Y') }}) </span></h5>
        </div>
        <div class="card-toolbar">
        </div>
      </div>
      <div class="card-body">
        <div id="chart"></div>
      </div>
    </div>
  </div>
  @endif

</div>

@push('js')
<script src="/assets/backend/js/pages/widgets.js?v=7.0.5"></script>

@if ( !empty($chart) && $chart == 'true')
<script>
"use strict";

const primary = '#6993FF';
const success = '#1BC5BD';
const info = '#8950FC';
const warning = '#FFA800';
const danger = '#F64E60';

// Class definition
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
    // var data = <?php echo '[' . $chart .']'; ?>;
    var created = [{{ chart_created($model) }}];
    var options = {
      series: [
        { name: 'Created', data: created },
      ],
      chart: { height: 350, type: 'area' },
      dataLabels: { enabled: true },
      stroke: { curve: 'smooth' },
      xaxis: { categories: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'], },

      colors: [success, warning, info]
    };

    var chart = new ApexCharts(document.querySelector(apexChart), options);
    chart.render();
  }

  return {
    init: function () {
      _demo1();
    }
  };
}();

jQuery(document).ready(function () { KTApexChartsDemo.init(); });
</script>
@endif
@endpush
