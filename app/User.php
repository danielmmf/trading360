<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model {

    protected $fillable = ["name", "email", "telefone", "genero", "data_nascimento", "rg", "cpf", "escolaridade", "password", "logado", "login", "imagem", "profile_img", "raw_login_info", "subscription_id", "parent_user", "access_token", "user_token", "expiration_time", "group_id"];

    protected $dates = [];

    public static $rules = [
        "name" => "required",
        "email" => "required",
        "telefone" => "required",
        "genero" => "required",
        "data_nascimento" => "required",
        "rg" => "required",
        "cpf" => "required",
        "escolaridade" => "required",
        "group_id" => "required|numeric",
    ];

    public function group()
    {
        return $this->belongsTo("App\Group");
    }


}
