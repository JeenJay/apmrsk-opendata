# Open Data
Открытые данные администрации Предгорного муниципального района Ставропольского края

## Паспорт набора данных

### Пример машиночитаемого содержания паспорта набора данных
```json
{
	"standardversion": "http://opendata.gosmonitor.ru/standard/3.0",
	"identifier": "2618017120-subdivisions",
	"title": "Перечень структурных подразделений и подведомственных учреждений",
	"description": "Перечень структурных подразделений и подведомственных учреждений администрации Предгорного муниципального района Ставропольского края",
	"creator": "Администрация Предгорного муниципального района Ставропольского края",
	"created": "20160101",
	"modified": "20160130",
	"subject": "структурное подразделение, отдел, управление",
	"format": "json",
	"data": [{
		"source": "http://opendata.predgor-ray.ru/2618017120-subdivisions/data-20160130T0000-structure-20160130T0000.json",
		"created": "20160130",
		"provenance": "Исправлены незначительные ошибки",
		"valid": "20160130",
		"structure": "20160130T0000"
	},{
		"source": "http://opendata.predgor-ray.ru/2618017120-subdivisions/data-20160115T0000-structure-20160130T0000.json",
		"created": "20160115T0000",
		"provenance": "Добавлены должности руководителей",
		"valid": "20160115",
		"structure": "20160130T0000"
	},{
		"source": "http://opendata.predgor-ray.ru/2618017120-subdivisions/data-20160101T0000-strucrure-20160101T0000.json",
		"created": "20160101T0000",
		"provenance": "Первичная публикация",
		"valid": "20160101",
		"structure": "20160101T0000"
	}],
	"structure": [{
		"source": "http://opendata.predgor-ray.ru/2618017120-subdivisions/strucrure-20160130T0000.json",
		"created": "20160130T0000"
	},{
		"source": "http://opendata.predgor-ray.ru/2618017120-subdivisions/strucrure-20160101T0000.json",
		"created": "20160101T0000"
	}],
	"publisher": {
		"name": "Усс Дмитрий Васильевич",
		"phone": "+78796150664",
		"email": "it-apmr@yandex.ru"
	}
}
```

### Пример человекочитаемого содержания паспорта набора данных

HTML-разметка файла паспорта набора данных, содержит микроразметку [RDFa](https://www.w3.org/TR/rdfa-syntax/) (Resource Description Framework in attributes).

```html
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" version="XHTML+RDFa 1.0" dir="ltr" xmlns:dc="http://purl.org/dc/terms/" xmlns:foaf="http://xmlns.com/foaf/0.1/" xmlns:sioc="http://rdfs.org/sioc/ns#">
	<head>
		<title>Паспорт набора данных</title>
	</head>
	<body>
		<h1>Паспорт набора данных &laquo;Перечень структурных подразделений и подведомственных учреждений администрации Предгорного муниципального района Ставропольского края&raquo;</h1>
		<div about="/2618017120-subdivisions" typeof="foaf:Document">
			<div rel="dc:conformsTo" resource="http://opendata.gosmonitor.ru/standard/3.0"></div>
			<table>
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
						<td>5</td>
						<td>Ответственное лицо</td><td rel="dc:publisher" resource="#publisher">
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
						<td>
							<a href="http://opendata.predgor-ray.ru/2618017120-subdivisions/data-20160130T0000-structure-20160130T0000.json">data-20160130T0000-structure-20160130T0000.json</a>
						</td>
					</tr>
					<tr>
						<td>9</td>
						<td>Формат данных</td>
						<td property="dc:format" content="json">JSON</td>
					</tr>
					<tr>
						<td>10</td>
						<td>Описание структуры набора данных</td>
						<td>
							<a href="http://opendata.predgor-ray.ru/2618017120-subdivisions/strucrure-20160130T0000.json">strucrure-20160130T0000.json</a>
						</td>
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
						<td property="dc:valid" content="2016-01-30T00:00:00">По мере изменений</td>
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
					<div property="dc:provenance" content="Добавлены должности руководителей"></div>
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
	</body>
</html>
```

## Структура набора данных

### Пример машиночитаемого содержания структуры набора данных

```json
{
	"$schema": "http://json-schema.org/draft-04/schema#",
	"title": "Перечень структурных подразделений и подведомственных учреждений",
	"description": "Перечень структурных подразделений и подведомственных учреждений администрации Предгорного муниципального района Ставропольского края",
	"type": "object",
	"minItems": 1,
	"items": {
		"fullname": {
			"description": "Полное наименование",
			"type":"string"
		},
		"shortname": {
			"description": "Краткое наименование",
			"type":"string"
		},
		"head":	{
			"description": "Руководитель",
			"type":"object",
			"content": {
				"name": {
					"description": "Фамилия, имя, отчество",
					"type":"string"
				},
				"post": {
					"description": "Должность",
					"type":"string"
				}
			}
		},
		"contacts": {
			"description": "Контактная информация",
			"type":"object",
			"content": {
				"address": {
					"description": "Почтовый адрес",
					"type":"string"
				},
				"phone": {
					"description": "Телефон",
					"type":"string"
				},
				"email": {
					"description": "Адрес электронной почты",
					"type":"string"
				},
				"website":{
					"description": "Адрес веб-сайта",
					"type":"string"
				}
			},
			"required": ["address", "phone"]
		},
		"geo": {
			"description": "Географические координаты",
			"type":"object",
			"content": {
				"latitude": {
					"description": "Широта",
					"type": "number"
				},
				"longitude": {
					"description": "Долгота",
					"type":"number"
				}
			}
		},
		"units": {
			"description": "Подразделения",
			"type":"array"
		},
		"required": ["fullname", "contacts"]
	}
}
```