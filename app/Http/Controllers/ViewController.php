<?php

namespace App\Http\Controllers;

use App\Models\Star;
use App\Models\About;
use App\Models\Heros;
use App\Models\Teams;
use App\Models\Footer;
use App\Models\Status;
use App\Models\Service;
use App\Models\category;
use App\Models\ContactUs;
use App\Models\ImgSlider;
use App\Models\Portfolio;
use App\Models\CallAction;
use App\Models\HeroSection;
use App\Models\Testimonial;
use App\Models\FooterService;

class ViewController extends Controller
{
    public function index()
    {
        $heroSection = HeroSection::orderBy('id','desc')->first();
        $heros = Heros::orderBy('sequence_listing')->get();
        $about = About::orderBy('id','desc')->first();
        $imgSlides = ImgSlider::orderBy('sequence_listing','ASC')->get();
        $services = Service::orderBy('sequence_listing','ASC')->get();
        $callAction = CallAction::orderBy('id','desc')->first();
        $categories = category::all();
        $portfolios = Portfolio::with('category')->get();
        $status = Status::orderBy('id','desc')->first();
        $testimonials = Testimonial::orderBy('sequence_listing')->get();
        $teams = Teams::orderBy('listing_sequence')->get();
        $contact = ContactUs::orderBy('id','desc')->first();
        $footers = Footer::all();
        $footerservice = FooterService::all();
        return view('welcome',compact('heroSection','heros','about','imgSlides','services','callAction','status','testimonials','teams','contact','categories','portfolios','footers','footerservice'));
    }


    public function team()
    {
        $heroSection = HeroSection::orderBy('id','desc')->first();
        $heros = Heros::orderBy('sequence_listing')->get();
        $footers = Footer::all();
        $footerservice = FooterService::all();
        $contact = ContactUs::orderBy('id','desc')->first();
        $teams = Teams::orderBy('listing_sequence')->get();
       
        return view('frontend.team',compact('heroSection','heros','teams','contact','footers','footerservice'));
    }

    public function service()
    {
        $heroSection = HeroSection::orderBy('id','desc')->first();
        $heros = Heros::orderBy('sequence_listing')->get();
        $footers = Footer::all();
        $footerservice = FooterService::all();
        $contact = ContactUs::orderBy('id','desc')->first();
        $services = Service::orderBy('sequence_listing','ASC')->get();
       
        return view('frontend.service',compact('heroSection','heros','services','contact','footers','footerservice'));
    }

    public function portfolio()
    {
        $heroSection = HeroSection::orderBy('id','desc')->first();
        $heros = Heros::orderBy('sequence_listing')->get();
        $footers = Footer::all();
        $footerservice = FooterService::all();
        $contact = ContactUs::orderBy('id','desc')->first();
        $portfolios = Portfolio::with('category')->get();
        $categories = category::all();

       
        return view('frontend.portfolio',compact('heroSection','heros','portfolios','contact','footers','footerservice','categories'));
    }

    public function about()
    {
        $heroSection = HeroSection::orderBy('id','desc')->first();
        $heros = Heros::orderBy('sequence_listing')->get();
        $footers = Footer::all();
        $footerservice = FooterService::all();
        $contact = ContactUs::orderBy('id','desc')->first();
        $about = About::orderBy('id','desc')->first();

        return view('frontend.about',compact('heroSection','heros','about','contact','footers','footerservice'));
    }

    public function contact()
    {
        $heroSection = HeroSection::orderBy('id','desc')->first();
        $heros = Heros::orderBy('sequence_listing')->get();
        $footers = Footer::all();
        $footerservice = FooterService::all();
        $contact = ContactUs::orderBy('id','desc')->first();

        return view('frontend.contact',compact('heroSection','heros','contact','footers','footerservice'));
    }
}
