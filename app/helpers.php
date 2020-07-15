<?php

if (! function_exists('page_title')) {
	function page_title($title)
	{
		$base_title=config('app.name') . ' - Technologies';
		if ($title=='') {
			return $base_title;
		}
		else{
			return $title . ' | ' . $base_title;
		}
	}
}

if (! function_exists('set_active_route')) {
	function set_active_route($route)
	{
		return Route::is($route) ? 'active' : '';
	}
}

function produitsImages($path){
	return ($path) && file_exists('uploads/produitsImage/'.$path) ?
	asset('uploads/produitsImage/'.$path) : asset('uploads/produitsImage/bmd.jpg');
}

if(! function_exists ('date_compared')){
    function date_compared($date)
	{
		if($date->isDateAttents()){
            return 'text text-danger';
        }
        else{
            $date->date_fin;
        }
	}
}




 ?>
