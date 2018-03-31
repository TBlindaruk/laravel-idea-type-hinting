<?php
declare(strict_types = 1);

namespace Maksi\TypeHinting\Database\Eloquent;

use Illuminate\Database\Eloquent\Model as EloquentModel;
use Maksi\TypeHinting\Database\Eloquent\Concerns\ModelAnnotations;
use Maksi\TypeHinting\Database\Eloquent\Concerns\ModelStaticAnnotations;

/**
 * Class Model
 *
 * @package Maksi\TypeHinting\Database\Eloquent
 */
class Model extends EloquentModel
{
    use ModelAnnotations,
        ModelStaticAnnotations;
}
