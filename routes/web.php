<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
Route::get('/', function () 
{
    return view('welcome');
});

*/

// Last tests before showing to khaled and Hassen 

// Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/','FrontController@index')->name('home');

Route::get('/mail-us', 'FrontController@mailus')->name('contact');






Auth::routes();


// we need to overide this logout controller in order to 
// be able to logout 
Route::get('/logout', 'Auth\LoginController@logout');


/*
Route::get('/', function () {

    return view('front.home');
})->name('accueil');
*/





Route::post('mail-us','ContactController@save');



// for the front controller and all the front stuff

//Route::get('/', 'FrontController@index')->name('home');

/* Routes from my previous project called finalstage */


Route::post('choix',function()

{
  // just to test the $_POST the value sent to this page
// var_dump($_POST);


if (isset($_POST['optionsRadios']))   // if ANY of the options was checked
{ 
	$option = $_POST['optionsRadios']; 
  	// echo $option;   
    // to echo the choice get from the input $option

  	if ($option == 'deliver')
  		{
  			 if (Auth::check()) 
        	{
          	 return redirect()->route('checkout.shipping');
         	 // return "shipping Form still testing " ;
       		 }
           return redirect('login');
  		}

  	if ($option == 'pay')
  	{
  		 if (Auth::check()) 
        {
           return view('front.shipping-pay');
          // return "shipping Form still testing " ;
        }
           return redirect('login');
           	
  	}

  	if ($option == 'book') // si le client vous seulement reserver le produit 
  		 {
  		 	if (Auth::check()) 
        	{
       			 return view('livraison.reserver') ;
         	 // return "shipping Form still testing " ;
        	}
           return redirect('login');

  		
		
		 }

}
else
  echo "nothing was selected.";




}


);





Route::get('/products','FrontController@products')->name('products');
Route::get('/about','FrontController@about');

// This line below made an error don't know why 
Route::resource('/cart','CartController');

Route::get('/category/{id}','CategoriesController@filter')->name('category.filter');

Route::get('/cart/add-item/{id}','CartController@addItem')->name('cart.addItem');


/* It ends here the routes of the old project */

Route::get('/shirts', 'FrontController@shirts')->name('shirts');
Route::get('/shirts/{product}', 'FrontController@shirt')->name('shirt');

// this middleware is created for info shipping 
Route::group(['middleware'=>'auth'],function(){

  Route::get('shipping-info','CheckoutController@shipping')->name('checkout.shipping');

});

// avant de passer au stage 






// front controller ends here 
// this a group of routes for the backend 
// We made a route group for this admin 
// in order to be able to have the control on his authentification 

/*
  -- Some explanation about the structure of this group --

	Route::group(['prefix'=>'admin','middleware'=>'auth'],
	Array item one prefix ism il group route
	valeur thenya is which middleware is going to be user to allow users to enter
	to these interfaces just to recall that we have set in admin middleware
	that the user should have a non nullable value in this column 

*/
Route::group(['prefix'=>'admin','middleware'=>['auth','admin']],
	function()
	{


    Route::post('toggledeliver/{orderId}','OrderController@toggledeliver')->name('toggle.deliver');
		Route::get('/',function(){

			return view('admin.index');
		})->name('admin.index');// we named this route as Admin.index
	
	Route::post('product/image-upload/{productId}','ProductsController@uploadImages');
   
    Route::resource('product','ProductsController');

    Route::resource('category','CategoriesController');

    Route::resource('souscategorie','SouscategorieController');
    
   
    // Route::get('orders/{type?}', 'OrderController@Orders');
    
    Route::get('orders/{type?}', 'OrderController@Orders');
    // le ponint d'interrogation indique que ce parametre type est optionel 
    // cela pour connaitre si la demande est de voir les commandes terminer ou en cours

    Route::get('newsletttersub','NewsletterController@admin')->name('admin.newslettersub');
    
    Route::get('contacts','ContactController@index')->name('admin.contacts');
    
    // this is for the sub cat route 
    
    Route::get('souscatcaract',function (){
      return view('admin/souscatcaract');
    });

	}
);

// this line above explains that the addressline is dedicated for all the users and not for the admin 

Route::resource('address','AddressController');

Route::get('checkout','CheckoutController@step1');

// the line below is to save the newsletter subscribers 

Route::post('/','NewsletterController@savenewsletter');


