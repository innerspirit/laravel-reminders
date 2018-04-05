<?php

namespace Mahdinickdel\Reminders;

use Illuminate\Database\Eloquent\Model;

class Reminder extends Model
{

    protected $table = 'reminders';
    protected $guarded = [];

    public function remindable()
    {
        return $this->morphTo();
    }
}