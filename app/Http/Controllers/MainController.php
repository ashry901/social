<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function main()
    {
        return view('front.main');
    }

    public function portfolio()
    {
        return view('front.portfolio');
    }

    public function jobs()
    {
        return view('front.jobs');
    }

    public function connection()
    {
        return view('front.connection');
    }

    public function profile()
    {
        return view('front.profile');
    }

    public function companyProfile()
    {
        return view('front.company-profile');
    }

    public function jobProfile()
    {
        return view('front.job-profile');
    }

    public function messages()
    {
        return view('front.messages');
    }

    public function notifications()
    {
        return view('front.notifications');
    }

    public function notFound()
    {
        return view('front.not-found');
    }

    public function faq()
    {
        return view('front.faq');
    }

    public function terms()
    {
        return view('front.terms');
    }

    public function privacy()
    {
        return view('front.privacy');
    }

    public function blog()
    {
        return view('front.blog');
    }

    public function blogSingle()
    {
        return view('front.blog-single');
    }

    public function contact()
    {
        return view('front.contact');
    }

    public function pricing()
    {
        return view('front.pricing');
    }

    public function maintence()
    {
        return view('front.maintence');
    }

    public function comingSoon()
    {
        return view('front.coming-soon');
    }

    public function signIn()
    {
        return view('front.sign-in');
    }

    public function signUp()
    {
        return view('front.sign-up');
    }

    public function editProfile()
    {
        return view('front.edit-profile');
    }

    public function forgotPassword()
    {
        return view('front.forgot-password');
    }

}
