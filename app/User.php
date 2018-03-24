<?php

namespace App;

use App\Traits\HasWallet;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable implements WalletOwnerInterface
{
    use Notifiable;
    use HasApiTokens;
    use HasWallet;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname', 'lastname', 'password', 'username', 'gender', 'phone',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $appends = ['name'];

    public function findForPassport($username)
    {
        return $this->where('username', $username)->first();
    }

    public function getNameAttribute()
    {
        return $this->firstname . ' ' . $this->lastname;
    }

    public function pictures()
    {
        return $this->morphOne(Picture::class, 'imageable');
    }

    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }

    public function wishlist()
    {
        return $this->hasMany(Wishlist::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function transactions()
    {
        return $this->morphMany(Transaction::class, 'owner');
    }

    public function ratings()
    {
        return $this->hasMany(Rating::class);
    }
}
