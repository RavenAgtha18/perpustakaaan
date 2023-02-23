<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\Book;
use App\Models\Publisher;
use App\Models\Author;
use App\Models\Catalog;
use App\Models\Transaction;
use App\Models\Lend;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
        //no 1

        $data = Member::select('*')
                ->join('users','users.member_id','=','members.id')
                ->get();
        //no 2
        $data2 = Member::select('*')
                ->leftjoin('users','users.member_id','=','members.id')
                ->where('users.id',NULL)
                ->get();
        //no 3
        $data3 = Transaction::select('member_id')
                ->rightjoin('members','member_id','=','transactions.member_id')
                ->where('transactions.member_id',NULL)
                ->get();
         //no 4
         $data4 = Member::select('members.id','members.name','members.phone_number')
                ->join('transactions','transactions.member_id','=','members.id')
                ->orderby('members.id','asc')
                ->get();
        //no 5
        $data5 = Member::select('members.id','members.name','members.phone_number')
                ->join('transactions','transactions.member_id','=','members.id')
                ->orderby('members.id','asc')
                ->where('transactions.member_id', '>', 1)
                ->get();
        //no 6
         $data6  = Member::select('members.name','members.phone_number','members.addres','transactions.date_start','transactions.date_end')
                ->join('transactions','transactions.member_id','=','members.id')
                ->orderby('members.id','asc')
                ->get();
        //no7
        $data7  = Member::select('members.name','members.phone_number','members.addres','transactions.date_start','transactions.date_end')
                ->join('transactions','transactions.member_id','=','members.id')
                ->orderby('members.id','asc')
                ->whereRaw('MONTH(transactions.date_end) > 6')
                ->get();
        //no 8
        $data8  = Member::select('members.name','members.phone_number','members.addres','transactions.date_start','transactions.date_end')
              ->join('transactions', 'transactions.member_id', '=', 'members.id')
              ->whereMonth('transactions.date_start', '<', '5')
              ->get();
        //no 9
        $data9  = Member::select('members.name','members.phone_number','members.addres','transactions.date_start','transactions.date_end')
                ->join('transactions', 'transactions.member_id', '=', 'members.id')
                ->whereMonth('transactions.date_start', '<', '1')
                ->whereMonth('transactions.date_end', '>', '12')
                ->get();
         //no 10
         $data10  = Member::select('members.name','members.phone_number','members.addres','transactions.date_start','transactions.date_end')
                ->join('transactions', 'transactions.member_id', '=', 'members.id')
                ->where('members.addres', 'lIKE', '%Effertzmouth%')
                ->get();
         //no 11
         $data11  = Member::select('members.name','members.phone_number','members.addres','transactions.date_start','transactions.date_end')
                ->join('transactions', 'transactions.member_id', '=', 'members.id')
                ->where('members.addres', 'lIKe', '%Effertzmouth%')
                ->where('members.gender', 'lIKE', '%1%')
                ->get();
         //no12
         $data12  = Member::select('members.name','members.phone_number','members.addres','transactions.date_start','transactions.date_end')
                ->join('transactions','transactions.member_id','=','members.id')
                ->orderby('members.id','asc')
                ->whereRaw('MONTH(transactions.date_end) > 6')
                ->get();
          //no 13
         $data13 = Member::select('members.id','members.name','members.phone_number')
                ->join('transactions','transactions.member_id','=','members.id')
                ->orderby('members.id','asc')
                ->where('transactions.member_id', '>', 1)
                ->get();
         //no 14
         $data14 = Member::select('*')
                ->leftjoin('users','users.member_id','=','members.id')
                ->where('users.id',NULL)
                ->get();
         //no 15
        $data15  = Member::select('members.name','members.phone_number','members.addres','transactions.date_start','transactions.date_end')
                ->join('transactions', 'transactions.member_id', '=', 'members.id')
                ->whereMonth('transactions.date_start', '<', '5')
                ->get();
         //no 16
         $data16  = Member::select('members.name','members.phone_number','members.addres','transactions.date_start','transactions.date_end')
                ->join('transactions', 'transactions.member_id', '=', 'members.id')
                ->where('members.addres', 'lIKe', '%Effertzmouth%')
                ->where('members.gender', 'lIKE', '%1%')
                ->get();
         //no 17
         $data17  = Member::select('members.name','members.phone_number','members.addres','transactions.date_start','transactions.date_end')
                ->join('transactions', 'transactions.member_id', '=', 'members.id')
                ->where('members.addres', 'lIKe', '%Effertzmouth%')
                ->where('members.gender', 'lIKE', '%1%')
                ->get();
        //no 18
         $data18 = Member::select('members.name','members.phone_number','members.addres','transactions.date_start','transactions.date_end')
                ->join('transactions','transactions.member_id','=','members.id')
                ->orderby('members.id','asc')
                ->whereRaw('MONTH(transactions.date_end) > 6')
                ->get();
                

         //no 19
         $data19  = Member::select('members.name','members.phone_number','members.addres','transactions.date_start','transactions.date_end')
                ->join('transactions', 'transactions.member_id', '=', 'members.id')
                ->whereMonth('transactions.date_start', '<', '5')
                ->get();
         //no 20
         $data20  = Member::select('members.name','members.phone_number','members.addres','transactions.date_start','transactions.date_end')
                ->join('transactions', 'transactions.member_id', '=', 'members.id')
                ->whereMonth('transactions.date_start', '<', '5')
                ->get();       


        return $data20;
        return view('home');
    }
}