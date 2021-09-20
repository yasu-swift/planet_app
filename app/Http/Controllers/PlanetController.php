<?php

namespace App\Http\Controllers;
// planetクラスを読み込む
use App\Models\Planet;
// use Illuminate\Http\PlanetRequest;
use App\Http\Requests\PlanetRequest;

class PlanetController extends Controller
{
    // indexページへ移動
    public function index()
    {
        // モデル名::テーブル全件取得
        $planets = Planet::all();
        // planetsティレクトリーの中のindexページを指定し、planetsの連想配列を代入
        return view('planets.index', ['planets' => $planets]);
    }
    // showページへ移動
    public function show($id)
    {
        $planet = Planet::find($id);
        return view('planets.show', ['planet' => $planet]);
    }
    public function create()
    {
        return view('planets.create');
    }

    public function store(PlanetRequest $request)
    {
        //インスタンス化
        $planet = new Planet;
        //値を用意
        $planet->name = $request->name;
        $planet->english = $request->english;
        $planet->radius = $request->radius;
        $planet->weight = $request->weight;
        //保存
        $planet->save();
        // 登録したらindexに戻る
        return redirect('/planets');
    }

    public function edit($id)
    {
        $planet = Planet::find($id);
        return view('planets.edit', ['planet' => $planet]);
    }

    public function update(PlanetRequest $request, $id)
    {
        //元のデータを取得
        $planet = Planet::find($id);
        //値を用意
        $planet->name = $request->name;
        $planet->english = $request->english;
        $planet->radius = $request->radius;
        $planet->weight = $request->weight;
        //保存
        $planet->save();
        // 登録したらindexに戻る
        return redirect('/planets');
    }

    public function destroy($id)
    {
        $planet = Planet::find($id);
        $planet->delete();

        return redirect('/planets');
    }
}
