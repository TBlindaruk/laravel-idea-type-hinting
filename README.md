# laravel-idea-type-hinting
It is a package for better type hinting

You should extend the `Maksi\TypeHinting\Database\Eloquent\Model` and:
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
 
 methods from Eloquent builder will be type hinted on your models
