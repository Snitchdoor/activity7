<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Group extends Model {
    protected $fillable = ['name', 'schedule'];

    public function students() { return $this->hasMany(User::class); }
    public function courses() { return $this->hasMany(Course::class); }
}
