<?php

namespace App\Observers;

use App\Models\Profile;

class ProfileObserver {
    public function deleting( Profile $profile ) {
        $profile->attachment->each->delete();
    }
}
