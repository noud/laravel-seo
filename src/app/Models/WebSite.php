<?php

namespace SEO\Models;

class WebSite extends \SEO\Models\Base\WebSite
{
	protected $fillable = [
		'thing_id'
	];
	public function web_sites_schema_org()
	{
		return $this->hasMany(\SEO\SchemaOrg\Models\WebSite::class);
	}

	public function web_sites_google()
	{
		return $this->hasMany(\SEO\Google\Structured\data\Models\WebSite::class);
	}
}