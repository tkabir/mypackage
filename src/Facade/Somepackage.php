<?php namespace Tkabir\Somepackage\Facade;

use Illuminate\Support\Facades\Facade;

class Somepackage extends Facade {

    protected static function getFacadeAccessor() { return 'somepackage'; }

}