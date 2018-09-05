<?php 

namespace App\Http\ViewComposer;

use Illuminate\Contracts\View\View; 
use Auth;

class ViewComposer {

    public function compose(View $view) {
  

   		$view->with('admin', Auth::guard('admin')->user() );  

 
    }
}