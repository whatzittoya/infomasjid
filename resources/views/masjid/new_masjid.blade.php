@extends('adminlte::page')

@section('title', 'Tambah Masjid')

@section('content_header')
    <h1>Tambah Masjid</h1>
@stop

@section('content')
{{ Breadcrumbs::render('new_masjid') }}
<ul>
@if ($errors->any())
     @foreach ($errors->all() as $error)
         <li><label class="text-danger">{{$error}}</label></li>
     @endforeach
 @endif
</ul>
    <div class=" container-fluid">
        <div class="col-md-12">
            <div class="card card-default">
              @if(isset($masjid))
                  {{ Form::model($masjid, ['route' => ['masjid.update', $masjid->masjid_id], 'method' => 'patch']) }}
              @else
                  {{ Form::open(['route' => 'masjid.store']) }}
              @endif

                <div class="card-body"> 
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Masjid</label>
                   {{ Form::text('nama_masjid', Input::old('nama_masjid'),['class'=>'form-control','placeholder'=>'Nama Masjid']) }}
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Alamat</label>
                    {{ Form::text('alamat_masjid', Input::old('alamat_masjid'),['class'=>'form-control','placeholder'=>'Alamat']) }}
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">GeoTag</label>
                    {{ Form::text('geotag_masjid', Input::old('geotag_masjid'),['class'=>'form-control','placeholder'=>'Geotag']) }}


                  </div>
                  @if(!isset($masjid))
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Takmir</label>
                     {{ Form::text('nama_takmir', Input::old('nama_takmir'),['class'=>'form-control','placeholder'=>'Nama Takmir']) }}
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email Takmir</label>
                    
                     {{ Form::email('email_takmir', Input::old('email_takmir'),['class'=>'form-control','placeholder'=>'Email Takmir']) }}
                  </div>
                 @endif
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  @if(isset($masjid))
                  {{ Form::submit('Ubah', ['name' => 'update','class'=>'btn btn-warning']) }}
                  @else
                  {{ Form::submit('Simpan', ['name' => 'submit','class'=>'btn btn-primary']) }}
                   @endif
                </div>
               {{ Form::close() }}
 
 
            
            </div>
        </div>
    </div>
    @section('js')
   <script src="https://maps.googleapis.com/maps/api/js?key=&callback=initMap" async defer></script>
         <script>
          // This example adds a search box to a map, using the Google Place Autocomplete
// feature. People can enter geographical searches. The search box will return a
// pick list containing a mix of places and predicted search terms.

// This example requires the Places library. Include the libraries=places
// parameter when you first load the API. For example:
// <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

function initAutocomplete() {
  var map = new google.maps.Map(document.getElementById('map'), {
    center: {lat: -33.8688, lng: 151.2195},
    zoom: 13,
    mapTypeId: 'roadmap'
  });

  // Create the search box and link it to the UI element.
  var input = document.getElementById('pac-input');
  var searchBox = new google.maps.places.SearchBox(input);
  map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

  // Bias the SearchBox results towards current map's viewport.
  map.addListener('bounds_changed', function() {
    searchBox.setBounds(map.getBounds());
  });

  var markers = [];
  // Listen for the event fired when the user selects a prediction and retrieve
  // more details for that place.
  searchBox.addListener('places_changed', function() {
    var places = searchBox.getPlaces();

    if (places.length == 0) {
      return;
    }

    // Clear out the old markers.
    markers.forEach(function(marker) {
      marker.setMap(null);
    });
    markers = [];

    // For each place, get the icon, name and location.
    var bounds = new google.maps.LatLngBounds();
    places.forEach(function(place) {
      if (!place.geometry) {
        console.log("Returned place contains no geometry");
        return;
      }
      var icon = {
        url: place.icon,
        size: new google.maps.Size(71, 71),
        origin: new google.maps.Point(0, 0),
        anchor: new google.maps.Point(17, 34),
        scaledSize: new google.maps.Size(25, 25)
      };

      // Create a marker for each place.
      markers.push(new google.maps.Marker({
        map: map,
        icon: icon,
        title: place.name,
        position: place.geometry.location,
        draggable:true
      }));

      if (place.geometry.viewport) {
        // Only geocodes have viewport.
        bounds.union(place.geometry.viewport);
      } else {
        bounds.extend(place.geometry.location);
      }
    });
    map.fitBounds(bounds);
  });
}
         </script>
@stop

@stop

