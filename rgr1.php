<html>
<head> 
<meta charset="UTF-8">
</head>
<body>
<?php
$flats = [
	'Однокомнатные' => [
		[
			'address' => 'Вилюйская, 5',
			'cost' => 2190000,
			'areaTotal' => 47,
			'areaLive' => 15,
			'areaKitchen' => 11,
			'photos' => [
				'http://cdn.n1.ru/cache/realty/photo/52dc0385b421b5f67cb8f7a970bd0d7a_1200_800.jpg',
				'http://cdn.n1.ru/cache/realty/photo/8b54efe6c16e78d8aca5b21bc4250e6f_1200_800.jpg'
			]
		],
		[
			'address' => 'Дуси Ковальчук, 238',
			'cost' => 2750000,
			'areaTotal' => 40,
			'areaLive' => 15,
			'areaKitchen' => 12,
			'photos' => [
				'http://cdn.n1.ru/cache/realty/photo/48efa8f6e915699aa161fc02742b9f1f_1200_800.jpg',
				'http://cdn.n1.ru/cache/realty/photo/7c50133db0add15b8d7ff50aa8138b42_1200_800.jpg'
			]
		],
		[
			'address' => 'Зорге, 229\3',
			'cost' => 960000,
			'areaTotal' => 31,
			'areaLive' => 18,
			'areaKitchen' => 0,
			'photos' => [
			]
		]
	],
	'Двухкомнатные' => [
		[
			'address' => 'Забалуева, 84',
			'cost' => 1385000,
			'areaTotal' => 41,
			'areaLive' => 23,
			'areaKitchen' => 4,
			'photos' => [
			]
		],
		[
			'address' => 'Петухова, 156',
			'cost' => 2670000,
			'areaTotal' => 56,
			'areaLive' => 25,
			'areaKitchen' => 10,
			'photos' => [
				'http://cdn.n1.ru/cache/realty/photo/a6b5fa7dc66fe26ba7fc34bb5a409ba5_1200_800.jpg'
			]
		]
	]
];
foreach($flats as $room => $type){  
	echo " <p> <div class='area'> $room </div> <p> ";
	foreach ($type as $room ) {?>
		<div class="flat">
			<div class="view"> <?php
				if (isset ($room['address'])){
					?> <div class="home"> Адрес. <?=htmlspecialchars($room['address'])?></div>
					<?php 
				}
				if (isset ($room['cost'])){ 
					?> <div class="home"> Цена. <?=htmlspecialchars(number_format($room['cost'],2,',',' '));?> рублей </div> 
					<?php 
				}
				if (isset ($room['areaTotal'])){
					?> <div class="home"> Общая площадь: <?=htmlspecialchars($room['areaTotal'])?> кв.м </div>
					<?php 
				}
				if (isset ($room['areaLive'])){
					?> <div class="home"> Жилая площадь: <?=htmlspecialchars($room['areaLive'])?> кв.м </div>
					<?php
				}
				if (isset ($room['areaKitchen'])){
					?> <div class="home"> Кухонная площадь: <?=htmlspecialchars($room['areaKitchen'])?> кв.м </div>
					<?php 
				} ?>
			</div>
		
		<div class="photos"> <?php
			if (isset($room['photos'])){
				foreach ($room['photos'] as $key => $photo) {
					echo "<p><img class='photo' src='".htmlspecialchars($photo)." '><p>";
				}
			} ?>
		</div> 
		</div>	<?
	echo "<hr>" ;		
	}
}?>
		
<style type="text/css">
.area {
	color: #FF1493;
	background-color:#FFEBCD;
	padding: 15px;
	font-style: normal;
	text-align: center;
	font-variant: inherit;
	font-weight: bold; 
	font-size: 200%;
}
.home {
	color: #4B0082;
	font-weight: 900;
	font-size: 150%;
}
 img.photo {
	height: 170px;
	width: 200px;
 }
 div.photos{ 
	width: 300px;
	float: right;
	
 } 
 div.view{
	float: right;
	width: 1000px;
 }
 .flat{
	padding-left: 20px;
	width: 100%;
	overflow: auto;
	margin:10px;
	float: right;
 }
 </style>
</body>
</html>	