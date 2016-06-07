<?php

namespace Dcms\Users\Models;

use Dcms\Core\Models\EloquentDefaults;

	class Users extends EloquentDefaults
	{
		protected $connection = 'project';
	  protected $table  = "subscribers";
	}
