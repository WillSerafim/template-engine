<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'userName' => 'Willian Serafim',
            'permissions' => [
                //all permissions
                'editName' => 1,
                'editemail' => 1,
                'editPassword' => 1,
                'editArea' => 1,

                //without permissions
                // 'editName' => 0,
                // 'editemail' => 0,
                // 'editPassword' => 0,
                // 'editArea' => 0,

                //random
                // 'editName' => rand(0,1),
                // 'editemail' => rand(0,1),
                // 'editPassword' => rand(0,1),
                // 'editArea' => rand(0,1),
            ],
            'areas' => [
                'TI',
                'RH',
                'Marketing',
                'Gerência',
                'Financeiro',
                'Comercial',
                'Manutenção',
            ]

        ];

        return view('user.user',['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
