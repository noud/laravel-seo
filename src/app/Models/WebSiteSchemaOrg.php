<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 23 Dec 2019 19:54:37 +0000.
 */

namespace SEO\Models;

class WebSiteSchemaOrg extends \SEO\SchemaOrg\Models\WebSite
{
	public function web_site()
	{
		return $this->belongsTo(\SEO\Models\WebSite::class);
	}
}
