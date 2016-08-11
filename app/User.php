<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        // 'name', 
        'email', 
        'referred_by',
        // 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public static function boot(){
        parent::boot();

        static::creating(function($user){
            $user->token         = str_random(30);
            $user->referral_code = str_random(7);
        });
    }

    public function createWithReferral($data){
        if ($data['referral_code']) {
            $query  = $this->select();
            $query  = $query->where(['referral_code' => $data['referral_code']]);
            $userId = $query->value('id');
            if ($userId) {
                $data['referred_by'] = $userId;
            }
        }
        return $this->create($data);
    }

    public function confirmEmail(){
        $this->verified = true;
        $this->token = null;
        $this->save();

        return [
            'email'         => $this->email,
            'referral_code' => $this->referral_code,
        ];
    }
}
