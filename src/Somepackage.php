<?php

namespace Tkabir\Somepackage;

class Somepackage {

    public static function saySomething() {
        //return 'Hello World!';
        //return config('somepackage.message');
        return trans('somepackage::messages.greeting');
    }


}