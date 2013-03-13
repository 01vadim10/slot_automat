<?php

function _RBMakeString($data, $prep='')
{
	$_res='';
	if(is_array($data))
		foreach($data as $key1=>$value1)
		{
			if(is_array($value1))
				$_res.=_RBMakeString($value1, $prep==''?$key1:$prep.'['.$key1.']');
			else
			{
				if($prep!='')
					$_res.=urlencode($prep)."[".urlencode($key1)."]=".urlencode($value1).'&';
				else
					$_res.=urlencode($key1)."=".urlencode($value1).'&';
			}
		}
	return $_res;
}
/*
function redirect($hdr='')
{
	$_info=parse_url($hdr);
	parse_str($_info['query'], $_params);

	$new_hdr='';

	if($_info['scheme']!='')
		$new_hdr.=$_info['scheme'].'://';

	if($_info['host']!='')
		$new_hdr.=$_info['host'];
	if($_info['path']!='')
		$new_hdr.=$_info['path'];

	if($_info['query'])
		$new_hdr.="?".$_info['query'];
	header("Location: ".$new_hdr);
	exit();
}
*/
function ComparePriorities($a, $b)
{
	global $_debug;
	if($_debug)
		echo $a['call_method'].'('.$a['priority'].') - '.$b['call_method'].'('.$b['priority'].')       '.(($a['priority']<$b['priority'])||($b['priority']==''&&$a['priority']<0)||($a['priority']==''&&$b['priority']>0)?1:-1).'<br>';
	if($a['priority']==$b['priority'])
		return 0;
	return ($a['priority']<$b['priority']&&$a['priority']!=''&&$b['priority']!='')||($b['priority']==''&&$a['priority']<0)||($a['priority']==''&&$b['priority']>0)?1:-1;
}

function stripinputslashes($array)
{
	if(is_array($array)&&count($array)>0)
		foreach($array as $key=>$value)
		{
			if(is_string($array[$key]))
				$array[$key]=stripslashes($value);
			if(is_array($array[$key]))
				$array[$key]=stripinputslashes($value);
		}
	return $array;
}

function array_merge_sub(&$array1, &$array2)
{
	$res=$array2;
	if(is_array($array1))
		foreach($array1 as $key=>$value)
		{
			if(!isset($res[$key]))
				$res[$key]=&$array1[$key];
			else
				if(is_array($res[$key])&&is_array($value))
					$res[$key]=array_merge_sub($array1[$key], $res[$key]);
		}
	return $res;
}


function array_extract_values($array, $field)
{
	$res=array();
	if(is_array($array)&&count($array)>0)
		foreach($array as $value)
			$res[]=$value[$field];
	return $res;
}

/**
 * Removes from QUERY string variable with name $item
 *
 * @param string $query - source query string
 * @param string $item - variable name to remove
 * @return string - new query string
 */
function unsetFromQueryString($query='', $item='')
{
	parse_str($query, $query);
	if(is_array($item))
	{
		foreach ($item as $_item)
			unset($query[$_item]);
	}elseif(is_string($item)){
		unset($query[$item]);
	}
	$query=_RBMakeString($query);
	return $query;
}

/**
 * sorts associative array by field
 *
 * @param array $array
 * @param string $field
 * @param boolean $desc
 * @return array
 */
function _arraySortByField($array=array(), $field=false, $desc=false)
{
	if(!$field || !is_array($array))
		return array();
	$res=array();
	foreach($array as $k=>$v)
		$res[$k]=$v[$field];
	if($desc)
		arsort($res);
	else asort($res);
	
	foreach ((array)$res as $k=>$v)
		$res[$k]=$array[$k];
	
	return $res;
}

function makeToken($length)
{
	$subsets[0] = array('min' => 48, 'max' => 57); // ascii digits
	$subsets[1] = array('min' => 65, 'max' => 90); // ascii lowercase English letters
	$subsets[2] = array('min' => 97, 'max' => 122); // ascii uppercase English letters
	
	$str = '';
	for($i = 0; $i < $length; $i++)
	{
		$s = rand(0, 2);
		$str .= chr(rand($subsets[$s]['min'], $subsets[$s]['max']));
	}
	
	return $str;
}

function return_bytes($val) {
    $val = trim($val);
    $last = strtolower($val[strlen($val)-1]);
    switch($last) {
        case 'g':
            $val *= 1024;
        case 'm':
            $val *= 1024;
        case 'k':
            $val *= 1024;
    }

    return $val;
}

?>