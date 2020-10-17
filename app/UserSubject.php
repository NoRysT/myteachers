<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class UserSubject extends Model
{
    protected $table = 'user_subject';
    public static $rules = array(
        'subject_id' => 'required',
        'user_id' => 'required',
    );
}