<?php
/**
 * Created by PhpStorm.
 * User: Pim Schwippert
 * Date: 11/17/2017
 * Time: 8:39 PM
 */

namespace App\Models;


class GameModel extends BaseModel
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'games';


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'description', 'ruleset'
    ];

}