<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Slider;

class SliderController extends Controller
{
	public function show()
    {
    	$num = 1; 
    	$slider = Slider::all();
 
    	return view('admin.slider' , compact('slider', 'num'));
    }


	public function store(Request $r)
    {


      	// return $this->validate(request(), [ 
       //          'photo'   => 'required|image', 
       //      ]);


    	if (request()->hasFile('photo')) { 
			
			$photo_name = time() . '.' . request('photo')->getClientOriginalExtension();
	    	$public_path = 'uploads/slider'; 
	     	request('photo')->move($public_path , $photo_name); 
			
			}else{
			
			$photo_name = 'default.jpg';
			
			} 

	     	Slider::create([
	     		'img' => $photo_name
	     	]);

 
    	return back();
    }
 





 public function update(Request $request, $id)
    {  

      	// return $this->validate(request(), [ 
       //          'photo'   => 'required|image', 
       //      ]);


    	if (request()->hasFile('photo')) { 
			
			$photo_name = time() . '.' . request('photo')->getClientOriginalExtension();
	    	$public_path = 'uploads/slider'; 
	     	request('photo')->move($public_path , $photo_name); 
			
			}else{
			
			$photo_name = 'default.jpg';
			
			} 

	     	$slider        = Slider::find($id);

	        $slider->update([
		     		'img' => $photo_name
		     	]);
	  
	    	return back();
    }


	public function destroy($id)
    {
        Slider::find($id)->delete();

        return back();
    }
}
