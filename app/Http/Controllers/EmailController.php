<?php

namespace App\Http\Controllers;

use App\Mail\ContactUs;
use App\Mail\GetQuotes;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EmailController extends Controller
{
    public function reqQuoteData(Request $request){
        $car_id = $request['car-model'];
        $cars = config("data.components.fleets.list");
        // dd($cars[$car_id]['name']);
        $data = [
            "name"=>$request->name,
            "email"=>$request->email,
            "phone"=>$request->phone,
            "car"=>$cars[$car_id]['name'],
            "details"=>[
                "pick_up"=>[
                    "location"=>$request['pick-up-location'],
                    "date"=>$request['pick-up-date'],
                    "time"=>$request['pick-up-time'],
                ],
                "drop_off"=>[
                    "location"=>$request['drop-off-location'],
                    "date"=>$request['drop-off-date'],
                    "time"=>$request['drop-off-time'],
                ]
            ],   
            "title"=>'Quote Request',
        ];
        return $data;
    } 

    public function reqData(Request $request){
        $data = [
            "name"=>$request->name,
            "email"=>$request->email,
            "phone"=>$request->phone,
            "message"=>$request->message,   
            "title"=>'Contact Us now',
        ];
        return $data;
    } 
    
    public function get_quote(Request $request){
        // dd($request->all());
        $validator = \Validator::make($request->all(), [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required',
            'pick-up-location' => 'required',
            'pick-up-date' => 'required',
            'pick-up-time' => 'required',
            'drop-off-location' => 'required',
            'drop-off-date' => 'required',
            'drop-off-time' => 'required',
        ]);
        
        if ($validator->fails()) {
            return response('Can not send. Failed!', 422 );
        }
        else{
            $data = $this->reqQuoteData($request);
            $to = config('data.site_info.contact_info.email');
            // dd($to);
            $sendMail = Mail::to($to)
            ->send(new GetQuotes($data));
            
        // dd($request->all());
            return response()->json(['message' => 'Request completed']);
        }
            // return response()->json(['message' => 'Request completed']);
    }
    
    public function contactus(Request $request){
        $validator = \Validator::make($request->all(), [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            // 'phone' => 'required',
            'message' => 'required',
            // 'gRecaptchaResponse' => 'required|min:15'
        ]);
        if ($validator->fails()) {
            return response('Can not send. Failed!', 422 );
        }
        else{
            $data = $this->reqData($request);
            // $data = $this->testData();
            $to = config('data.site_info.contact_info.email');
            // dd($data);
            $sendMail = Mail::to($to)
            ->send(new ContactUs($data));
            
            return response()->json(['message' => 'Request completed']);
        }
    }
}
