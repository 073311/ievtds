<?php

namespace ievtds\Sortable\Tests\Models;

use ievtds\Sortable\Traits\Sortable;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use Sortable;
}
