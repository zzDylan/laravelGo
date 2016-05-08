<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\Listable;

class Document extends Model
{
    use Listable;

    protected $guarded = [
        'id', 'created_at'
    ];
    protected $columns = ['id', 'title', 'thumb', 'description', 'content', 'link', 'hash', 'user_id', 'rank', 'created_at', 'updated_at'];

    public function publisher()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }
}
