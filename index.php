	<?php
		include 'inc/head.php';
		include 'inc/header.html';
	?>

		<main>

			<div class="row">

				<div class="col-md-12">

					<h3>Наборы открытых данных</h3>

					<!-- Start markup with schemas -->
					<div class="table-responsive">
						<table class="table table-bordered">

							<thead>
								<tr>
									<th>&#8470;<br><nobr>п/п</nobr></th>
									<th>Название и ссылка на&nbsp;страницу паспорта набора открытых данных</th>
								</tr>
							</thead>

							<tbody typeof="dc:Collection" about="opendata">

								<div rel="dc:conformsTo" resource="http://opendata.gosmonitor.ru/standard/3.0"></div>

								<tr rel="dc:hasPart" resource="2618017120-politicaldivisions">
									<td>1.</td>
									<td typeof="foaf:Document" about="2618017120-politicaldivisions" property="dc:title" content="Административно-территориальное деление Предгорного муниципального района Ставропольского края"><a href="2618017120-politicaldivisions/">Административно-территориальное деление Предгорного муниципального района Ставропольского края</a></td>
								</tr>
								<tr rel="dc:hasPart" resource="2618017120-subdivisions">
									<td>2.</td>
									<td typeof="foaf:Document" about="2618017120-subdivisions" property="dc:title" content="Перечень структурных подразделений и подведомственных учреждений администрации Предгорного муниципального района Ставропольского края"><a href="2618017120-subdivisions/">Перечень структурных подразделений и подведомственных учреждений администрации Предгорного муниципального района Ставропольского края</a></td>
								</tr>
							</tbody>

						</table>
					</div>
					<!-- End markup with schemas -->

					<p><b>Файловое представление:</b> <a href="#!">opendata.predgor-ray.ru/list.json</a></p>

					<hr>

					<h3>Статистическая информация</h3>

					<div class="table-responsive">
						<table class="table table-bordered">

							<thead>
								<tr>
									<th>&#8470;<br><nobr>п/п</nobr></th>
									<th>Название набора данных</th>
									<th>Количество записей в наборе</th>
									<th>Количество просмотров набора</th>
									<th>Количество загрузок набора</th>
								</tr>
							</thead>

							<tbody>
								<tr>
									<td>1.</td>
									<td>Административно-территориальное деление Предгорного муниципального района Ставропольского края</td>
									<td>0</td>
									<td>0</td>
									<td>0</td>
								</tr>
								<tr>
									<td>2.</td>
									<td>Перечень структурных подразделений и подведомственных учреждений администрации Предгорного муниципального района Ставропольского края</td>
									<td>0</td>
									<td>0</td>
									<td>0</td>
								</tr>
							</tbody>

						</table>
					</div>

				</div>

			</div>

		</main>

		<?php
			include 'inc/modals/modal_feedback.html';
			include 'inc/footer.html';
			include 'inc/scripts.html';
		?>

	</body>

</html>