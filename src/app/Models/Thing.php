<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 23 Dec 2019 19:54:37 +0000.
 */

namespace SEO\Models;

class Thing extends \SEO\SchemaOrg\Models\Base\Thing
{
	public function web_sites()
	{
		return $this->hasMany(\SEO\Models\WebSite::class);
	}
}
