<?php

namespace App\Models;

// app/Models/Instructor.php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Instructor extends Authenticatable
{
    use Notifiable;

    protected $guarded = [];

    protected $casts = [
        'areas_of_expertise' => 'json',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function areasOfExpertiseOptions()
    {
        return [
            'web_development' => 'Web Development',
            'mobile_development' => 'Mobile Development',
            'data_science' => 'Data Science',
            'digital_marketing' => 'Digital Marketing',
        ];
    }
}
