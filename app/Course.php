<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Course extends Model {
    protected $fillable = ['course_key', 'title', 'cover', 'content', 'kit_id', 'group_id'];

    public function kit() { return $this->belongsTo(Kit::class); }
    public function group() { return $this->belongsTo(Group::class); }
}
