<?php
class CustomMeta{

	public function before_read_file_meta(&$headers)
	{
		$headers['summary'] = 'Summary';
		
		$headers['type'] = 'Journal';
		
		/**
		 *
		 * These are the variables used on the About Page
		 *
		 **/
		 
		$headers['occupation'] = 'Occupation';
		$headers['location'] = 'LivingIn';
		$headers['reading'] = 'Reading';

	}
	
}
	
	?>