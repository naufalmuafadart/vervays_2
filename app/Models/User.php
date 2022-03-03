<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    // protected $fillable = [
    //     'name',
    //     'email',
    //     'password',
    // ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    // protected $hidden = [
    //     'password',
    //     'remember_token',
    // ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    // protected $casts = [
    //     'email_verified_at' => 'datetime',
    // ];

    protected $table = "users";
    protected $primaryKey = 'id';
    public $incrementing = false;

    protected $attributes = [
        "last_name" => null,
        "birth_day" => null,
        "phone_number" => null,
        "gender" => null,
        "is_deleted" => false,
    ];

    public static function signUp($firstName, $lastName, $email, $password)
    {
        $password = Hash::make($password);
        
        $user = new User;
        $user->id = User::count() + 1;
        $user->first_name = $firstName;
        $user->last_name = $lastName;
        $user->email = $email;
        $user->password = $password;
        $user->save();
        return $user->id;
    }

    public static function checkLogin($email, $password)
    {
        $user = User::where('email', $email)
                        ->where('is_deleted', 0)
                        ->where('email_veriefied_at', '!=', null)
                        ->select('password')
                        ->first();
        if ($user == null) { // jika tidak ada email yang sesuai
            $user = User::where('email', $email)
                            ->where('is_deleted', 0)
                            ->select('password')
                            ->first();
            if ($user==null) {
                return "Email tidak ditemukan";
            }
            else {
                return "Email belum terverifikasi";
            }
        }
        else { // jika ada email yang sesuai
            if (Hash::check($password, $user->password)) { // jika password benar
                return "Login";
            }
            else { // jika password salah
                return "Password salah";
            }
        }
    }

    public static function getIdByEmail($email)
    {
        $user = User::where('email', $email)
                        ->where('is_deleted', 0)
                        ->select('id')
                        ->first();
        if ($user != null) {
            return $user->id;
        }
        else {
            return null;
        }
    }

    public static function verificateEmail($userId)
    {
        $user = User::find($userId);
        $user->email_veriefied_at = new Carbon();
        $user->save();
    }

    public static function isEmailVerified($userId)
    {
        $user = User::find($userId);
        return $user->email_veriefied_at != null;
    }

    public static function getFullNameById($userId)
    {
        $user = User::find($userId);
        $fullname = $user->first_name;
        if ($user->last_name != null) {
            $fullname = $fullname." ".$user->last_name;
        }
        return $fullname;
    }

    public static function getFirstNameById($userId)
    {
        $user = User::find($userId);
        return $user->first_name;
    }

    public static function getEmailById($id)
    {
        return User::where('id', $id)->first()->email;
    }
}
