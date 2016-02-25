	<?php
		include '../inc/head.php';
		include '../inc/header.php';
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

					<div class="table-responsive">
						<table class="table table-striped table-hover">
							<thead>
								<tr>
									<th>№</th>
									<th>Характеристика</th>
									<th>Значение характеристики</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1.</td>
									<td>Идентификационный номер</td>
									<td>2618017120-subdivisions</td>
								</tr>
								<tr>
									<td>2.</td>
									<td>Наименование набора данных</td>
									<td>Перечень структурных подразделений и подведомственных учреждений администрации Предгорного муниципального района Ставропольского края</td>
								</tr>
								<tr>
									<td>3.</td>
									<td>Описание набора данных</td>
									<td></td>
								</tr>
								<tr>
									<td>4.</td>
									<td>Владелец набора данных</td>
									<td>Администрация Предгорного муниципального района Ставропольского края</td>
								</tr>
								<tr>
									<td>5.</td>
									<td>Ответственное лицо</td>
									<td>Усс Дмитрий Васильевич</td>
								</tr>
								<tr>
									<td>6.</td>
									<td>Телефон ответственного лица</td>
									<td>+78796150664</td>
								</tr>
								<tr>
									<td>7.</td>
									<td>Адрес электронной почты ответственного лица</td>
									<td><a href="mailto:it-apmr@yandex.ru?subject=Открытые данные">it-apmr@yandex.ru</a></td>
								</tr>
								<tr>
									<td>8.</td>
									<td>Гиперсылка (URL) на набор</td>
									<td><a href="#!">data-2015-12-28T09-59-structure-2013-09-10T14-22.json</a></td>
								</tr>
								<tr>
									<td>9.</td>
									<td>Формат данных</td>
									<td>JSON</td>
								</tr>
								<tr>
									<td>10.</td>
									<td>Описание структуры набора данных</td>
									<td><a href="#!">structure-2013-09-10T14-22.json</a></td>
								</tr>
								<tr>
									<td>11.</td>
									<td>Дата первой публикации набора данных</td>
									<td>10.09.2013</td>
								</tr>
								<tr>
									<td>12.</td>
									<td>Дата последнего внесения изменений</td>
									<td>28.12.2015</td>
								</tr>
								<tr>
									<td>13.</td>
									<td>Содержание последнего изменения</td>
									<td>Обновление набора данных</td>
								</tr>
								<tr>
									<td>14.</td>
									<td>Периодичность актуализации набора данных</td>
									<td>По мере изменений</td>
								</tr>
								<tr>
									<td>15.</td>
									<td>Ключевые слова, соответствующие содержанию набора данных</td>
									<td>структурные подразделения, отделы, управления</td>
								</tr>
								<tr>
									<td>16.</td>
									<td>Гиперссылки на версии набора данных</td>
									<td></td>
								</tr>
								<tr>
									<td>17.</td>
									<td>Гиперссылки на версии структуры набора данных</td>
									<td></td>
								</tr>
								<tr>
									<td>18.</td>
									<td>Версия методических рекомендаций</td>
									<td>3.0</td>
								</tr>
							</tbody>
						</table>
					</div>

				</div><!-- /.col -->

				<div class="col-md-4">

					<div class="list-group">

						<a href="data.php" class="list-group-item">
							<h4 class="list-group-item-heading"><i class="fa fa-fw fa-list-ul"></i> Посмотреть содержимое набора</h4>
							<p class="list-group-item-text"><small>Данные адаптированы для использования</small></p>
						</a><!-- /.list-group-item -->

						<a href="parsed.php" class="list-group-item">
							<h4 class="list-group-item-heading"><i class="fa fa-fw fa-database"></i> Посмотреть выгрузку набора</h4>
							<p class="list-group-item-text"><small>Данные не адаптированы для использования</small></p>
						</a><!-- /.list-group-item -->

					</div><!-- /.list-group -->

					<div class="panel panel-default">

						<div class="panel-heading"><i class="fa fa-fw fa-bar-chart"></i> Статистика</div><!-- /.panel-heading -->

						<ul class="list-group">
							<li class="list-group-item"><span class="badge">278</span>Просмотры паспорта набора данных</li>
							<li class="list-group-item"><span class="badge">134</span>Просмотры набора данных</li>
							<li class="list-group-item"><span class="badge">51</span>Загрузки набора данных</li>
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

	</body>

</html>