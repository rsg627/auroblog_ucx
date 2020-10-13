<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Events\PostSaving;

class post extends Model {

    use HasFactory;

    protected $dispatchesEvents  = [
        'saving' => PostSaving::class,
    ];

    public function getTitleCapAttribute() {
        return ucwords($this->title);
    }

}
