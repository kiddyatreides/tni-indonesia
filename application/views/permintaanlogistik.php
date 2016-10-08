<div class="container"><h1>Peta Permintaan Logistik</h1></div>
<center><div id="map" style="width: 1000px; height: 500px;"></div></center>

  <script type="text/javascript">
    var locations = [
    <?php $no = 1; foreach ($logistik->result() as $value1) { ?>
    ["Kodim <?php echo $value1->nama;?>, <?php echo $value1->alamat;?>. <a href='#'>Daftar Permintaan</a>", <?php echo $value1->lat;?>, <?php echo $value1->long;?>],
    <?php $no++;  }?>
    ];


     

    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 6,  
      center: new google.maps.LatLng(-6.3986603, 107.1982466),
      mapTypeId: google.maps.MapTypeId.ROADMAP
    });

    var infowindow = new google.maps.InfoWindow();

    var marker, i;

    for (i = 0; i < locations.length; i++) {  
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
        map: map
      });

      google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
          infowindow.setContent(locations[i][0]);
          infowindow.open(map, marker);
        }
      })(marker, i));
    }
  </script>