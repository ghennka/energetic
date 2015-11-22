<?php

/**
 * Global helpers file with misc functions
 **/

if (! function_exists('app_name')) {
	/**
	 * Helper to grab the application name
	 *
	 * @return mixed
	 */
	function app_name() {
		return config('app.name');
	}
}

if ( ! function_exists('access'))
{
	/**
	 * Access (lol) the Access:: facade as a simple function
	 */
	function access()
	{
		return app('access');
	}
}

if ( ! function_exists('javascript'))
{
	/**
	 * Access the javascript helper
	 */
	function javascript()
	{
		return app('JavaScript');
	}
}

if ( ! function_exists('gravatar'))
{
	/**
	 * Access the gravatar helper
	 */
	function gravatar()
	{
		return app('gravatar');
	}
}


function _toFloat($value, $decimals = 2)
{
	return number_format( (float) $value, $decimals, ',', '.');
}

function _toInt($value)
{
	return number_format( (int) $value, 0, ',', '.');
}

function _toDate($value, $format = 'd.m.Y', $default = '-')
{
	if( empty($value) )
	{
		return $default;
	}
	$value = substr($value, 0, 10);
	return Carbon\Carbon::createFromFormat('Y-m-d', $value)->format($format);
}

function _toDateTime($value, $format = 'd.m.Y H:i:s', $default = '-')
{
	if( empty($value) )
	{
		return $default;
	}
	$value = substr($value, 0, 19);
	return Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $value)->format($format);
}

function _toFileSize($size, $precision = 2)
{
	if($size == 0){
		return _toFloat(0);
	}
    $base     = log($size, 1024);
    $suffixes = array('', 'K', 'M', 'G', 'T');   
    return _toFloat(round(pow(1024, $base - floor($base)), $precision)) . ' ' . $suffixes[floor($base)];
}

function _toShortDate($value){
    $mounth  = $value->month;
    $year    = $value->year;
    // $m      = date("F", mktime(0, 0, 0, $mounth, 10));
    $m 		= \Lang::get('date.month.'.$mounth);
    $year   = (string) $year;
    $m      = substr($m, 0, 3);
    $y      = substr($year, 2, 2);
    return $out    = $m . "'" . $y;

}

function _startDate($dat, $option){
    $date = Carbon\Carbon::createFromFormat('Y-m-d',$dat); 
	if($date->year == $option->start_year){
	    $temp =  $date->month;
	}else{
	    $temp = ($date->year - $option->start_year ) * 12 + $date->month;
	}
	return $temp - $option->start_mounth + 1;
}

function _before_out($in, $lenght){
	$out = [];
	for ($i=1; $i <= $lenght; $i++) { 
		$out[$i] = array_key_exists($i, $in) ? $in[$i] : 0;
	}
	return $out;
}
 
function _summ_array($array_a, $array_b, $lenght){
	$out = [];
	if(count($array_a) != $lenght || count($array_b) != $lenght){
		$array_a = _before_out($array_a, $lenght);
		$array_b = _before_out($array_b, $lenght);
		//throw new \Exception(__CLASS__ . '. Un array nu este definit');
	}

	for ($i=1; $i <= $lenght; $i++) { 
		$out[$i] = $array_a[$i] + $array_b[$i];
	}

	return $out;
}

function _diff_array($array_a, $array_b, $lenght){
	$out = [];
	if(count($array_a) != $lenght || count($array_b) != $lenght){
		$array_a = _before_out($array_a, $lenght);
		$array_b = _before_out($array_b, $lenght);
		//throw new \Exception(__CLASS__ . '. Un array nu este definit');
	}

	for ($i=1; $i <= $lenght; $i++) { 
		$out[$i] = $array_a[$i] - $array_b[$i];
	}

	return $out;
}