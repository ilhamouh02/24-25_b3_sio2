<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Role
 * 
 * @property int $id
 * @property string $label
 *
 * @package App\Models
 */
class Role extends Model
{
	#protected $table = 'PFX_roles';
	public $timestamps = false;

	protected $fillable = [
		'label'
	];
}
