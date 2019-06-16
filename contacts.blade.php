@extends('layout.main-gd')

@section('content')
    
<div class="container contacts">
  <h2>Hey, send me a message</h2>
      <form action="/submitform" method="get">
        <div class="form-group contacts1">
          <label for="exampleInputPassword1"></label>
          <input name="yourname" type="text" class="form-control" placeholder="name" >
          
        </div>
  
        <div class="form-group">
          <label for="exampleInputEmail1"></label>
          <input name="youremail" type="email" class="form-control" placeholder="email">
        </div>
        
        <div class="form-group">
          <label for="exampleFormControlTextarea1"></label>
          <textarea name="yourmessage" class="form-control" rows="3" placeholder="your message"></textarea>
        </div>
  
        <button type="submit" class="btn1">Submit</button>
      </form>
  
      @if ($formSuccess == 'form-successfull')
          <p>Thanks, I got your message</p>
      @endif
  
      @if ($formSuccess == 'form-not-successfull')
          <p>Something is wrong</p>
      @endif
</div>

{{-- <div class="container-fluid">
    <p>My Google Maps Demo</p> 
    <div id="googleMap" style="width:100%;height:200px;"></div> --}}

    

{{-- </div> --}}

<div id="googleMap" class="map"></div>



{{-- <script>
    function myMap() {
    var mapProp= {
      center:new google.maps.LatLng(51.508742,-0.120850),
      zoom:5,
    };
    var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
    }
    </script> --}}

    
    <script>
function myMap() {
var mapProp= {
  center:new google.maps.LatLng(51.508742,-0.120850),
  zoom:5,
};
var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAV0OaG3pKEVbMUJeLbe7zSBhvOyREqfUE&callback=myMap"></script>
{{-- 
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAV0OaG3pKEVbMUJeLbe7zSBhvOyREqfUE&callback=initMap"
type="text/javascript"></script> --}}
    

@endsection