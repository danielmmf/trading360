<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model {

    protected $fillable = ["name", "desc"];

    protected $dates = [];

    public static $rules = [
        "name" => "required",
    ];

    public function users()
    {
        return $this->hasMany("App\User");
    }


}
