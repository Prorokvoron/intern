<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class TreeIndexResourceCollection extends ResourceCollection
{
    public static $wrap = false;

    public $collects = TreeIndexResourceItem::class;
}
