<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Record;

class RecordController extends Controller
{
    //
    public function index(){
        return view('homepage',['data'=>Record::all()]);
    }
    public function insert(){
        return view('insert');
    }
    public function store(Request $req){
        $req->validate([
            'name' => 'required',
            'contact' => 'required',
            'email' => 'required',
            'address' => 'required',
            'remark' => 'required',
        ]);

        $record = new Record();

        $record->name = $req->name;
        $record->contact = $req->contact;
        $record->email = $req->email;
        $record->address = $req->address;
        $record->remark = $req->remark;
        $record->save();

        return redirect()->route('homepage');

    }
    public function delete($id){
        Record::find($id)->delete();
        return redirect()->route('homepage');

    }
}
