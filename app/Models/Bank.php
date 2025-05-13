<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Bank
 *
 * @property $id
 * @property $name
 * @property $address
 * @property $account_no
 * @property $iban
 * @property $swift
 * @property $manufracturer_address
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Bank extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['name', 'address', 'account_no', 'iban', 'swift', 'manufracturer_address'];


}
