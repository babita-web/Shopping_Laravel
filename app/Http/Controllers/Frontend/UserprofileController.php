<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Product;

use Illuminate\Support\Facades\File;
class UserprofileController extends Controller
{

    public function home()
    {
        $products = Product::all();
        return view('frontend.index')->with('products', $products);
    }

    public function viewproducts()
    {
        $products = Product::all();
        return view('frontend.products',['products' => $products]);
    }
    public function profile()
    {
        return view('frontend.user.profile');
    }
    public function profileupdate(Request $request)
    {
        $user_id = Auth::user()->id;
        $user = User::findorfail($user_id);
        $user->firstname = $request->input('firstname');
        $user->lastname = $request->input('lastname');
        $user->address = $request->input('address');
        $user->phonenumber = $request->input('phonenumber');
       if($request->hasfile('image'))
       {
           $destination = 'uploads/profile/'. $user->image;
           if(File::exists($destination)){
               File::delete($destination);
           }
           $file = $request->file('image');
           $extension = $file->getClientOriginalExtension();
           $filename = time(). '.'.$extension;
           $file->move('uploads/profile/',$filename);
           $user->image = $filename;
       }
       $user->update();
       return redirect()->back()->with('status','Profile Updated');

    }
}
