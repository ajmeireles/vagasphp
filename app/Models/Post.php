<?php

namespace App\Models;

use App\Enums\{PostModality, PostSpecification, PostStatus, PostType};
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\{Model, SoftDeletes};

class Post extends Model
{
    use HasFactory;
    use HasUuids;
    use SoftDeletes;

    protected $casts = [
        'specification' => PostSpecification::class,
        'status'        => PostStatus::class,
        'type'          => PostType::class,
        'title'         => 'string',
        'description'   => 'string',
        'company'       => 'collection',
        'modality'      => PostModality::class,
        'link'          => 'string',
        'remuneration'  => 'collection',
        'requirement'   => 'collection',
        'notification'  => 'string',
        'configuration' => 'array',
    ];
}
