<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @package 		PyroCMS
 * @subpackage 		Colour Peviewer
 * @author			Cameron Steer - @cdsteer
 *
 * Changes the colors on the page for a realtime peview
 */

class Widget_Colour_Previewer extends Widgets
{
	public $title		= 'Colour Previewer';
	public $description	= array(
		'en' => 'Changes the colours on the page for a realtime peview',
	);
	public $author		= 'Cameron Steer';
	public $website		= 'http://twiter.com/cdsteer';
	public $version		= '1.0';
	
	public $fields = array(
	
		array(
            'field' => 'name1',
            'label' => 'name1',
        ),
		
		array(
            'field' => 'element1',
            'label' => 'element1',
        ),
        
		array(
            'field' => 'colour_type1',
            'label' => 'colour_type1',
        ),
        
		array(
            'field' => 'name2',
            'label' => 'name2',
        ),
        
		array(
            'field' => 'element2',
            'label' => 'element2',
        ),
        
		array(
            'field' => 'colour_type2',
            'label' => 'colour_type2',
        ),
        
		array(
            'field' => 'name3',
            'label' => 'name3',
        ),
		
		array(
            'field' => 'element3',
            'label' => 'element3',
        ),
        
		array(
            'field' => 'colour_type3',
            'label' => 'colour_type3',
        ),
        
		array(
            'field' => 'name4',
            'label' => 'name4',
        ),
        
		array(
            'field' => 'element4',
            'label' => 'element4',
        ),
        
		array(
            'field' => 'colour_type4',
            'label' => 'colour_type4',
        ),
        
		array(
            'field' => 'name5',
            'label' => 'name5',
        ),
		
		array(
            'field' => 'element5',
            'label' => 'element5',
        ),
        
		array(
            'field' => 'colour_type5',
            'label' => 'colour_type5',
        ),

	);

	public function run($options)
	{
		return $options;
	}	
}
