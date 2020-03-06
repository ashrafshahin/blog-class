<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\product;

class productController extends Controller
{
    public function add(){
    	return view('backend.add_product');
    }

    public function dbupload(Request $value){
    	$image = $value->file('photo');
    	$img_name = md5(time().rand()).".".$image->getClientOriginalExtension();
    	$image->move(public_path('images'),$img_name);

    	$up_data = new product([
    		
    		'name' => $value->get('name'),
    		'price' => $value->get('price'),
    		'photo' => $img_name
    	]);

    	$up_data->save();
    	
    }

    public function delete($id){
    	$data = product::find($id);
    	$data->delete();

    	// redirect line
    	return redirect()->back();

    }
}
