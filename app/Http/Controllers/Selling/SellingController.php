<?php

namespace App\Http\Controllers\Selling;

use App\FaqTopic;
use App\SubscriptionPlan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SellingController extends Controller
{
    
    /**
     * Show the application dashboard.
     *
     * @return Response
     */
    public function index()
    {
        $faqTopics = FaqTopic::merchant()->with('faqs')->get();
        $subscription_plans = SubscriptionPlan::orderBy('order', 'asc')->get();

        return view('index', compact('subscription_plans', 'faqTopics'));
    }

    // return join-us kbami view
    public function joinus() {
        //$theme = Config::get('site.theme');
        //return View::addLocation(public_path() . '/themes/default/views/layouts/join_us_kbami');
        //return redirect("http://google.com")
        return view('modals._create_address')->render();

    }
}