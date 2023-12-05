<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Project extends Model
{
    use HasFactory;

    //la funzione è al singolare perche un tipo ha piu progetti
    public function type(){
        return $this->belongsTo(Type::class);
    }

    public function tecnologies(){
        return $this->belongsToMany(Tecnology::class);
    }

    protected $fillable = ['name', 'description', 'status', 'image', 'image_original_name', 'type_id', 'tecnologies_id'];


}
