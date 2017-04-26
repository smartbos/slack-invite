<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class InviteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

    public function invite(Request $request)
    {
        $email = $request->input('email');
        $ch = curl_init();
        
        curl_setopt($ch, CURLOPT_URL, "https://modernpug.slack.com/api/users.admin.invite");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,
            "email=" . $email . "&token=xoxp-6362499383-6362431985-8407021029-06893b");
        // receive server response ...
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        
        $server_output = json_decode(curl_exec($ch));
        
        curl_close($ch);
        
        if ($server_output->ok) {
            echo "<script> alert('" . $email . "로 초대장이 발송되었습니다.'); location.href='http://slack-invite.modernpug.org'; </script>";
        } else {
            echo "<script> alert('" . $server_output->error . "'); location.href='http://slack-invite.modernpug.org'; </script>";
        }
    }
}
