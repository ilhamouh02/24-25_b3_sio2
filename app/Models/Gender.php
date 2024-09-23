<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Gender
 * 
 * @property string $code
 * @property string $label
 *
 * @package App\Models
 */
class Gender extends Model
{
	#protected $table = 'PFX_genders';
	protected $primaryKey = 'code';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'label'
	];
}
