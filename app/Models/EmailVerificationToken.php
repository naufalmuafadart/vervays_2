<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Faker\Factory as Faker;

class EmailVerificationToken extends Model
{
    use HasFactory;

    protected $table = "email_verification_tokens";
    protected $primaryKey = "user_id";

    public static function createToken($userId)
    {
        EmailVerificationToken::deleteTokenByUserId($userId);
        $data = new EmailVerificationToken();
        $faker = Faker::create('id_ID');
        $token = $faker->md5;
        $data->user_id = $userId;
        $data->token = $token;
        $data->save();
        return $token;
    }

    public static function isExist($token, $userId)
    {
        $count = EmailVerificationToken::where('token', $token)
                                            ->where('user_id', $userId)
                                            ->count();
        return $count > 0;
    }

    public static function deleteTokenByUserId($user_id)
    {
        EmailVerificationToken::where('user_id', $user_id)->delete();
    }
}
