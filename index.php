<!doctype html>
<!--[if lt IE 9]><html lang="ja" class="ie ie8"><![endif]-->
<!--[if IE 9]><html lang="ja" class="ie ie9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="ja"><!--<![endif]-->
<head>
<meta charset="utf-8">
<title>testing</title>
<meta name="description" content="">
<meta name="keywords" content="">
<link rel="stylesheet" type="text/css" href="css/init.css"/>
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<!--[if lt IE 9]>
<script type="text/javascript" src="js/html5shiv.min.js"></script>
<script type="text/javascript" src="js/selectivizr-min.js"></script>
<![endif]-->
</head>
<body>
	<div id="wrapper">

		<div class="inner">

			<script>
				var sortNumber = function (number) {
					number.sort(function (a, b) {
						if (a == b) {
							return 0;
						}
						return a < b ? -1 : 1;
					});
				};

				var number = [19, 3, 81, 1, 24, 21];
				sortNumber(number);
				console.log(number);
			</script>
			
		</div>

		<p>これはissue3のブランチです。</p>
	
	</div><!-- Component:#wrapper --> 


<!--[if lt IE 9]>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<![endif]--> 
<!--[if gte IE 9]><!--> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script> 
<!--<![endif]--> 
<script type="text/javascript" src="js/function.js"></script>
</body>
</html>