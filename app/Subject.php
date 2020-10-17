<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Subject extends Model
{
    protected $fillable = [
        'name','created_at', 'updated_at'
    ];
    public function users()
    {
        return $this->belongsToMany('App\Users', 'user_subject', 'subject_id', 'user_id')->withTimestamps();
    }
}