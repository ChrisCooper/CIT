<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Truncate
 *
 * Limits a string to a length, and truncates with elipses if necessary.
 *
 */
 
if ( ! function_exists('truncate'))
{
	function truncate($string, $length)
	{
		if (strlen($string) > $length) {
            $string = substr($string, 0, $length - 3) . '...';
        }
		return $string;
	}
}

//<------------------------------------------------------------------------------>

//<------------------------------------------------------------------------------>

/**
 * MySQL to Pretty Date
 *
 * Converts a date in MySQL format to a nice human-readable date.
 *
 */
 
if ( ! function_exists('MySQL_to_pretty_date'))
{
	function MySQL_to_pretty_date($date)
	{
		return date("F j, Y ", strtotime($date));
	}
}

//<------------------------------------------------------------------------------>


/* End of file presentation_helper.php */
/* Location: ./application/helpers/presentation_helper.php */