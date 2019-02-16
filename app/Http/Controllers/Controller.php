<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * Public variables
     *
     */
    public $data;

    /**
     * Protected variables for all controllers.
     *
     * @var string
     */
    protected $contactRules = [ 'contactName' => 'required|string',
    							'contactPhone' => 'required',
                                'contactOption' => 'required',
                                'contactEmail'  => 'required|email',
                                'contactMessage' => 'required',
                                'contactRequest' => 'required'];
}
