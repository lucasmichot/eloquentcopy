EloquentCopy
===========

Provides a simple way to duplicate a model instance.

Requirements:
* PHP >= 5.4
* [Laravel 4.2](http://laravel.com/)

## Package installation

Begin by installing this package through Composer. Edit your project's `composer.json` file to require `lucasmichot/eloquentcopy`.

```json
"require": {
  "lucasmichot/eloquentcopy": "0.*"
}
```

Next, update Composer from the Terminal:

```sh
$ composer update
```

You can achieve these operations with this one-liner command :

```sh
$ composer require "lucasmichot/eloquentcopy:0.*"
```

## Usage

```php
use Lucasmichot\Eloquentcopy\CopyTrait;

class Post extends Eloquent
{
    use CopyTrait;

    // the code of your model comes here
}
```

Copying an instance of the model :

```php
$firstPost = Post::create([
	'title' => 'Foo',
	'text'  => 'Sample text',
]);

$secondPost = $firstPost->copy();
// $secondPost has no ID, no created_at and no updated_at attribute

$secondPost->save();
```

## TODO
* [ ] Finish documentation
