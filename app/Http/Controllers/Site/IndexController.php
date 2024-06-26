<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\r;
use Illuminate\Http\Request;
use Illuminate\View\View;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Site.index');
    }
    public function login()
    {
        return view('Site.login');
    }

    public function Register()
    {
        return view('Site.register');
    }

    public function about()
    {
        return view('Site.about');
    }

    public function contact()
    {
        return view('Site.contact');
    }
    public function brothers()
    {
        return View('Site.brothers');
    }

    public function sisters()
    {
        return View('Site.sisters');
    }

    public function publishingCenter()
    {
        return View('Site.publishing-center');
    }

    public function kindergarten(){
        return View('Site.kindergarten');
    }

    public function loanInstitute()
    {
        return View('Site.loan-institute');
    }

    public function charity()
    {
        return View('Site.charity');
    }

    public function mahdia()
    {
        return View('Site.mahdia');
    }

    public function journal()
    {
        return View('Site.journal');
    }

    public function allServices(){
        return View('Site.all-services');
    }

    public function speech()
    {
        return View('Site.speech');
    }
    public function news()
    {
        return View('Site.news');
    }
    public function singleNews()
    {
        return View('Site.single-news');
    }

    public function meeting()
    {
        return View('Site.meeting');
    }

    public function singleMeeting()
    {
        return View('Site.single-meeting');
    }

    public function videoGallery()
    {
        return View('Site.video-gallery');
    }

    public function imageGallery()
    {
        return View('Site.image-gallery');
    }
    public function education()
    {
        return View('Site.education');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(r $r)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(r $r)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, r $r)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(r $r)
    {
        //
    }
}
