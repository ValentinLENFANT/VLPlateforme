<?php

namespace VL\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class VLUserBundle extends Bundle
{
	public function getParent()
	{
		return'FOSUserBundle';
	}
}