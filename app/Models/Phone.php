<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{	

	protected $table = 'phone'; 

	/*public function inverse_relation_user(){
		return $this->belongsTo(\App\Models\User::class,'user_id');
	}*/

	public function user(){

		return $this->belongsTo(\App\Models\User::class,'user_id','id');

		/*
			1. by default parent table Phone ki foreign key methodName_id like: user_id se relation 
				create hoga and 	
				parent table mai foreign key methodName_id like: user_id se banega 

			2. if methodName_id like:user_id parent table (Phone) mai foreign key nhi hai then we will 
				pass second argument , which would be column name of parent table (Phone) which is used to create relation

			3. 3rd argument current table (User) ki primary key (id hogi)

				user_id = parent table foreign key
				id = current model/table ralation key

		*/



		return $this->hasOne(\App\Models\User::class,'phone_id','id');

		/*
				1. hasOne by default User table mai phone_id foreign key  or id primary key of Phone
					table assume kerke search kerega
			
				2. agar User table mai foreign key jo hai wo alag hai tableName_id (phone_id) se , then 
					we will pass column name of column name which is we are using in User table as foreign key

				3. 3rd argument humara parent table ki primary key like:id hoti hai default otherwise 
					hum pass ker dete hai jisse relation banani hoti hai 
			*/

			// phone_id = foreign_key in User table
			// id = parent table(Phone) Cutom-key/primary key
	}
}
