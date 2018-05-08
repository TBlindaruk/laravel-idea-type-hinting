# laravel-idea-type-hinting
It is a package for better type hinting

---
## Usages:

1. You can extend the `Maksi\TypeHinting\Database\Eloquent\Model` model.
2. You can use traits: `Maksi\TypeHinting\Eloquent\Concerns\ModelAnnotations.php` and `Maksi\TypeHinting\Eloquent\Concerns\ModelStaticAnnotations.php` directly in your models.

  Methods from Eloquent builder will be type hinted on your models after `model extending` or `traits usages`
 - `whereKey`
 - `whereKeyNot`
 - `where`
 - `find`
 - `findMany`
 - `findOrFail`
 - `findOrNew`
 - `firstOrNew`
 - `firstOrCreate`
 - `updateOrCreate`
 - `firstOrFail`
 - `firstOr`
 - `create`
 - `forceCreate`
 - `update`
 - `paginate`
 

 
 ---
 
 https://packagist.org/packages/maksi/laravel-idea-type-hinting

---

### Issue

In case if you have some idea for improvements, then please create an issue/PR for this project
