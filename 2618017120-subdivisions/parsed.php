<?php
	include '../inc/head.php';
	include '../inc/header.php';
?>

		<main>

			<div class="container">

				<div class="row">

					<div class="col-md-12">

						<p class="lead">Паспорт набора открытых данных:</p>
						<h2>&laquo;Перечень структурных подразделений и&nbsp;подведомственных учреждений администрации Предгорного муниципального района Ставропольского края&raquo;</h2>

						<div id="full__parsed__data"></div>

					</div><!-- /.col -->

				</div><!-- /.row -->

			</div><!-- /.container -->

		</main>

		<?php
			include '../inc/footer.php';
			include '../inc/scripts.html';
		?>

		<script>
		$(document).ready(function () {

			$.getJSON('data.json', function (data) {
				parseData(data, $('#full__parsed__data'));
			});

            var labels = {
                fullname: 'Полное наименование',
                shortname: 'Краткое наименование',
                head: 'Руководитель',
                contacts: 'Контакты',
                units: 'Структурные подразделения и подведомственные учреждения',
                address: 'Адрес',
                phone: 'Телефон',
                email: 'Электронная почта',
                website: 'Сайт',
                geo: 'Координаты',
                latitude: 'Широта',
                longitude: 'Долгота'
            };

            function parseData(data, container) {
                var result = '<ul>';
                result += parseObject(data);
                container.html(result);
            }

            function parseObject(obj) {
                var result = '';

                _.forEach(obj, function (value, key) {
                    if (typeof value == 'string') {

                       result += parseString(key, value);

                    } else {
                        result += '<li>' + labels[key];

                        result += '<ul>';

                        if (key == 'units') {
                            _.forEach(value, function (unit, key) {
                                result += parseObject(unit);
                            })
                        } else {
                            result += parseObject(value);
                        }

                        result += '</li></ul>';
                    }
                });

                return result;
            }

            function parseString(key, value){
                switch(key){
                    case 'website':
                        return '<li>'+ labels[key] + ': ' + '<a href="' + value + '" >'+  value  +'</a></li>'
                        break;

                    case 'email' :
                        return '<li>'+ labels[key] + ': ' + '<a href="mailto:' + value + '" >'+  value  +'</a></li>'
                        break;

                    //case 'address':
                    //    break;

                    default :
                     return  '<li>' + labels[key] + ': ' + value + '</li>';
                }
            }










        });
    </script>

	</body>

</html>