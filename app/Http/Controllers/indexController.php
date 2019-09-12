<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
//use App\Helpers\MailServicesHelper;
use Illuminate\Support\Facades\Mail;
use Session;
use Exception;

use App\Mail\ContactUs;
use App\Mail\NoreplyMail;

class IndexController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->data['copyright_year'] = date('Y');
        $this->data['rel_canonical'] =  url('/');
        $this->data['meta_description'] = "Professional painting services, we paint interiors, exteriors, commercials, Stradas... Get A Free Estimate today, call us at 778 987 0309 or visit our contact form.";
        $this->data['meta_keywords'] = "procorpainting, procor painting, painter, painter vancouver, interior painting, exterior painting, commercial painting, residential painting, lower maindland painter, painters, vancouver painter, professional painters, profesional painter, procor painters, procor vancouver, painters, vancouver painters, exterior painting vancouver, commercial painting vancouver, residential painting vancouver";
    }

    /**
     * Index Page, This is the main entrance to the site.
     *
     * @param Array $request
     * @return void
     */
    public function index(Request $request)
    {
        
        $this->data['title'] = "Procor Painting - Interior & Exterior Painting  - Vancouver & Lower Mainland";

        $this->data['menu'] = "home";
        return view('frontend.index', $this->data);
    }

    /**
     * Contact Page, This is the contact form we will provide an
     * Email template to see all request
     *
     * @param Array $request
     * @return void
     */
    public function contact(Request $request)
    {
        $this->data['menu'] = "contact";
        $this->data['title'] = "Procor Painting - Contact Us"; 
        
        if ($request->isMethod('post')) {
            
            try {
                
                $validator = Validator::make($request->all(), $this->contactRules);
                
                if ($validator->fails()) {
                    return back()->withErrors($validator)->withInput();
                }

                //Before Validator Check if the sum is right. 
                if ($request->input('contactRequest') != Session::get('sum_result')) {
                    Session::flash('error', "The security answer is not correct please try again");
                    return back()->withInput();
                }

                Mail::send(new ContactUs($request->all()));
                Mail::send(new NoreplyMail($request->all()));
                return redirect()->back()->with('message', 'Form sent successfully, We will contact you shortly.');
            
            } catch (Exception $e) {
                Session::flash('error', $e->getMessage());
                return back()->withInput();
            }
        }

        //Text box Security
        $this->data['sum_nunber1'] = rand(1, 10);   
        $this->data['sum_nunber2'] = rand(1, 10);   
        Session::put('sum_result', ($this->data['sum_nunber1'] + $this->data['sum_nunber2']));
               
        return view('frontend.contact', $this->data);
    }

    /**
     * About Us Page
     *
     * @param Array $request
     * @return void
     */
    public function about(Request $request)
    {
        $this->data['menu'] = "about";
        $this->data['title'] = "Procor Painting - About Us";        
        return view('frontend.about', $this->data);
    }

    /**
     * Project Page
     *
     * @param Array $request
     * @return void
     */
    public function projects(Request $request)
    {
        $this->data['menu'] = "projects";
        $this->data['title'] = "Procor Painting - Our Projects";        
        return view('frontend.projects', $this->data);
    }

    /**
     * Our Services Page
     *
     * @param Array $request
     * @return Response
     */
    public function services(Request $request)
    {
        $this->data['menu'] = "services";
        $this->data['title'] = "Procor Painting - Our Services";        
        return view('frontend.services', $this->data);
    }
}
