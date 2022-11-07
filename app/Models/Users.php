<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;
    //use WithPagination;
    //Paginator::useBootstrap();

    protected $table = "cfmbb_users";
    public $timestamps = false;
    public $primaryKey = 'member_id';

        protected $fillable = [
        'member_id',
        'username',
        'password',
        'Level',
        'Title',
        'FirstName',
        'MidName',
        'LastName',
        'Suffix',
        'Organization',
        'Address1',
        'Address2',
        'City',
        'State',
        'PostalCode',
        'Bio',
        'emailaddress',
        'Enewsletter',
        'Telephone',
        'PhotoID',
        'RenewDate',
        'Latitude',
        'Longitude',
        'Country',
        'ChkAddress',
        'ChkBio',
        'ChkEmail',
        'ChkTelephone',
        'ChkPhotoID',
        'datecreated',
        'user_id'

    ];

    protected $guarded = [];

    public function user() {
        return $this->belongsTo('App\User');
    }
}
