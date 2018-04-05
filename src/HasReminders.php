<?php

namespace Mahdinickdel\Reminders;

trait HasReminders {
    public function reminders()
    {
        return $this->morphMany(Reminder::class, 'remindable');
    }
}