<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model {

 protected $fillable = [ 'username','useremail','content', 'page_id'];


}