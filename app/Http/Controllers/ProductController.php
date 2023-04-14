<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    /**
    * Display a listing of the resource.
    */
    public function index()
    {
        //
    }
    
    /**
    * Show the form for creating a new resource.
    */
    public function create()
    {   
        // $categories= Category::all();
        return view('product/create');
    }
    
    /**
    * Store a newly created resource in storage.
    */
    public function store(Request $request)
    {   
        // dd($request->all());
        $product=Auth::user()->products()->create(
            [
                'name'=>$request->input('name'),
                'description'=>$request->input('description'),
                'price'=>$request->input('price'),
                'img' =>$request->has('img') ? $request->file('img')->store('public/products') : '/img/default.jpg',
                'category_id'=>$request->input('category_id'),
                
                ]
                
            );
            
            // dd($request);
            if($request->has('tag_id')){
            foreach ($request->input('tag_id') as $tag) {
                
                $product->tags()->attach($tag);
            }
        }
            
            
            return redirect()->route('homepage')->with('message' , 'Prodotto in vendita');
        }
        
        public function getProductsById(User $user){
            return view('product/productByUser' , compact('user'));
        }
        
        public function productsByCategory(Category $category){
            return view('product/category' , compact('category'));
        }
        /**
        * Display the specified resource.
        */
        public function show(Product $product)
        {
            return view('product/show' , compact('product'));
        }
        
        /**
        * Show the form for editing the specified resource.
        */
        public function edit(Product $product)
        {
            return view('product/edit' , compact('product'));
        }
        
        /**
        * Update the specified resource in storage.
        */
        public function update(Request $request, Product $product)
        {
            $product->update(
                [
                    'name'=>$request->input('name'),
                    'description'=>$request->input('description'),
                    'price'=>$request->input('price'),
                    'img' =>$request->has('img') ? $request->file('img')->store('public/products') : '/img/default.jpg',
                    'category_id'=>$request->input('category_id')
                    ]
                );
                $product->tags()->sync($request->input('tag_id'));
                
                return redirect(route('homepage'))->with('message' , 'Prodotto modificato');
            }
            
            /**
            * Remove the specified resource from storage.
            */
            public function destroy(Product $product)
            {   
                $product->delete();
                return redirect(route('homepage'))->with('message', 'Prodotto eliminato');
            }

           
        }
        