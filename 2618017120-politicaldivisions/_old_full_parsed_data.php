<?php
	include '../inc/head.php';
	include '../inc/header.php';
?>

		<main>

			<div id="full__parsed__data"></div>

		</main>

		<?php
			include '../inc/scripts.html';
		?>

		<script>
		$(document).ready(function(){

			$.getJSON('data-2015-12-28T09-59-structure-2013-09-10T14-22.json', function(data) {
				$.each(data, function(i, item){
					$('#full__parsed__data').append('<div class=\"parsed--item\"><p>Муниципальное образование:</p><ul><li>Наименование: ' + item.name + '</li><li>Площадь территории: ' + item.info.area.value + ' ' + item.info.area.unit + '</li></ul><p>Орган местнго самоуправления:</p><ul><li>Наименование: ' + item.autonomy.name + '</li><li>Адрес: ' + item.autonomy.contacts.address.index + ', ' + item.autonomy.contacts.address.region + ', ' + item.autonomy.contacts.address.district + ', ' + item.autonomy.contacts.address.locality.type + ' ' + item.autonomy.contacts.address.locality.name + ', улица ' + item.autonomy.contacts.address.street + ' ' + item.autonomy.contacts.address.building + ' (<a href=\"https://maps.yandex.ru/?text=' + item.autonomy.contacts.address.geo.latitude + ',' + item.autonomy.contacts.address.geo.longitude + '\" target=\"_blank\">Показать на карте</a>)</li><li>Телефон: ' + item.autonomy.contacts.phone.country + '&nbsp;' + item.autonomy.contacts.phone.code + '&nbsp;' + item.autonomy.contacts.phone.num + '</li><li>Электронная почта: <a href=\"mailto:' + item.autonomy.contacts.email + '\">'+ item.autonomy.contacts.email +'</a></li><li>Веб-сайт: <a href=\"' + item.autonomy.contacts.website + '\" target=\"_blank\">' + item.autonomy.contacts.website + '</a></li><li>Режим работы: ' + item.autonomy.schedule.working.start + '-' + item.autonomy.schedule.working.end + ' с ' + item.autonomy.schedule.time.start + ' до ' + item.autonomy.schedule.time.end + ', перерыв с ' + item.autonomy.schedule.break.start + ' до ' + item.autonomy.schedule.break.end + ', выходные дни ' + item.autonomy.schedule.weekend.start + ' и ' + item.autonomy.schedule.weekend.end + '</li><li>Приемные дни: ' + item.autonomy.schedule.reception + '</li></ul></li><li>' + item.autonomy.head.post + ' &ndash; ' + item.autonomy.head.surname + ' ' + item.autonomy.head.name + ' ' + item.autonomy.head.secondname + '</li></ul>');
					$.each(data.settlements, function(i, newitem){
						$('#full__parsed__data').append('<p>Населенные пункты:</p><ul><li>Название: ' + newitem.type + newitem.name + '(<a href=\"https://maps.yandex.ru/?text=' + newitem.geo.latitude + ',' + newitem.geo.longitude + '\" target=\"_blank\">Показать на карте</a>)</li><li>Численность населения: ' + newitem.population + ' человек</li></ul></div>');
					});
				});
			});

		});
		</script>

		</main>

		<?php
			include '../inc/footer.php';
		?>

	</body>

</html>