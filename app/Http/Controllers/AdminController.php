<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        $data = array();

        $data['products_count'] = Product::count();
        $data['users_count'] = User::count();

        return view('admin.index', compact('data'));
    }

    public function products()
    {
        $products = Product::get();
        return view('admin.products.index', compact('products'));
    }

    public function productSingle($slug)
    {
        $product = Product::where('slug', $slug)->first();

        if (!$product) {
            return abort(404);
        }

        return view('admin.products.single', compact('product'));
    }

    public function productCreate(Request $request)
    {
        if ($request->isMethod('post')) {
            $rules = [
                'name' => 'required|min:5|max:1000',
                'description' => 'required|min:5',
                'price' => 'required|numeric',
                'stock' => 'required|numeric',
                'image' => 'max:2048'
            ];

            $validator = Validator::make($request->all(), $rules);

            if ($validator->fails()) {
                return redirect()->back()->with('error', 'Be sure to fill up all required fields!')->withErrors($validator)->withInput();
            }

            $user = User::find(Auth::user()->id);

            $data = [
                'name' => $request->name,
                'price' => $request->price,
                'stock' => $request->stock,
                'description' => $request->description,
                'slug' => Str::slug($request->name, '-')
            ];
            

            if ($request->hasFile('image')) {
                $image = $request->file('image');

                $imagename = 'product' . '_' . time() . '_' . $image->getClientOriginalName();
                $path = $image->storeAs('public/products/', $imagename);

                if ($path) {
                    $data['image'] = $imagename;
                }
            }

            $product = $user->products()->create($data);

            return redirect()->route('admin.products.index')->with('success', 'Successfully Added New Product: ' . $product->name);
        }

        return view('admin.products.add');
    }

    public function productDestroy(Request $request, $id)
    {
        $product = Product::find($id);

        if (!$product) {
            return redirect()->back()->with('error', 'This product does not exist!');
        }

        if (!empty($product->image)) {
            $image_exists = Storage::exists('public/products/' . $product->image);
    
            if ($image_exists) {
              Storage::delete('public/products/' . $product->image);
            }
        }

        $product->delete();

        return redirect()->route('admin.products.index')->with('success', 'Product has been deleted!');
    }

    public function users()
    {
        $users = User::get();
        return view('admin.users.index', compact('users'));
    }
}
