$(document).ready(function() {

//     // $('#sidenav-list a').removeClass('active');
//     // $('#tabcontent div').removeClass('active show');
//
//     var clickedNav = $(this).attr('id').slice(4);
//     clickedNav = '#' + clickedNav;
//     console.log(clickedNav);
//
// function reloadPageWithHash() {
//   var initialPage = location.pathname;
//   location.replace('http://example.com/#' + initialPage);
// }
$('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {

    $('a[data-toggle="tab"]').removeClass('active show');
    $(this).addClass('active show');
    var target = this.href.split('#');
    window.location.replace(target[0] + '#' + target[1]);
    console.log(target);
$('#sidenav-list a').filter('a[href="#'+target[1]+'"]').tab('show');
});

var token = '524412987.1677ed0.1f03fbf431fc4232a0f529bf2762e4a5', // learn how to obtain it below
      userid = 524412987, // User ID - get it in source HTML of your Instagram profile or look at the next example :)
      num_photos = 8; // how much photos do you want to get

  $.ajax({
  	url: 'https://api.instagram.com/v1/users/' + userid + '/media/recent/', // or /users/self/media/recent for Sandbox
  	dataType: 'jsonp',
  	type: 'GET',
  	data: {access_token: token, count: num_photos},
  	success: function(data){
   		console.log(data);
  		for( x in data.data ){
  			$('#instagram-feed ul.instagram-photos').append('<li class="instagram-item"><a class="instagram-link" href="' + data.data[x].link + '" target="_blank"><div class="instagram-photo-container rounded"><img class="img-fluid col-xs-12 instagram-photo px-0" src="' +  data.data[x].images.standard_resolution.url + '" alt="picture"></div><div class="instagram-view"><div class="fa fa-instagram"></div><p>View on Instagram</p></div></a></li>'); // data.data[x].images.low_resolution.url - URL of image, 306Ñ…306
  			// data.data[x].images.thumbnail.url - URL of image 150Ñ…150
  			// data.data[x].images.standard_resolution.url - URL of image 612Ñ…612
  			// data.data[x].link - Instagram post URL
  		}
  	},
  	error: function(data){
  		console.log(data); // send the error notifications to console
  	}
  });



var map = new GMaps({
    div: '#map',
    lat: 43.846812,
    lng: -79.382355
});

map.addMarker({
    lat: 43.846812,
    lng: -79.382355,
    title: 'Arc Education Centre',
    infoWindow: {
    content: '<p id="gmap-title" class="font-weight-bold mb-2">Arc Education Centre</p><p class="mb-2">9011 Leslie St #206</p><p class="mb-2">Richmond Hill, ON L4B 3B6</p><p>Canada</p>'
}
});

});
