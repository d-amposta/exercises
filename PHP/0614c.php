<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<form></form>

	<?php
		$input = '20/02/2016';

		$date_array = explode('/', $input);
		$x = str_split($date_array[1]);
		//$n1 = substr($input, 0,2)
		$n1 = $date_array[0]/1;
		$n2 = $date_array[1]/1;
		$n3 = $date_array[2];

		/*$months = [
			null,
			'January',
			'February',
			'March',
			'April',
			'May',
			'June',
			'July',
			'August',
			'September',
			'October',
			'November',
			'December'
		];

		echo $months[$n2] . ' ' . $n1 . ' ' . $n3; 

		$zodiac = [
			null,
			'Capricorn', //Dec22-Jan19
			'Aquarius', //Jan20-Feb18
			'Pisces', //Feb19-Mar20
			'Aries', //Mar21-Apr19
			'Taurus', //Apr20-May20
			'Gemini', //May21-Jun 20
			'Cancer', //Jun21-Jul22
			'Leo', //Jul23-Aug22
			'Virgo', //Aug23-Sep22
			'Libra', //Sep23-Oct22
			'Scorpio', //Oct23-Nov21
			'Sagittarius' //Nov22-Dec21
			
		];

		$zodiac_border_day = [
			null,
			'20',
			'19',
			'21',
			'20',
			'21',
			'21',
			'23',
			'23',
			'23',
			'23',
			'22',
			'22'
		];*/

		/*$i=0;
		
		$eval = ($n2*100)+ ($n1);

		if(($eval>=120)&&($eval<=218)){
			echo $zodiac[2];
		}else if (($eval>=219)&&($eval<=320)){
			echo $zodiac[3];
		}else if (($eval>=321)&&($eval<=419)){
			echo $zodiac[4];
		}else if (($eval>=420)&&($eval<=520)){
			echo $zodiac[5];
		}else if (($eval>=521)&&($eval<=620)){
			echo $zodiac[6];
		}else if (($eval>=621)&&($eval<=722)){
			echo $zodiac[7];
		}else if (($eval>=723)&&($eval<=822)){
			echo $zodiac[8];
		}else if (($eval>=823)&&($eval<=922)){
			echo $zodiac[9];
		}else if (($eval>=923)&&($eval<=1022)){
			echo $zodiac[10];
		}else if (($eval>=1023)&&($eval<=1121)){
			echo $zodiac[11];
		}else if (($eval>=1122)&&($eval<=1221)){
			echo $zodiac[12];
		}else {
			echo $zodiac[1];
		}
*/

		$months = [
			null,
			'January',
			'February',
			'March',
			'April',
			'May',
			'June',
			'July',
			'August',
			'September',
			'October',
			'November',
			'December'
		];

		echo $months[$n2] . ' ' . $n1 . ' ' . $n3; 

		$zodiac = [
			'Capricorn', //Dec22-Jan19
			'Aquarius', //Jan20-Feb18
			'Pisces', //Feb19-Mar20
			'Aries', //Mar21-Apr19
			'Taurus', //Apr20-May20
			'Gemini', //May21-Jun 20
			'Cancer', //Jun21-Jul22
			'Leo', //Jul23-Aug22
			'Virgo', //Aug23-Sep22
			'Libra', //Sep23-Oct22
			'Scorpio', //Oct23-Nov21
			'Sagittarius' //Nov22-Dec21
			
		];

		$zodiac_border_day = [
			'20',
			'19',
			'21',
			'20',
			'21',
			'21',
			'23',
			'23',
			'23',
			'23',
			'22',
			'22'
		];

	$index=$n2-1;
	if($n1>$zodiac_border_day[$index]){
		$index++;
	}

	if($index>11){
		$index=0;	//wrap around balik sa simula
	}
	$z = $zodiac[$index];
	echo '<br>';
	echo $z;		


	?>
		

</body>
</html>