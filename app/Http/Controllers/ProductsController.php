<?php

namespace App\Http\Controllers;

use App\Category;
use App\Souscategorie;
use App\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products=Product::all();
        // from the table product we are going to take all the products 
        // and we will later store them in a variable called
        // $products 
        // when we are going to return the view and acces to it
        // we will have in our hand the variable passed in the second argument
        
        //called products which will contain the list of our products 


        return view('admin.product.index',compact('products'));
        // it is equivalent to products=>$products
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        $categories=Category::pluck('name','id');
        $souscat=Souscategorie::pluck('nom','id');
        // we will get from this variable 
        // which contains a lot of category objects
        // or we can say all the categories 
        // their names and ids 
        // so the meaning fo pluck is to get what we need from something 
        // and in our case we are going to get only the name and the id 


        return view('admin.product.create',compact(['categories','souscat']));
        /*

        c'est equivalent dans notre cas à 'categories'=>$categories

        donc dans ce cas la variable categories va prendre la valeur de categories 

        La fonction "view" de Laravel attend en second paramètre un tableau. La fonction "compact" est une fonction de php ( http://php.net/manual/fr/function.compact.php ) qui permet de créer un tableau automatiquement en prenant les noms des variables que tu lui as donné en paramètre.

Ainsi le code : 

return view('view', compact('value', 'name', 'firstname'));

Équivaut à : 

return view('view', array('value' => $value, 'name' => $name, 'firstname' => $firstname));

C'est quand même plus simple et plus joli.
        */


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        

        $formInput=$request->except('image');
    //  $formInput=$request->all();
    // when we run this command the varible request will have 
        

//        validation here we will validate our request
        // this object will get the item $request
        // and then will define a set of rules on them 
        $this->validate($request,[
            'name'=>'required',
            'price'=>'required',
            'image'=>'image|mimes:png,jpg,jpeg|max:10000'
        ]);
        // for the field image we should get an object with the type image
        


//        validation this is the original but due 
        // to my passion to test it I will modify the required condition 
        // of the price field
        
        /*

        $this->validate($request,[
            'name'=>'required',
            'size'=>'required',
            'price'=>'required',
            'image'=>'image|mimes:png,jpg,jpeg|max:10000'
        ]);

        */

//        image upload
        $image=$request->image;
        // we got here the image from our form 

        if($image){ // if there is an image then we will save it in our database 
            $imageName=$image->getClientOriginalName();//this will get us the original name
            // of the image which will be used later for ceating this image file
            $image->move('images',$imageName);//now we will move it to image folder
            // That we are going to create and will give the image the name
            // we've extracted from the $image variable via that get command 
            $formInput['image']=$imageName;
            // that's why we've done except image so that we can fill
            // it right now with the uploaded image that we hadn't before
            // we are here saving in our form an area item that 
            // will have the name of our image 

        }

        Product::create($formInput);
        //Let's now create an new object with the 
        return redirect()->route('admin.index');
        // We will be redirected to the route named
        // admin.index
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
  


    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product=Product::find($id);
        $categories=Category::pluck('name','id');
        return view('admin.product.edit',compact(['product','categories']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product=Product::find($id);
        $formInput=$request->except('image');

//        validation
        $this->validate($request,[
            'name'=>'required',
            'price'=>'required',
            'image'=>'image|mimes:png,jpg,jpeg|max:10000'
        ]);

        //        image upload
        $image=$request->image;
        if($image){
            $imageName=$image->getClientOriginalName();
            $image->move('images',$imageName);
            $formInput['image']=$imageName;
        }

         $product->update($formInput);
        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::destroy($id);
        return back();
    }

    public function uploadImages($productId,Request $request)
    {

            
        $product=Product::find($productId);

        //        image upload
        $image=$request->file('file');

        if($image){
            $imageName=time(). $image->getClientOriginalName();
            $image->move('images',$imageName);
            $imagePath= "/images/$imageName";
            $product->images()->create(['image_path'=>$imagePath]);
        }
        return "done";
        
        // Product::create($formInput);
    }
}
