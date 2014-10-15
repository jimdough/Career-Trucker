<?php

require_once('CPTLib\http\response.php');

if(!defined('ACTION_QUALIFIED')) define('ACTION_QUALIFIED', 'include:/HTTP/common/form/leadform.php');
if(!defined('ACTION_DISQUALIFIED')) define('ACTION_DISQUALIFIED', 'redirect:dq.php');

$post_data = $_POST;

/* See if they answered No to having a CDL */

if(!empty($post_data) && array_key_exists('HasCDL', $post_data) && $post_data['HasCDL'] == 0)
{
	include('/HTTP/common/form/leadform.php');
	exit;
}

/* Load questions */

$config_dataset = include_once('config.php');

/* Do some preprocessing */

$form_incomplete = false;

foreach($config_dataset as $name => &$cdata)
{
	$cdata['selected'] = isset($post_data[$name]) ? $post_data[$name] : null;
	
	$cdata['incomplete'] = false;
	
	if(!empty($post_data) && isset($post_data['b_qchart']) && empty($cdata['selected']))
	{
		if(is_array($cdata['required']))
		{
			foreach($cdata['required'] as $field => $value)
				if(isset($post_data[$field]) && $post_data[$field] === $value)
					$cdata['incomplete'] = true;
		}
		else
		{
			$cdata['incomplete'] = (bool)$cdata['required'];
		}
	}
	
	if($cdata['incomplete'])
		$form_incomplete = true;
	
	if(isset($cdata['show']) && !empty($cdata['selected']))
	{
		foreach((array)$cdata['selected'] as $value)
		{
			if(in_array($value, (array)$cdata['show'][0]))
				foreach((array)$cdata['show'][1] as $ctlname)
					$config_dataset[$ctlname]['hide'] = false;
		}
	}
}

/* If the form was posted and complete, determine if the user is disqualified */

if(!empty($post_data) && isset($post_data['b_qchart']) && !$form_incomplete)
{
	$form_disqualified = false;
	
	foreach($config_dataset as $name => $cdata)
	{
		$selected = empty($cdata['selected'])
			? array() : (array)$cdata['selected'];
		
		foreach($selected as $value)
		{
			if(in_array($value, (array)$cdata['fail']))
				$form_disqualified = true;
		}
	}
	
	$url = $form_disqualified ? ACTION_DISQUALIFIED : ACTION_QUALIFIED;
	
	list($verb, $url) = explode(':', $url);
	
	if($verb == 'include')
	{
		include($url);
		exit;
	}
	else
	{
		http\response\redirect($url);
		exit;
	}
}

foreach(array_keys($config_dataset) as $name)
	unset($post_data[$name]);

$hidden_fields = array();

foreach($post_data as $name => $value)
{
	$name = htmlentities($name);
	
	$value = htmlentities($value);
	
	$hidden_fields[] = "<input type=\"hidden\" name=\"$name\" value=\"$value\"/>";
}

$hidden_fields = implode('', $hidden_fields);

/* Output the form */

include('head.template.php');

foreach($config_dataset as $name => $cdata)
{
	$type = isset($cdata['type']) ? $cdata['type'] : 'dropdown';
	
	$required = (bool)@$cdata['incomplete'];
	
	$options = $cdata['options'];
	
	$selected = (bool)@$cdata['selected'];
	
	$hidden = (bool)@$cdata['hide'];
	
	$onclick = false;
	
	$opt_script = array_combine(array_keys($options), array_fill(0, count($options), null));
	
	if(isset($cdata['show']))
	{
		foreach(array_keys($options) as $value)
		{
			$s = (in_array($value, (array)$cdata['show'][0])) ? 'block' : 'none';
			
			$ctls = array_map(function($v){return "'$v'";}, (array)$cdata['show'][1]);
			
			$opt_script[$value] = "qdisplay([" . implode(',', $ctls) . "],'$s');";
		}
	}
	
	ob_start();
	
	include("$type.control.php");
	
	$control = ob_get_contents();
	
	ob_end_clean();
	
	$text = $cdata['text'];
	
	include('item.template.php');
}

include('foot.template.php');

?>
