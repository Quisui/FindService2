@extends('plantilla')

@section('head')
  <!-- key=AIzaSyC4I2H5Mw7GzpS57OZKYV0CZT4xIouasqk -->
  <!-- key=AIzaSyCRGMPjg0ltfCG6UfCOMfs5KCsJTXcNDiM -->
  <script src='https://maps.googleapis.com/maps/api/js?key=AIzaSyCRGMPjg0ltfCG6UfCOMfs5KCsJTXcNDiM'></script>
@endsection

@section('contenido')
<!-- Contenido principal de la pagina -->
<br><br>
<div class="container">
  <div class="row">
    <!-- <section class="col s12 center">
        <h4>
          En esta página puedes buscar cualquier servicio dentro de Xela, nosotros te proporcionamos la información que necesites
        </h4>-->
    </section>
    <section class="col s8 offset-s2 center">
      <form>
        <div class="input-field">
          <input id="search_bar" type="search" required>
          <label class="" for="search_bar"><i class="material-icons left">search</i>Busca servicios como hospitales,
            restaurantes, tiendas, etc...</label>
          <i class="material-icons">close</i>
        </div>
      </form>
    </section>
  </div>
</div>

<div class="container">
  <div class="section">

    <div class="row">
      <div class="slider col s12" >
        <ul class="slides" height=1050px>
          <li><img src="imagenes/pruebaServicio/1.jpg" alt="" class="responsive-img"></li>
          <li><img src="imagenes/pruebaServicio/2.jpg" alt="" class="responsive-img"></li>
          <li><img src="imagenes/pruebaServicio/3.png" alt="" class="responsive-img"></li>
          <li><img src="imagenes/pruebaServicio/4.png" alt="" class="responsive-img"></li>
        </ul>
      </div>
      
      <div class="col s7 xl6">
          <div class="card">
              <div class="card-image">
                  <img src="imagenes\pruebaServicio\logo.png">
              </div>
                <div class="card-content blue-text text-darken-4">
                    <strong style="font-weight: bold">Descripción:<strong>
                        <p>Servicio de emergencia, hospitalización, medicina interna, cirugía general, pediatría y
                          neonatologia,
                          traumatología, ortopedía, urología, cardiología, radiología, ultrasonidos, tomografías,
                          electrocardiografía, laboratorio clínico, ginecología.</p>
                </div>
              <div class="card-tabs">
                <ul class="tabs tabs-fixed-width">
                  <li class="tab"><a href="#contacto_de_la_empresa" class="blue-text text-darken-4">Contacto <i class="material-icons">perm_contact_calendar</i></a></li>
                  <li class="tab"><a href="#horario_de_la_empresa"  class="blue-text text-darken-4">Horarios de atención <i class="material-icons">schedule</i></a></li>
                  <li class="tab"><a href="#formato_de_pago_de_la_empresa" class="blue-text text-darken-4">Fmto. de Pago <i class="material-icons">payment</i></a></li>
                </ul>
              </div>
              <div class="card-content white">
                  <div id = "contacto_de_la_empresa">
                      <ul class="collapsible">
                          <li>
                            <div class="collapsible-header blue-text text-darken-4"><i class="material-icons">place</i>Direccion/es</div>
                            <div class="collapsible-body">
                                <div class="card-action">
                                  <ul class="collection">
                                      <a href="#" class="collection-item blue-text text-darken-4">Hospital Privado Quetzaltenango</a>
                                      <a href="#" class="collection-item blue-text text-darken-4">Otra direccion :v</a>
                                    </ul>
                                </div>
                            </div>
                          </li>
                          <li>
                              <div class="collapsible-header blue-text text-darken-4"><i class="material-icons">smartphone</i>Telefonos</div>
                              <div class="collapsible-body">
                                  <div class="card-action">
                                    <ul class="collection">
                                        <a href="#" class="collection-item blue-text text-darken-4">+(502) 7774 4700</a>
                                      </ul>
                                  </div>
                              </div>
                          </li>
                          <li>
                              <div class="collapsible-header blue-text text-darken-4"><i class="material-icons">email</i>Correo / Redes Sociales</div>
                              <div class="collapsible-body">
                                  <div class="card-action">
                                    <ul class="collection">
                                        <a href="https://www.facebook.com/pages/category/Doctor/Hospital-Privado-Quetzaltenango-537568162950489/" class="collection-item blue-text text-darken-4">Facebook</a>
                                      </ul>
                                  </div>
                              </div>
                          </li>
                        </ul>
                </div>
                <div id="horario_de_la_empresa" class="blue-text text-darken-4">Abierto las 24 horas</div>
                <div id="formato_de_pago_de_la_empresa" class = "blue-text text-darken-4">Tarjeta de Credito, Tarjeta de Debito y Efectivo</div>
              </div>
          </div>
        </div>

        <div class="col s4.5 xl6">
            <div class="card-panel white">
                    <div class="row">
                        <div class="input-field col s8">
                          <input id="direccionA_mapa" type="text" class="validate">
                          <label for="direccionA_mapa">Direccion A</label>
                        </div>
                        <div class="input-field col s8">
                          <input id="direccionB_mapa" type="text" class="validate">
                          <label for="direccionB_mapa">Direccion B</label>
                        </div>
                      </div>     
                      <p>
                        <a class="blue-text text-darken-4">¿Como llegar?<br></a>
                        <a onclick="init_map('gmap_canvas', '1')" class="btn-small blue darken-4 waves-effect waves-light"><i class="material-icons center">directions_car</i></a>
                        <a onclick="init_map('gmap_canvas', '2')" class="btn-small blue darken-4 waves-effect waves-light"><i class="material-icons center">directions_walk</i></a>
                      </p>  
                      <div id="gmap_canvas" style="width: 525px; height: 380px;">
                          Aqui va el puto mapa
                      </div>
            </div>
        </div>

    </div>

  </div>
</div>
@endsection
  
@section('scripts')
<!-- Mapa -->
<script type='text/javascript'>  
  var tipo = "google.maps.TravelMode."
  //Ubicación o direccion que escoja la persona
  var direccionA = "Zona 7, Quetzaltenango";
  //Direccion del serevicio
  var direccionB = "Hostpital Privado Quetzaltenango, Quetzaltenango";
  //
  var convertir_Direccion = "";
  var hola = "";
  codeAddress(direccionB);
  //Funcion para convertir una direccion a coordenadas para google maps
  function codeAddress(address) {
      geocoder = new google.maps.Geocoder();
          geocoder.geocode( {address:address}, function(results, status) 
          {
              if (status == google.maps.GeocoderStatus.OK) 
              {
              convertir_Direccion = results[0].geometry.location;
              } else {
              alert('Geocode was not successful for the following reason: ' + status);
          }
          });
  } 
  // Funcion que marta el origen
  function init_map1(cadena) {
    //Posiciona y construye el mapa para la direccion del servicio
    var myOptions = {
      zoom: 16,
      center: convertir_Direccion,
      mapTypeId: google.maps.MapTypeId.ROADMAP,
      styles: [{ "elementType": "geometry", "stylers": [ { "color": "#1d2c4d" } ] }, { "elementType": "labels.text.fill", "stylers": [ { "color": "#8ec3b9" } ] }, { "elementType": "labels.text.stroke", "stylers": [ { "color": "#1a3646" } ] }, { "featureType": "administrative.country", "elementType": "geometry.stroke", "stylers": [ { "color": "#4b6878" } ] }, { "featureType": "administrative.land_parcel", "elementType": "labels.text.fill", "stylers": [ { "color": "#64779e" } ] }, { "featureType": "administrative.province", "elementType": "geometry.stroke", "stylers": [ { "color": "#4b6878" } ] }, { "featureType": "landscape.man_made", "elementType": "geometry.stroke", "stylers": [ { "color": "#334e87" } ] }, { "featureType": "landscape.natural", "elementType": "geometry", "stylers": [ { "color": "#023e58" } ] }, { "featureType": "poi", "elementType": "geometry", "stylers": [ { "color": "#283d6a" } ] }, { "featureType": "poi", "elementType": "labels.text.fill", "stylers": [ { "color": "#6f9ba5" } ] }, { "featureType": "poi", "elementType": "labels.text.stroke", "stylers": [ { "color": "#1d2c4d" } ] }, { "featureType": "poi.park", "elementType": "geometry.fill", "stylers": [ { "color": "#023e58" } ] }, { "featureType": "poi.park", "elementType": "labels.text.fill", "stylers": [ { "color": "#3C7680" } ] }, { "featureType": "road", "elementType": "geometry", "stylers": [ { "color": "#304a7d" } ] }, { "featureType": "road", "elementType": "labels.text.fill", "stylers": [ { "color": "#98a5be" } ] }, { "featureType": "road", "elementType": "labels.text.stroke", "stylers": [ { "color": "#1d2c4d" } ] }, { "featureType": "road.highway", "elementType": "geometry", "stylers": [ { "color": "#2c6675" } ] }, { "featureType": "road.highway", "elementType": "geometry.stroke", "stylers": [ { "color": "#255763" } ] }, { "featureType": "road.highway", "elementType": "labels.text.fill", "stylers": [ { "color": "#b0d5ce" } ] }, { "featureType": "road.highway", "elementType": "labels.text.stroke", "stylers": [ { "color": "#023e58" } ] }, { "featureType": "transit", "elementType": "labels.text.fill", "stylers": [ { "color": "#98a5be" } ] }, { "featureType": "transit", "elementType": "labels.text.stroke", "stylers": [ { "color": "#1d2c4d" } ] }, { "featureType": "transit.line", "elementType": "geometry.fill", "stylers": [ { "color": "#283d6a" } ] }, { "featureType": "transit.station", "elementType": "geometry", "stylers": [ { "color": "#3a4762" } ] }, { "featureType": "water", "elementType": "geometry", "stylers": [ { "color": "#0e1626" } ] }, { "featureType": "water", "elementType": "labels.text.fill", "stylers": [ { "color": "#4e6d70" } ] }
      ]
    }
    var Gmap = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);
    var iconFile = 'http://maps.google.com/mapfiles/kml/paddle/B.png';
    var marker = new google.maps.Marker({
      map: Gmap,
      position: convertir_Direccion
    });
    marker.setIcon(iconFile);
    infowindow = new google.maps.InfoWindow({content: direccionB});
    google.maps.event.addListener(marker, 'click', function(){infowindow.open(Gmap,marker);});
    }
  //Funcion que posiciona las coordenadas y traza las rutas en el mapa de google maps
    google.maps.event.addDomListener(window, 'load', init_map1);
    //////////////////////////////////////////
    function init_map(cadena, numero) {
      if(numero == '1'){
          var tipoMov = google.maps.TravelMode.DRIVING;
      }else{
          var tipoMov = google.maps.TravelMode.WALKING;
      }
    //Posiciona y construye el mapa para la direccion del servicio
    var myOptions = {
      zoom: 16,
      center: convertir_Direccion,
      mapTypeId: google.maps.MapTypeId.ROADMAP,
      styles: [{ "elementType": "geometry", "stylers": [ { "color": "#1d2c4d" } ] }, { "elementType": "labels.text.fill", "stylers": [ { "color": "#8ec3b9" } ] }, { "elementType": "labels.text.stroke", "stylers": [ { "color": "#1a3646" } ] }, { "featureType": "administrative.country", "elementType": "geometry.stroke", "stylers": [ { "color": "#4b6878" } ] }, { "featureType": "administrative.land_parcel", "elementType": "labels.text.fill", "stylers": [ { "color": "#64779e" } ] }, { "featureType": "administrative.province", "elementType": "geometry.stroke", "stylers": [ { "color": "#4b6878" } ] }, { "featureType": "landscape.man_made", "elementType": "geometry.stroke", "stylers": [ { "color": "#334e87" } ] }, { "featureType": "landscape.natural", "elementType": "geometry", "stylers": [ { "color": "#023e58" } ] }, { "featureType": "poi", "elementType": "geometry", "stylers": [ { "color": "#283d6a" } ] }, { "featureType": "poi", "elementType": "labels.text.fill", "stylers": [ { "color": "#6f9ba5" } ] }, { "featureType": "poi", "elementType": "labels.text.stroke", "stylers": [ { "color": "#1d2c4d" } ] }, { "featureType": "poi.park", "elementType": "geometry.fill", "stylers": [ { "color": "#023e58" } ] }, { "featureType": "poi.park", "elementType": "labels.text.fill", "stylers": [ { "color": "#3C7680" } ] }, { "featureType": "road", "elementType": "geometry", "stylers": [ { "color": "#304a7d" } ] }, { "featureType": "road", "elementType": "labels.text.fill", "stylers": [ { "color": "#98a5be" } ] }, { "featureType": "road", "elementType": "labels.text.stroke", "stylers": [ { "color": "#1d2c4d" } ] }, { "featureType": "road.highway", "elementType": "geometry", "stylers": [ { "color": "#2c6675" } ] }, { "featureType": "road.highway", "elementType": "geometry.stroke", "stylers": [ { "color": "#255763" } ] }, { "featureType": "road.highway", "elementType": "labels.text.fill", "stylers": [ { "color": "#b0d5ce" } ] }, { "featureType": "road.highway", "elementType": "labels.text.stroke", "stylers": [ { "color": "#023e58" } ] }, { "featureType": "transit", "elementType": "labels.text.fill", "stylers": [ { "color": "#98a5be" } ] }, { "featureType": "transit", "elementType": "labels.text.stroke", "stylers": [ { "color": "#1d2c4d" } ] }, { "featureType": "transit.line", "elementType": "geometry.fill", "stylers": [ { "color": "#283d6a" } ] }, { "featureType": "transit.station", "elementType": "geometry", "stylers": [ { "color": "#3a4762" } ] }, { "featureType": "water", "elementType": "geometry", "stylers": [ { "color": "#0e1626" } ] }, { "featureType": "water", "elementType": "labels.text.fill", "stylers": [ { "color": "#4e6d70" } ] }
      ]
    }
    var Gmap = new google.maps.Map(document.getElementById(cadena), myOptions);
    var iconFile = 'http://maps.google.com/mapfiles/kml/paddle/B.png';
    var marker = new google.maps.Marker({
      map: Gmap,
      position: convertir_Direccion
    });
    marker.setIcon(iconFile);
    infowindow = new google.maps.InfoWindow({content: direccionB});
    google.maps.event.addListener(marker, 'click', function(){infowindow.open(Gmap,marker);});
    //Pocisiona un nuevo marker en la direccion
    var gCoder = new google.maps.Geocoder();
    function fn_coder(datos){
        var coordenadas = datos[0].geometry.location;//objeto longitud latitud
        var iconFile2 = 'http://maps.google.com/mapfiles/kml/paddle/A.png';
        var marker1 = new google.maps.Marker({
        map: Gmap,
        position: coordenadas
        });
        marker1.setIcon(iconFile2);
        infowindow1 = new google.maps.InfoWindow({content: direccionA});
        google.maps.event.addListener(marker1, 'click', function(){infowindow1.open(Gmap,marker1);});
    }
      gCoder.geocode({address:direccionA}, fn_coder);
      /////////////////////////////////
      var objConfigDR = {
          map: Gmap,
          suppressMarkers: true,
          polylineOptions: { strokeColor: "#fffa00" }
      }
      var directionsService = new google.maps.DirectionsService;
      var directionsDisplay = new google.maps.DirectionsRenderer(objConfigDR);        
      directionsService.route({
      origin: direccionA,//db waypoint start
      destination: direccionB,//db waypoint end
      travelMode: tipoMov //google.maps.TravelMode.DRIVING
      }, 
      
      function trazar(response, status) {
      if (status === google.maps.DirectionsStatus.OK) {
          directionsDisplay.setDirections(response);
      } else {
          window.alert('Ha fallat la comunicació amb el mapa a causa de: ' + status);
      }
      });
      //////////////////////////////////////////////////////////////
    }
    google.maps.event.addDomListener(window, 'load', init_map);
    //////////////////////////////////////
</script>
<!--script>
    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.slider');
        var instances = M.Slider.init(elems,{
          interval:5000,
          fullWidth: true
        });
    });
</script-->
<script>
  document.addEventListener('DOMContentLoaded', function () {
    M.AutoInit();
  });
</script>
@endsection