<?php
	namespace VL\PlatformBundle\Antispam;

	class VLAntispam
	{
		public function isSpam($text)
		{
			return strlen($text) < 50;
		}
	}