<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
if ( ! function_exists('filename_from_string'))
{
	function filename_from_string($string, $path, $extension = ".mp3")
	{
		$CI =& get_instance();
		$CI->load->helper('file');
		
		$all_filenames = get_filenames($path);
		$filename = "";
		$start_of_title = mb_substr($string, 0, 25);
		$start_of_title = reduce_to_alpha_num($start_of_title);
		if (mb_strlen($start_of_title) == 0) {
			$start_of_title = "nameless";
		}
		$random_number = "";
		
        
		do {
			$filename = $start_of_title . $random_number;
			$random_number = rand() % 10000;
		} while (in_array($filename . $extension, $all_filenames));
		
		return $filename;
	}
}


if ( ! function_exists('reduce_to_alpha_num'))
{
	function reduce_to_alpha_num($string)
	{
		$acceptable = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789 ";
		$length = mb_strlen($string);
		$result = "";
		
		for ($index = 0; $index < $length; $index++) {
			$char = mb_substr($string, $index, 1);
			
			if (mb_strpos($acceptable, $char) === FALSE) {
			} else {
				if (strcmp($char, " ") == 0) {
					$char = "_";
				}
				$result = $result . $char;
			}
		}
		return $result;
	}
}


/* End of file filename_helper.php */
/* Location: ./application/helpers/filename_helper.php */