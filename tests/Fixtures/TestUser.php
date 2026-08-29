<?php

namespace JeffersonGoncalves\FilamentFaq\Tests\Fixtures;

use Illuminate\Foundation\Auth\User as Authenticatable;

class TestUser extends Authenticatable
{
    protected $table = 'users';

    protected $guarded = [];

    public $timestamps = false;
}
