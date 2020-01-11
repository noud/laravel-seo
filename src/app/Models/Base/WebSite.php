<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 08 Jan 2020 22:21:44 +0000.
 */

namespace SEO\Models\Base;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Site
 * 
 * @property int $id
 * @property int $thing_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \SEO\SchemaOrg\Models\Thing $thing
 * @property \Illuminate\Database\Eloquent\Collection $web_sites
 * @property \Illuminate\Database\Eloquent\Collection $web_site_googles
 *
 * @package SEO\SchemaOrg\Models\Base
 */
class WebSite extends Eloquent
{
	protected $table = 'site';

	protected $casts = [
		'thing_id' => 'int'
	];

	public function thing()
	{
		return $this->belongsTo(\SEO\SchemaOrg\Models\Thing::class);
	}

	public function web_sites()
	{
		return $this->hasMany(\SEO\SchemaOrg\Models\WebSite::class);
	}

	public function web_site_googles()
	{
		return $this->hasMany(\SEO\Google\Structured\data\Models\WebSite::class);
	}
}
