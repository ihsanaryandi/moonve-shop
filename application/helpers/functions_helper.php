<?php 


// Routes to asset folder
function css($file)
{

	$file_explode = explode('.', $file);

	$extension = end($file_explode);

	if($extension === 'css')
	{
		
		return '<link rel="stylesheet" type="text/css" href="' . base_url('assets/css/' . $file) . '">';

	}
	else
	{
		
		return '<link rel="stylesheet" type="text/css" href="' . base_url('assets/css/' . $file . '.css') . '">';

	}


}

function js($file)
{

	$file_explode = explode('.', $file);

	$extension = end($file_explode);

	if($extension === 'js')
	{
		
		return '<script src="' . base_url('assets/js/' . $file) . '"></script>';

	}
	else
	{
		
		return '<script src="' . base_url('assets/js/' . $file . '.js') . '"></script>';

	}

}

function img($file)
{

	return base_url('assets/img/' . $file);

}



?>