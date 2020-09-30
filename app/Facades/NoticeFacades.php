<?php 
namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class NoticeFacades extends Facade
{
	protected static function getFacadeAccessor()
    {
        return 'NoticeFacades';
    }
}
