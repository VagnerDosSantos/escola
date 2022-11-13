<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Laravel\Sanctum\NewAccessToken;
use Illuminate\Support\Str;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'username',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function createToken()
    {
        $expiresAt = config('sanctum.expiration');
        $expiresAt = Carbon::now()->addMinutes($expiresAt);

        $token = $this->tokens()->create([
            'name' => $this->username,
            'token' => hash('sha256', $plainTextToken = Str::random(40)),
            'abilities' => ['*'],
            'expires_at' => $expiresAt,
        ]);

        return new NewAccessToken($token, $token->getKey() . '|' . $plainTextToken);
    }
}
