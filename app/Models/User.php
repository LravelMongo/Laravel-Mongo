<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
	protected $table = 'user'; 


 	/*public function inverse_relation_phone(){
		return $this->belongsTo(\App\Models\Phone::class,'phone_id');
	}*/

/*
	public function one_to_one_phone(){
		return $this->belongsTo(\App\Models\Phone::class,'id','user_id'); 
		return $this->hasOne(\App\Models\Phone::class,'user_id','id'); 
			// user_id = foreign_key in phone table
			// id = parent table(Users) Cutom-key/primary key
	}*/


	public function phone(){

		return $this->belongsTo(\App\Models\Phone::class,'phone_id','id');
		
		/*
			1. by default parent table User ki foreign key se relation create hoga or parent table mai 
				foreign key methodName_id like: phone_id se banega 

			2. if methodName_id like:phone_id parent table (user) mai foreign key nhi hai then we will 
				pass second argument , which would be column name of parent table (user) 

			3. 3rd argument current table (Phone) ki primary key (id hogi)

		*/

		return $this->hasOne(\App\Models\Phone::class,'user_id','id');
			/*
				1. hasOne by default phone table mai user_id foreign key  or id primary key of user
					table assume kerke search kerega
			
				2. agar phone table mai foreign key jo hai wo alag hai tableName_id (user_id) se , then 
					we will pass column name of column name which is we are using in phone table as foreign key

				3. 3rd argument humara parent table ki primary key like:id hoti hai default otherwise 
					hum pass ker dete hai jisse relation banani hoti hai 
			*/

			// user_id = foreign_key in phone table
			// id = parent table(Users) Cutom-key/primary key
	}
}
