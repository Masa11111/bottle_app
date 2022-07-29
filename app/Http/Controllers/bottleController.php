<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bottle;

class bottleController extends Controller
{

    // ボトルの一覧表示
    public function index()
    {
        $bottles = Bottle::orderBy('id', 'desc')->paginate(10);
        return view('bottle.bottle_home', ['bottles' => $bottles]);
    }

    // ボトルをキープする
    public function add(Request $request)
    {
        return view('bottle.bottle_add');
    }

    // ボトルをキープする
    public function create(Request $request)
    {
        $this->validate($request, Bottle::$rules);
        $bottle = new Bottle();
        $form = $request->all();
        unset($form['_token']);
        $bottle->fill($form)->save();
        return redirect('/bottle');
    }

    // ボトルを削除する
    public function delete(Request $request)
    {
        $bottle = Bottle::find($request->id);
        return view('bottle.bottle_delete', ['form' => $bottle]);
    }

    // ボトルを削除する
    public function remove(Request $request)
    {
        $bottle = Bottle::find($request->id)->delete();
        return redirect('/bottle');
    }

    // ボトルと顧客名で検索する
    public function serch(Request $request)
    {
        $bottle_name = $request->bottle_name;
        $customer_name = $request->customer_name;

        if(!empty($bottle_name) && empty($customer_name))
        {
            //ボトル名を検索している場合
            $bottles = Bottle::where('bottle_name', $bottle_name)->get();
            if(!empty($bottles))
            {
                return view('bottle.serch_view', ['bottles' => $bottles]);
            }else{
                return view('bottle.serch_view', ['error' => '検索されたボトルはありません']);
            }
        }elseif(empty($bottle_name) && !empty($customer_name))
        {
            // 顧客名を検索している場合
            $bottles = Bottle::where('customer_name', $customer_name)->first();
            if(!empty($bottle))
            {
                return view('bottle.serch_view', ['bottles' => $bottles]);
            }else{
                return view('bottle.serch_view', ['error' => '検索された顧客名はありません']);
            }
        }
        elseif(!empty($bottle_name) && !empty($customer_name))
        {
            // ボトル名と顧客名を検索している場合
            $bottle = Bottle::where('bottle_name', $bottle_name)->where('customer_name', $customer_name)->first();
            if(!empty($bottle))
            {
                return view('bottle.serch_view', ['bottles' => $bottle]);
            }else{
                return view('bottle.serch_view', ['error' => 'ボトルはありません']);
            }
        }elseif(empty($bottle_name) && empty($customer_name))
        {
            // 何も記入していない場合
            return view('bottle.serch_view', ['error' => '顧客名またはボトルを入力してください']);
        }
    }

    //3ヶ月経過したボトルを通知する
    public function notion()
    {
        $bottles = Bottle::all();
        return view('bottle.notion', ['bottles'=> $bottles]);
    }
}
