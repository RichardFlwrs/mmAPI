<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    //
    protected $fillable = [
        'name', 'owner_id'
    ];


    // --------------------------------------------------------------------------------------------- //
    // - Relations
    // --------------------------------------------------------------------------------------------- //
    public function user_owner()
    {
        return $this->hasMany('App\User', 'id', 'owner_id');
    }

    public function users_members()
    {
        return $this->belongsToMany('App\User', 'team_users', 'id_team', 'id_user');
    }
}
