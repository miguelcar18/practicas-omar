<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;
use DB;
use Nexmo;
use Exception;
use App\Notifications\TwoFactorAuth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        return view('home');
        
    }

    public function tnc(){
        if(!config('config.enable_tnc'))
            return redirect('/');

        return view('tnc');
    }

    public function maintenance(){
        if(!config('config.maintenance_mode'))
            return redirect('/');

        return view('maintenance');
    }

    public function lock(Request $request){

         if ($request!=null) {
            session(['locked' => 1]);
        }

        if(session('locked'))
            return view('auth.lock');
        else
            return redirect('/home');
    }

    public function unlock(Request $request){

        if(!Auth::check())
            return redirect('/');

        $password = $request->input('password');

        if(\Hash::check($password,Auth::user()->password)){
            session()->forget('locked');
             session()->put('last_activity',time());
            return redirect('/home');
        }

        return redirect('/lock')->withErrors(trans('auth.failed'));
    }

    public function activityLog(){
        $table_data['activity-log-table'] = array(
            'source' => 'activity-log',
            'title' => 'Activity Log List',
            'id' => 'activity_log_table',
            'disable-sorting' => 1,
            'data' => array(
                'S No',
                trans('messages.user'),
                trans('messages.activity'),
                'IP',
                trans('messages.date'),
                'User Agent',
                )
            );

        return view('activity_log.index',compact('table_data'));
    }

    public function activityLogList(Request $request){
        if(\Entrust::can('manage-user'))
            $activities = \App\Activity::orderBy('created_at','desc')->get();
        else
            $activities = \App\Activity::whereUserId(\Auth::user()->id)->orderBy('created_at','desc')->get();

        $rows = array();
        $i = 0;
        foreach($activities as $activity){
            $i++;

            $activity_detail = ($activity->activity == 'activity_added') ? trans('messages.new').' '.trans('messages.'.$activity->module).' '.trans('messages.'.$activity->activity) : trans('messages.'.$activity->module).' '.trans('messages.'.$activity->activity);
            $row = array(
                $i,
                $activity->User->full_name,
                $activity_detail,
                $activity->ip,
                showDateTime($activity->created_at),
                $activity->user_agent
                );

            $rows[] = $row;
        }

        $list['aaData'] = $rows;
        return json_encode($list);
    }
}
