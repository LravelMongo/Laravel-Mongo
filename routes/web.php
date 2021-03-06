<?php



/*App::bind('App\SocialMedia\Facebook',function(){
	return new App\SocialMedia\Facebook(Config('services.mailgun'));
});

$data = App::make('App\SocialMedia\Facebook');
dd($data);*/


Route::get('/',function(){
	// return sayHello(); // my custom function 
	// return FB::getDomain();
	return view('welcome');
});

Route::get('/many-to-many-relationship', function () {
	/*
		This is use for many to many relations 

			1. create table in db name: users with collumn (id, name , created_at, updated_at);

			2. now create table in db roles with column (id , role_name )

			3. now create table role_user and create column (id, role_id, user_id) , in role_user table 		role_id collum must be first before user_id column in db

			4.  now create roles function in User Model 
					public function roles()
				   {
				      return $this->belongsToMany('App\Role');
				   }

			5. now create users function in Role MOdel
					public function users(){
				   	return $this->belongsToMany('App\User');
				   }
	*/ 
	$User = App\Role::find(2)->users; // find user with role id 2
	$Role = App\User::find(1)->roles; // find role of user id 1
	echo "<pre> User ";
	print_r($User->toArray());
	echo "<br> Role ";
	print_r($Role->toArray());
    // return view('welcome');
});


Route::get('one-to-one',function(){
	$User = App\Models\User::find(1)->phone;
	$Phone = App\Models\Phone::find(1)->user;

	echo "<pre>";
	print_r($User->toArray());
	print_r($Phone->toArray());
});

Route::get('Has-Many-Through',function(){
	dd(App\HasManyThrough\Model\Countries::find(80)->posts->toArray());
});

Route::get('custom-package-creation',function(){
	return Message::display();
});

