<?php
declare(strict_types = 1);

namespace Maksi\TypeHinting\Database\Eloquent\Concerns;

/**
 * Trait ModelAnnotations
 *
 * @method static \Illuminate\Database\Eloquent\Builder whereKey($id)
 * @method static \Illuminate\Database\Eloquent\Builder whereKeyNot($id)
 * @method static \Illuminate\Database\Eloquent\Builder where(string|array|\Closure $column, string $operator = null, $value = null, string $boolean = 'and')
 * @method static \Illuminate\Database\Eloquent\Model|\Illuminate\Database\Eloquent\Collection|static[]|static|null find(mixed $id, array $columns = ['*'])
 * @method static \Illuminate\Database\Eloquent\Collection findMany(\Illuminate\Contracts\Support\Arrayable|array $ids, array $columns = ['*'])
 * @method static \Illuminate\Database\Eloquent\Model|\Illuminate\Database\Eloquent\Collection findOrFail($id, array $columns = ['*'])
 * @method static \Illuminate\Database\Eloquent\Model findOrNew($id, array $columns = ['*'])
 * @method static \Illuminate\Database\Eloquent\Model firstOrNew(array $attributes, array $values = [])
 * @method static \Illuminate\Database\Eloquent\Model firstOrCreate(array $attributes, array $values = [])
 * @method static \Illuminate\Database\Eloquent\Model updateOrCreate(array $attributes, array $values = [])
 * @method static \Illuminate\Database\Eloquent\Model|static firstOrFail(array $columns = ['*'])
 * @method static \Illuminate\Database\Eloquent\Model|static|mixed firstOr($columns = ['*'], \Closure|null $callback = null)
 * @method static \Illuminate\Database\Eloquent\Model create(array $attributes = [])
 * @method static \Illuminate\Database\Eloquent\Model forceCreate(array $attributes)
 * @method static \Illuminate\Contracts\Pagination\LengthAwarePaginator paginate($perPage = 15, $columns = ['*'],$pageName= 'page', $page = null)
 * @method static int update(array $values)
 *
 * @package Maksi\TypeHinting\Database\Eloquent\Concerns
 */
trait ModelStaticAnnotations
{

}
