<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Subject extends Model
{
    protected $guarded =[];
    protected  $table = 'subjects';
    protected $fillable = [
        'subject_name',
        'time',

    ];
}