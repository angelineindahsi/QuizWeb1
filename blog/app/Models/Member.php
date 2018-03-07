<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
	public $timestamps = false;
	public $table = "members";
	public $fillable =['username', 'email','password'];
	public $guarded = [];
}