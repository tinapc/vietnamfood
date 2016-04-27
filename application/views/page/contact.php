
	<div class="list-products">
    <div class="container">
        <div class="row">
            <div class="col-sm-3 col-md-3 col-lg-3">
                <div class="sidebar">
                    <?php widget::run('support_online')?>

                    <?php widget::run('most_view_product')?>
                </div>  
            </div>

            <div class="col-sm-9 col-md-9 col-lg-9">
                <div class="detail-content">
                    <div class="contact">
						<div class="row">
							<div class="col-xs-12">
								<h3><?=$this->load->get_var('site_name')?></h3>
								<p><i class="fa fa-home"></i>: <?=$this->load->get_var('company_address')?></p>
								<p><i class="fa fa-envelope-o"></i>: <?=$this->load->get_var('email')?></p>
								<p><i class="fa fa-tty"></i>: <?=$this->load->get_var('phone')?></p>
								<p><i class="fa fa-fax"></i>: <?=$this->load->get_var('fax')?></p>
								<p><i class="fa fa-globe"></i>: <a href="http://<?=$this->load->get_var('website')?>"><?=$this->load->get_var('website')?></a></p>
							</div>
						</div>

						<div class="row">
							<div class="col-xs-12">
								<h4>Sơ đồ đường đi</h4>
								<div class="clearfix"></div>
								<!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d979.8069560305455!2d106.68792415831756!3d10.793855342094016!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317528d26bff371d%3A0xdca273059ed9b808!2zVHLGsOG7nW5nIENhbyDEkOG6s25nIE5naOG7gSBUcC4gSGNt!5e0!3m2!1svi!2s!4v1460571165369" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe> -->
								<div id="map" style="width:100%; height: 450px"></div>
							</div>
						</div>
					</div>
                </div>
            </div>

        </div>
    </div>
</div>
<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD7oNBRjJ0uop5C-WJUV9r_gHgVNaKNRxw&callback=GetLocation">
</script>
<script type="text/javascript">
	function GetLocation() {
        var geocoder = new google.maps.Geocoder();
        var address = "<?=$this->load->get_var('company_address')?>";
        geocoder.geocode({ 'address': address }, function (results, status) {
            if (status == google.maps.GeocoderStatus.OK) {
                var latitude = results[0].geometry.location.lat();
                var longitude = results[0].geometry.location.lng();
                //alert("Latitude: " + latitude + "\nLongitude: " + longitude);

                initMap(latitude, longitude);
            } else {
                alert("Request failed.")
            }
        });
    };

    function initMap(latitude, longitude) {
	  var myLatLng = {lat: latitude, lng: longitude};

	  var map = new google.maps.Map(document.getElementById('map'), {
	    zoom: 19,
	    center: myLatLng
	  });

	  var marker = new google.maps.Marker({
	    position: myLatLng,
	    map: map,
	    title: 'Hello World!'
	  });
	}

	jQuery(document).ready(function($) {
		GetLocation();
	});
</script>