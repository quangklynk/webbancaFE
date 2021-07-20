<?php
function public_url($url = '')
{
	return base_url('resource'.$url);
}

function products_url($url = '')
{
	return base_url('resource/imgs/products/'.$url);
}

function slider_url($url = '')
{
	return base_url('resource/imgs/slide/'.$url);
}

function blog_url($url = '')
{
	return base_url('resource/imgs/blog/'.$url);
}

function imgs_url($url = '')
{
	return base_url('resource/imgs/'.$url);
}

function pre($list, $exit = true)
{
    echo "<pre>";
    print_r($list);
    if($exit)
    {
        die();
    }
}
/*cấu hình gọi gọn các file js css*/