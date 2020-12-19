@extends('layouts.contentLayoutMaster')
{{-- page title --}}
@section('title','Chartist')

@section('content')
<!-- gmaps Examples section start -->
<section id="gmaps-basic-maps">
  <!-- Basic Map -->
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Basic Map</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <p class="card-text">
              You must define <strong>container ID</strong>, <strong>latitude</strong> and
              <strong>longitude</strong> of the map's center.
            </p>
            <p class="card-text">
              You also can define <strong>zoom</strong>, <strong>width</strong> and
              <strong>height</strong>. By default, zoom is 15. Width an height in a CSS class will replace these values.
            </p>
            <p class="card-text">
              Map types are defined in the <strong>mapType</strong> property. Allowed values are:
              <strong>roadmap</strong> (default), <strong>satellite</strong>, <strong>hybrid</strong> and
              <strong>terrain</strong>.
            </p>
            <div id="basic-map" class="height-400"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Info Window -->
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Info Window</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <p class="card-text">A basic example of using a single info window for 3 markers.</p>
            <div id="info-window" class="height-400"></div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Street View Markers -->
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Street View</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <p class="card-text">Example of creating google map - street view</p>
            <p class="card-text">Point-of-view updates when you pan around</p>
            <div id="street-view" class="height-400"></div>
            <button type="button" class="btn btn-primary street-heading mt-1 mr-1">Change Heading</button>
            <button type="button" class="btn btn-primary street-pitch mt-1 mr-1">Change Pitch</button>
            <button type="button" class="btn btn-primary street-both mt-1">Change Both</button>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="row match-height">
    <!-- Bicycle layer   -->
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Bicycle Layer</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <p class="card-text">
              The Maps JavaScript API allows you to add bicycle information to your maps using the
              <strong>BicyclingLayer</strong> object.
            </p>
            <p class="card-text">
              The <strong>BicyclingLayer</strong> renders a layer of bike paths,
              suggested bike routes and other overlays specific to bicycling usage on top of the given map
            </p>
            <div id="bicycle-map" class="height-400"></div>
          </div>
        </div>
      </div>
    </div>
    <!-- traffic layer -->
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Traffic Layer</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <p class="card-text">
              The Maps JavaScript API allows you to add real-time traffic information (where
              supported) to your maps using the <strong>TrafficLayer</strong> object.
            </p>
            <p class="card-text">
              Traffic information is refreshed frequently,but not instantly.
              Rapid consecutive requests for the same area are unlikely to yield different results.
            </p>
            <div id="transit-map" class="height-400"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- gmaps Examples section End -->
@endsection

{{-- vendor scripts --}}
@section('vendor-scripts')
<script src="{{asset('//maps.googleapis.com/maps/api/js?key=AIzaSyBgjNW0WA93qphgZW-joXVR6VC3IiYFjfo')}}"></script>
<script src="{{asset('vendors/js/charts/gmaps.min.js')}}"></script>
@endsection
{{-- page scripts --}}
@section('page-scripts')
<script src="{{asset('js/scripts/charts/gmaps/maps.js')}}"></script>
@endsection