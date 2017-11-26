<?php
/**
 * Created by PhpStorm.
 * User: inet2005
 * Date: 11/26/17
 * Time: 4:00 PM
 */

namespace App;

use Illuminate\Notifications\Notifiable;



class Theme extends Model
{

    use Notifiable;



    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


}