<?php

namespace App\Http\Controllers;

use App\Mail\UserVerificationMail;
use App\Models\EmailVerificationToken;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use PharIo\Manifest\Email;

class SignUpController extends Controller
{
    public function index(Request $request)
    {
        return view("pages.signup");
    }

    public function signUp(Request $request)
    {
        $user_id = User::signUp(
            $request->firstname,
            $request->lastname,
            $request->email,
            $request->password
        );
        $token = EmailVerificationToken::createToken($user_id);
        Mail::to($request->email)->send(new UserVerificationMail($token, $user_id));
        return Redirect::to('/email_verification?email='.$request->email."&isresend=false&userid=".$user_id);
    }

    public function emailVerification(Request $request)
    {
        return view('pages.email_verification', [
            "email" => $request->email,
            "isResend" => $request->isresend,
        ]);
    }

    public function verficateEmail(Request $request)
    {
        if (EmailVerificationToken::isExist($request->token, $request->user_id)) {
            EmailVerificationToken::deleteTokenByUserId($request->user_id);
            User::verificateEmail($request->user_id);
            return Redirect::to("/login?email=&response=Email Terverifikasi&rescol=green");
        }
        else {
            return view('pages.error.404');
        }
    }

    public function resendEmailVerification(Request $request)
    {
        $user_id = $request->userid;
        $token = EmailVerificationToken::getTokenByUserId($user_id);
        $email = User::getEmailById($user_id);
        Mail::to($email)->send(new UserVerificationMail($token, $user_id));
        return true;
    }
}
