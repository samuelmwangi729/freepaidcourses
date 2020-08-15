<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mpesa= new \Safaricom\Mpesa\Mpesa();
        //test c2b
                    $ShortCode="600610";
                    $CommandID= "CustomerPayBillOnline";
                    $Amount= "100";
                    $Msisdn=254708374149;
                    $BillRefNumber= "account";
        $token=$mpesa::generateSandBoxToken();
        // dd($token);
        $curl = curl_init();

        curl_setopt($curl, CURLOPT_URL, 'https://sandbox.safaricom.co.ke/mpesa/c2b/v1/registerurl');
        curl_setopt($curl, CURLOPT_HTTPHEADER, array('Host: sandbox.safaricom.co.ke','Content-Type:application/json','Authorization:Bearer '.$token));


        $curl_post_data = array(
            "ShortCode"=>"600610",
            "ResponseType"=> "[Cancelled/Completed]",
            "ConfirmationURL"=> "https://e74f86611fb7.ngrok.io/callback",
            "ValidationURL"=> "https://e74f86611fb7.ngrok.io/validation",
        );

        $data_string = json_encode($curl_post_data);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);
        curl_setopt($curl, CURLOPT_HEADER, false);
        $curl_response = curl_exec($curl);
    //  dd($curl_response);

        // dd($token);
        $b2bTransaction=$mpesa->c2b($ShortCode, $CommandID, $Amount, $Msisdn, $BillRefNumber );
        $callbackData=$mpesa->finishTransaction();
       return view('payment')->with('data',$callbackData);
       //try stkpush 
       $BusinessShortCode=600622;
       $LipaNaMpesaPasskey='bfb279f9aa9bdbcf158e97dd71a467cd2e0c893059b10f78e6b72ada1ed2c919';
       $TransactionType='CustomerPayBillOnline';
       $Amount=100;
       $PartyA=254708374149;
       $PartyB=600000;
       $PhoneNumber=254708374149;
       $CallBackURL='https://e74f86611fb7.ngrok.io/callback';
       $AccountReference="Membership Upgrade";
       $TransactionDesc="Upgrade Membership";
       $Remarks="Membership";
       $stkPushSimulation=$mpesa->STKPushSimulation($BusinessShortCode, 
       $LipaNaMpesaPasskey, 
       $TransactionType, $Amount, $PartyA, $PartyB, $PhoneNumber, 
       $CallBackURL, $AccountReference, $TransactionDesc, $Remarks);
    //    $callbackData=$mpesa->finishTransaction();
       dd($stkPushSimulation);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function calllback(Request $request)
    {
        dd($request->all());
    }
    public function validation(Request $request)
    {
        dd($request->all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
