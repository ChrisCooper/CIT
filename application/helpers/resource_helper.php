<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Image URL
 *
 * Create a local image URL based on your basepath.
 *
 * @access	public
 * @param	string
 * @return	string
 */
 
if ( ! function_exists('image_url'))
{
	function image_url($uri = '')
	{
		
		$CI =& get_instance();
		$CI->load->helper('url');
		
		$uri = 'images/' . $uri;
		return base_url() . $uri;
	}
}

//<------------------------------------------------------------------------------>

/**
 * Style URL
 *
 * Create a local css style URL based on your basepath.
 *
 * @access	public
 * @param	string
 * @return	string
 */
 
if ( ! function_exists('style_url'))
{
	function style_url($uri = '')
	{
		
		$CI =& get_instance();
		$CI->load->helper('url');
		
		$uri = 'css/' . $uri;
		return base_url() . $uri;
	}
}

//<------------------------------------------------------------------------------>

//<------------------------------------------------------------------------------>

/**
 * Style Tag
 *
 * Create a css style tag based on a URL to a css file.
 *
 * @access	public
 * @param	string
 * @return	string
 */
 
if ( ! function_exists('style_tag'))
{
	function style_tag($url = '')
	{
		return '<link href="'. $url .'" rel="stylesheet" type="text/css" />';
	}
}

//<------------------------------------------------------------------------------>

//<------------------------------------------------------------------------------>

/**
 * Script URL
 *
 * Create a local javascript URL based on your basepath.
 *
 * @access	public
 * @param	string
 * @return	string
 */
 
if ( ! function_exists('script_url'))
{
	function script_url($uri = '')
	{
		
		$CI =& get_instance();
		$CI->load->helper('url');
		
		$uri = 'scripts/' . $uri;
		return base_url() . $uri;
	}
}

//<------------------------------------------------------------------------------>


/* End of file resource_helper.php */
/* Location: ./application/helpers/resource_helper.php */