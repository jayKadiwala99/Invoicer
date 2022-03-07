<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Item extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public static function createItem($request){
        $data = $request->validated();

        // $data['company_id'] = $request->header('company');
        $data['creator_id'] = Auth::id();
        $data['company_id'] = 1;
        $data['currency_id'] = 12;
        $item = self::create($data);
        $item->save();
        // print_r($data);
        // echo $data['creator_id'];
        // $item = self::create($data);
        return $item;
    }
}
