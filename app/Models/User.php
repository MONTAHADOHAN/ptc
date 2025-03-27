<?php

// app/Models/User.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    // الخصائص القابلة للتعبئة (mass assignable)
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    // خصائص مخفية من التوثيق (مثل كلمات المرور)
    protected $hidden = [
        'password',
        'remember_token',
    ];

    // تحديد نوع البيانات للحقول المخزنة (خصوصاً كلمات المرور)
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
