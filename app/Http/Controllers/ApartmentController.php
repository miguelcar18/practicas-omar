<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Apartment;
use Entrust;

class ApartmentController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {

    }	

    public function index() {
    	
    	//$apartments = Apartment::all();
    	//$apartments = Apartment::orderBy('id','ASC');
 
        if (!Entrust::can('manage-user'))
            return redirect('/home')->withErrors(trans('messages.permission_denied'));

        $col_heads = array(
            trans('messages.option'),
            trans('messages.code')
        );

        if (!config('config.login'))
            array_push($col_heads, trans('messages.username'));

        array_push($col_heads, trans('messages.owner'));
        array_push($col_heads, trans('messages.phone'));
        array_push($col_heads, trans('messages.email'));
        array_push($col_heads, trans('messages.status'));
        array_push($col_heads, trans('messages.signup') . ' ' . trans('messages.date'));
        array_push($col_heads, trans('messages.last') . ' ' . trans('messages.register') . ' ' . trans('messages.date'));

        $table_data['apartment-table'] = array(
            'source' => 'apartment',
            'title' => 'Apartment List',
            'id' => 'apartment_table',
            'data' => $col_heads
        );

        //$assets = ['recaptcha'];
        return view('apartment.index', compact('table_data'));


    	//return view('apartment.index')->with('apartments', $apartments);
    }

    public function lists(Request $request) {

        if (defaultRole())
            $apartments = Apartment::all();
        else
            $apartments = Apartment::whereIsHidden(0)->get();
 
        $rows = array();
        foreach ($apartments as $aprt) {
            $row = array(
                '<div class="row col s5">' .
                '<a href="/apartments/' . $aprt->id . '" class="col s1 mdi-action-visibility" style="font-size:20px"> <i class="fa fa-arrow-circle-o-right" data-toggle="tooltip" title="' . trans('messages.view') . '"></i></a>' .
                (($aprt->status == 'habilitado'  && Entrust::can('change-apartment-status')) ? '<a href="#" class="col s1 mdi-notification-event-available " style="font-size:20px" data-ajax="1" data-extra="&user_id=' . $aprt->id . '&status=ban" data-source="/change-apartment-status"> <i class="fa fa-ban" data-toggle="tooltip" title="' . trans('messages.ban') . ' ' . trans('messages.user') . '"></i></a>' : '') .
                (($aprt->status == 'deshabilitado') ? '<a href="#" class="col s1 mdi-notification-event-busy" style="font-size:20px" data-ajax="1" data-extra="&user_id=' . $aprt->id . '&status=active" data-source="/change-apartment-status"> <i class="fa fa-check" data-toggle="tooltip" title="' . trans('messages.active') . ' ' . trans('messages.user') . '"></i></a>' : '') .
                (Entrust::can('delete-user') ? delete_form(['user.destroy', $aprt->id]) : '') .
                '</div>',
            );
 
            $status = '';
            if ($aprt->status == 1)
                $status = '<span class="card blue card-content white-text">' . trans('messages.habilitado') . '</span>';
            else
                $status = '<span class="card red card-content white-text">' . trans('messages.deshabilitado') . '</span>';
            
            array_push($row, $aprt->code);
            array_push($row, $aprt->owner);
            array_push($row, $aprt->phone);
            array_push($row, $aprt->email);
            array_push($row, $status);
            array_push($row, showDate($aprt->created_at));
            array_push($row, showDateTime($aprt->updated_at));

            $rows[] = $row;
        }
        $list['aaData'] = $rows;
/*
echo('<pre>');
//print $aprt->code;die();
print_r($list);die();
echo('</pre>'); 
*/
        return json_encode($list);
	}
    public function create() {

    	return view('apartment.create');
    }

    public function store(Request $request, Apartment $apartment) {
    	//dd($request->all());
        if ($request->has('g-recaptcha-response')) {
            $url = "https://www.google.com/recaptcha/api/siteverify";
            $postData = array(
                'secret' => config('config.recaptcha_secret'),
                'response' => $request->input('g-recaptcha-response'),
                'remoteip' => $request->getClientIp()
            );
            $gresponse = postCurl($url, $postData);


            if (!$gresponse['success']) {
                if ($request->has('ajax_submit')) {
                    $response = ['message' => 'Please verify the captcha again!', 'status' => 'error'];
                    return response()->json($response, 200, array('Access-Controll-Allow-Origin' => '*'));
                }
                return redirect()->back()->withInput()->withErrors('Please verify the captcha again!');
            }
        }

        $validation = validateCustomField('apartment-registration-form', $request);

        if ($validation->fails()) {
            if ($request->has('ajax_submit')) {
                $response = ['message' => $validation->messages()->first(), 'status' => 'error'];
                return response()->json($response, 200, array('Access-Controll-Allow-Origin' => '*'));
            }
            return redirect()->back()->withInput()->withErrors($validation->messages());
        }

        $apartment->code = $request->input('code_apartment');
        $apartment->owner = $request->input('owner');
        
        if ($apartment->phone == null || $apartment->phone == 0 || $apartment->phone == ""){
        	$apartment->phone = "S/N";
        }

        $apartment->email = $request->input('email');

        $apartment->save();

		$data = $request->all();
		
        storeCustomField('apartment-registration-form', $apartment->id, $data);

        if ($request->has('ajax_submit')) {
            $response = ['message' => trans('messages.user') . ' ' . trans('messages.added'), 'status' => 'success'];
            return response()->json($response, 200, array('Access-Controll-Allow-Origin' => '*'));
        }
        return redirect()->back()->withSuccess(trans('messages.user') . ' ' . trans('messages.added'));
    

/*
echo('<pre>');
//print $validation;die();
print_r($request);die();
echo('</pre>');
*/    	
    	//echo "SI LLEGA";die();
    	//return view('apartment.create');
    }

	public function edit($id) {
		dd($request);
		//return view('apartment.show');

	}    

    public function changeStatus(Request $request) {
dd($request);
        $user_id = $request->input('user_id');
        $status = $request->input('status');

        $user = \App\User::find($user_id);
        if (!$user)
            return redirect('/apartment')->withErrors(trans('messages.invalid_link'));

        if (!Entrust::can('change-apartment-status') || $user->hasRole(DEFAULT_ROLE)) {
            if ($request->has('ajax_submit')) {
                $response = ['message' => trans('messages.permission_denied'), 'status' => 'error'];
                return response()->json($response, 200, array('Access-Controll-Allow-Origin' => '*'));
            }
            return redirect()->back()->withErrors(trans('messages.permission_denied'));
        }

        if ($status == 'ban' && $user->status != 'active')
            return redirect('/user')->withErrors(trans('messages.invalid_link'));
        elseif ($status == 'approve' && $user->status != 'pending_approval')
            return redirect('/user')->withErrors(trans('messages.invalid_link'));
        elseif ($status == 'active' && $user->status != 'banned')
            return redirect('/user')->withErrors(trans('messages.invalid_link'));

        if ($status == 'ban')
            $user->status = 'banned';
        elseif ($status == 'approve' || $status == 'active')
            $user->status = 'active';

        $user->save();
        $user->notify(new UserStatusChange($user));

        if ($request->has('ajax_submit')) {
            $response = ['message' => trans('messages.status') . ' ' . trans('messages.updated'), 'status' => 'success'];
            return response()->json($response, 200, array('Access-Controll-Allow-Origin' => '*'));
        }
        return redirect()->back()->withSuccess(trans('messages.status') . ' ' . trans('messages.updated'));
    }


}
