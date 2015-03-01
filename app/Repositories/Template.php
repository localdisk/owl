<?php namespace Owl\Repositories;

use Illuminate\Database\Eloquent\Model;

class Template extends Model {
    protected $table = 'templates';

    protected $fillable = ['title','display_title','body','tags'];
}