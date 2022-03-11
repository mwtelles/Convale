<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galeria extends Model
{
	protected $fillable = ['categoria','image_extension'];

	public static function categorias()
	{
		return [
			'REUNIOES',
			'COLETA',
			'SEDE',
			'MEMBROS',
			'MOMENTOS',
			'ASSEMBLEIA'
		];
	}
}
