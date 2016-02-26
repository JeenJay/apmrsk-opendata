	<?php
		include '../inc/head.php';
		include '../inc/header.html';
	?>

		<main>

			<div class="row">

				<div class="col-md-12">

					<p class="lead">Паспорт набора открытых данных:</p>
					<h2>&laquo;Перечень структурных подразделений и&nbsp;подведомственных учреждений администрации Предгорного муниципального района Ставропольского края&raquo;</h2>

				</div><!-- /.col -->

			</div><!-- /.row -->

			<div class="row">

				<div class="col-md-8">

					<div class="table-responsive" about="/opendata/7712345678-showrooms" typeof="foaf:Document">

						<div rel="dc:conformsTo" resource="http://opendata.gosmonitor.ru/standard/3.0"></div>

						<table id="dataset__passport" class="table table-striped table-hover">
							<thead>
								<tr>
									<th>№</th>
									<th>Характеристика</th>
									<th>Значение характеристики</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>Идентификационный номер</td>
									<td property="dc:identifier">2618017120-subdivisions</td>
								</tr>
								<tr>
									<td>2</td>
									<td>Наименование набора данных</td>
									<td property="dc:title">Перечень структурных подразделений и подведомственных учреждений</td>
								</tr>
								<tr>
									<td>3</td>
									<td>Описание набора данных</td>
									<td property="dc:description">Перечень структурных подразделений и подведомственных учреждений администрации Предгорного муниципального района Ставропольского края</td>
								</tr>
								<tr>
									<td>4</td>
									<td>Владелец набора данных</td>
									<td property="dc:creator">Администрация Предгорного муниципального района Ставропольского края</td>
								</tr>
								<tr>
									<td>5</td><td>Ответственное лицо</td><td rel="dc:publisher" resource="#publisher">
										<span rel="dc:publisher" typeof="foaf:Person" about="#publisher" property="foaf:name">Усс Дмитрий Васильевич</span>
									</td>
								</tr>
								<tr>
									<td>6</td>
									<td>Телефон ответственного лица</td>
									<td rel="dc:publisher" resource="#publisher">
										<span typeof="foaf:Person" about="#publisher" property="foaf:phone" content="+7 87961 5-06-64">+7 87961 5-06-64</span>
									</td>
								</tr>
								<tr>
									<td>7</td>
									<td>Адрес электронной почты ответственного лица</td>
									<td rel="dc:publisher" resource="#publisher">
										<a href="mailto:it-apmr@yandex.ru?subject=Открытые данные" typeof="foaf:Person" about="#publisher" property="foaf:mbox">it-apmr@yandex.ru</span>
									</td>
								</tr>
								<tr>
									<td>8</td>
									<td>Гиперсылка (URL) на набор</td>
									<td><a href="http://opendata.predgor-ray.ru/2618017120-subdivisions/data-20160130T0000-structure-20160130T0000.json">data-20160130T0000-structure-20160130T0000.json</a></td>
								</tr>
								<tr>
									<td>9</td>
									<td>Формат данных</td>
									<td property="dc:format" content="json">JSON</td>
								</tr>
								<tr>
									<td>10</td>
									<td>Описание структуры набора данных</td>
									<td><a href="http://opendata.predgor-ray.ru/2618017120-subdivisions/strucrure-20160130T0000.json">structure.xsd</a></td>
								</tr>
								<tr>
									<td>11</td>
									<td>Дата первой публикации набора данных</td>
									<td property="dc:created" content="2016-01-01">01.01.2016</td>
								</tr>
								<tr>
									<td>12</td>
									<td>Дата последнего внесения изменений</td>
									<td property="dc:modified" content="2016-01-30T00:00:00">30.06.2016</td>
								</tr>
								<tr>
									<td>13</td>
									<td>Содержание последнего изменения</td>
									<td>Исправлены незначительные ошибки</td>
								</tr>
								<tr>
									<td>14</td>
									<td>Периодичность актуализации набора данных</td>
									<td property="dc:valid" content="2016-01-30T00:00:00">30.06.2016</td>
								</tr>
								<tr>
									<td>15</td>
									<td>Ключевые слова, соответствующие содержанию набора данных</td>
									<td property="dc:subject">структурное подразделение, отдел, управление</td>
								</tr>
								<tr>
									<td>16</td>
									<td>Гиперссылки (URL) на версии набора данных</td>
									<td>
										<a href="http://opendata.predgor-ray.ru/2618017120-subdivisions/data-20160115T0000-structure-20160130T0000.json">data-20160115T0000-structure-20160130T0000.json</a><br>
										<a href="http://opendata.predgor-ray.ru/2618017120-subdivisions/data-20160101T0000-strucrure-20160101T0000.json">data-20160101T0000-strucrure-20160101T0000.json</a>
									</td>
								</tr>
								<tr>
									<td>17</td>
									<td>Гиперссылки (URL) на версии структуры набора данных</td>
									<td>
										<a href="http://opendata.predgor-ray.ru/2618017120-subdivisions/strucrure-20160101T0000.json">strucrure-20160101T0000.json</a>
									</td>
								</tr>
							</tbody>
						</table>

						<div rel="dc:source" resource="#data"></div>

					</div>

					<div typeof="dc:Collection" about="#data">

						<div rel="dc:hasPart" resource="#data-20160130T0000">
							<div typeof="foaf:Document" about="#data-20160130T0000">
								<div property="dc:source" content="http://opendata.predgor-ray.ru/2618017120-subdivisions/data-20160130T0000-structure-20160130T0000.json"></div>
								<div property="dc:created" content="2016-01-30"></div>
								<div property="dc:provenance" content="Исправлены незначительные ошибки"></div>
								<div rel="dc:conformsTo" resource="#structure-20130401T0000"></div>
							</div>
						</div>

						<div rel="dc:hasPart" resource="#data-20160115T0000">
							<div typeof="foaf:Document" about="#data-20160115T0000">
								<div property="dc:source" content="http://opendata.predgor-ray.ru/2618017120-subdivisions/data-20160115T0000-structure-20160130T0000.json"></div>
								<div property="dc:created" content="2016-01-15"></div>
								<div property="dc:provenance" content="Добавлены должности руководитлей"></div>
								<div rel="dc:conformsTo" resource="#structure-20130401T0000"></div>
							</div>
						</div>

						<div rel="dc:hasPart" resource="#data-20160101T0000">
							<div typeof="foaf:Document" about="#data-20160101T0000">
								<div property="dc:source" content="http://opendata.predgor-ray.ru/2618017120-subdivisions/data-20160101T0000-strucrure-20160101T0000.json"></div>
								<div property="dc:created" content="2016-01-01"></div>
								<div property="dc:provenance" content="Первичная публикация"></div>
								<div rel="dc:conformsTo" resource="#structure-20130401T0000"></div>
							</div>
						</div>

					</div>

					<div typeof="dc:Collection" about="#strucrure">

						<div rel="dc:hasPart" resource="#strucrure-20160130T0000">
							<div typeof="foaf:Document" about="#strucrure-20160130T0000">
								<div property="dc:source" content="http://opendata.predgor-ray.ru/2618017120-subdivisions/strucrure-20160130T0000.json"></div>
								<div property="dc:created" content="2016-01-30"></div>
							</div>
						</div>

						<div rel="dc:hasPart" resource="#strucrure-20160101T0000">
							<div typeof="foaf:Document" about="#strucrure-20160101T0000">
								<div property="dc:source" content="http://opendata.predgor-ray.ru/2618017120-subdivisions/strucrure-20160101T0000.json"></div>
								<div property="dc:created" content="2016-01-01"></div>
							</div>
						</div>
					
					</div>
		
				</div><!-- /.col -->

				<div class="col-md-4">

					<div class="list-group">

						<a href="data.php" class="list-group-item disabled">
							<h4 class="list-group-item-heading"><i class="fa fa-fw fa-list-ul"></i> Посмотреть содержимое набора</h4>
							<p class="list-group-item-text"><small>Данные адаптированы для использования</small></p>
						</a><!-- /.list-group-item -->

						<a href="parsed.php" class="list-group-item disabled">
							<h4 class="list-group-item-heading"><i class="fa fa-fw fa-database"></i> Посмотреть выгрузку набора</h4>
							<p class="list-group-item-text"><small>Данные не адаптированы для использования</small></p>
						</a><!-- /.list-group-item -->

					</div><!-- /.list-group -->

					<div class="panel panel-default">

						<div class="panel-heading"><i class="fa fa-fw fa-bar-chart"></i> Статистика</div><!-- /.panel-heading -->

						<ul class="list-group">
							<li class="list-group-item"><span class="badge">0</span>Просмотры паспорта набора данных</li>
							<li class="list-group-item"><span class="badge">0</span>Просмотры набора данных</li>
							<li class="list-group-item"><span class="badge">0</span>Загрузки набора данных</li>
						</ul><!-- /.list-group -->

					</div><!-- /.panel -->

					<?php
						include '../inc/sidebar/sidebar_support.html';
					?>

				</div><!-- /.col -->

			</div><!-- /.row -->

		</main>

		<?php
			include '../inc/modals/modal_feedback.html';
			include '../inc/footer.html';
			include '../inc/scripts.html';
		?>

		<script>
		// $(document).ready(function() {

		// 	$.getJSON('meta.json', function(data) {

		// 		$('#dataset__passport tbody tr td:nth-child(3)').append('<p>'+ data.identifier +'</p>');

		// 		$.each(data, function(i, item) {
		// 			console.log(item);
		// 			$('#dataset__passport tbody tr td:nth-child(3)').append('<p>'+ item.identifier +'</p>');
		// 		});

		// 	});

		// });
		</script>

	</body>

</html>