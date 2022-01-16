<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'body',
    ];
    
    public function getPaginateByLimit(int $limit_count = 5)
    {
        // updated_atで降順(DESC)に並べたあと、peginateで表示件数に制限をかける
        return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
}
