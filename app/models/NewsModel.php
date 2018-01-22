<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class NewsModel extends Eloquent {
	 protected $table = 'news';
	 protected $primaryKey = 'news_id';
	 public $timestamps = false;
}