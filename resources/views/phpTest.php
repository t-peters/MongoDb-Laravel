<?php

	class Test {
		static $paths = [
			'jquery' => ''
		];

		public function run($query = null) 
		{
			if( !$query ) 
			{
				throw new InvalidArgumentException('Please pass an asset to download');
			}
		}
	}