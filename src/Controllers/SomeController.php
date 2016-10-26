<?php namespace Tkabir\Somepackage\Controllers;

use App\Http\Controllers\Controller;
use Tkabir\Somepackage\Somepackage;

class SomeController extends Controller {
    public function foo() {
        $page_title      = '2 Bananas';
        $welcome_message = 'Welcome! Welcome! Have 2 bananas.';

        $data = compact('page_title', 'welcome_message');
        return view('somepackage::welcome', $data);
        //return view('somepackage::welcome');
        //return 'The controller works!';
        //return Somepackage::saySomething();
    }
}