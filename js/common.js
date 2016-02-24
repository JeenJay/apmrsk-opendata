


$(document).ready(function() {

	/* Вертикальное центрирование мадальных окон
	----------------------------------------------------------------------------------------------------------------- */
	function centerModals(){
		$('.modal').each(function(i){
			var $clone = $(this).clone().css('display', 'block').appendTo('body');
			var top = Math.round(($clone.height() - $clone.find('.modal-content').height()) / 2);
			top = top > 0 ? top : 0;
			$clone.remove();
			$(this).find('.modal-content').css("margin-top", top);
		});
	}
	$('.modal').on('show.bs.modal', centerModals);
	$(window).on('resize', centerModals);

});


/*$(document).ready(function(){

















			$.getJSON('data.json', function(data) {

				$.each(data[5].settlements, function(i, item){
					$('#example__1 .parsed--data').append('<p><b>' + item.type + ' ' + item.name + '</b><br>Население: ' + item.population + ' человек<br><a href=\"https://maps.yandex.ru/?text=' + item.geo.latitude + ',' + item.geo.longitude + '\" target=\"_blank\" \">Показать на карте</a>');
				});





				$.each(data[0].autonomy.contacts.address.geo, function(i, item){
					var huy = item.latitude;
					$('#example__3 .parsed--data').append('<p>' + item.latitude + ',' + item.longitude + '</p>');
					console.log(huy);
				});

			});








		var currentData = 'data.json';

		$.getJSON(currentData, function(data) {

			//console.log('Worked!');

			$.each(data, function(i, item) {
				$("table#parsed__data tbody").append("<tr><td>" + item.shortname + "</td><td>" + item.fullname + "</td><td>" + item.contacts.address + "</td><td><a href=\"mailto:" + item.contacts.email + "\">" + item.contacts.email + "</a></td><td><nobr>" + item.contacts.phone + "</nobr></td><td><a href=\"" + item.contacts.website + "\" target=\"_blank\">" + item.contacts.website + "</a></td><td>" + item.contacts.geo.latitude + "</td><td>" + item.contacts.geo.longitude + "</td></tr>");
			});

		});







});
*/