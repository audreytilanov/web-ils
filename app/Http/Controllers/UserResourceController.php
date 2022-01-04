<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserHasPermission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserResourceController extends Controller
{

    public function __construct()
    {
        // if (auth()->user()->userHasPermissions->where('component_name', 'user')->where('permissions', 'admin')->isEmpty()) {
        //     return abort(403);
        // }
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'List User';
        $users = User::all();
        return view('backend.user.index', compact('title', 'users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.user.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
        ]);
        if ($request->intro1) {
            foreach ($request->intro1 as $key => $value) {
                UserHasPermission::create([
                    'user_id' => $user->id,
                    'component_name' => 'intro1',
                    'permissions' => $value,
                ]);
            }
        }
        if ($request->intro2) {
            foreach ($request->intro2 as $key => $value) {
                UserHasPermission::create([
                    'user_id' => $user->id,
                    'component_name' => 'intro2',
                    'permissions' => $value,
                ]);
            }
        }
        if ($request->pembangunan) {
            foreach ($request->pembangunan as $key => $value) {
                UserHasPermission::create([
                    'user_id' => $user->id,
                    'component_name' => 'pembangunan',
                    'permissions' => $value,
                ]);
            }
        }
        if ($request->sejarah) {
            foreach ($request->sejarah as $key => $value) {
                UserHasPermission::create([
                    'user_id' => $user->id,
                    'component_name' => 'sejarah',
                    'permissions' => $value,
                ]);
            }
        }
        if ($request->wisata_hiburan) {
            foreach ($request->wisata_hiburan as $key => $value) {
                UserHasPermission::create([
                    'user_id' => $user->id,
                    'component_name' => 'wisata_hiburan',
                    'permissions' => $value,
                ]);
            }
        }
        if ($request->pantai) {
            foreach ($request->pantai as $key => $value) {
                UserHasPermission::create([
                    'user_id' => $user->id,
                    'component_name' => 'pantai',
                    'permissions' => $value,
                ]);
            }
        }
        if ($request->desa) {
            foreach ($request->desa as $key => $value) {
                UserHasPermission::create([
                    'user_id' => $user->id,
                    'component_name' => 'desa',
                    'permissions' => $value,
                ]);
            }
        }
        if ($request->makanan_khas) {
            foreach ($request->makanan_khas as $key => $value) {
                UserHasPermission::create([
                    'user_id' => $user->id,
                    'component_name' => 'makanan_khas',
                    'permissions' => $value,
                ]);
            }
        }
        if ($request->gallery_video) {
            foreach ($request->gallery_video as $key => $value) {
                UserHasPermission::create([
                    'user_id' => $user->id,
                    'component_name' => 'gallery_video',
                    'permissions' => $value,
                ]);
            }
        }
        if ($request->pura) {
            foreach ($request->pura as $key => $value) {
                UserHasPermission::create([
                    'user_id' => $user->id,
                    'component_name' => 'pura',
                    'permissions' => $value,
                ]);
            }
        }
        if ($request->isAdmin == 'true') {
            UserHasPermission::create([
                'user_id' => $user->id,
                'component_name' => 'user',
                'permissions' => 'admin',
            ]);
        }
        return redirect()->route('user.index')->with('success', 'Berhasil Menambahkan User');
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
        $user = User::with('userHasPermissions')->find($id);
        return view('backend.user.edit', compact('user'));
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
        $user = User::find($id);
        $user->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
        ]);
        $user->userHasPermissions()->delete();
        if ($request->intro1) {
            foreach ($request->intro1 as $key => $value) {
                UserHasPermission::create([
                    'user_id' => $user->id,
                    'component_name' => 'intro1',
                    'permissions' => $value,
                ]);
            }
        }
        if ($request->intro2) {
            foreach ($request->intro2 as $key => $value) {
                UserHasPermission::create([
                    'user_id' => $user->id,
                    'component_name' => 'intro2',
                    'permissions' => $value,
                ]);
            }
        }
        if ($request->pembangunan) {
            foreach ($request->pembangunan as $key => $value) {
                UserHasPermission::create([
                    'user_id' => $user->id,
                    'component_name' => 'pembangunan',
                    'permissions' => $value,
                ]);
            }
        }
        if ($request->sejarah) {
            foreach ($request->sejarah as $key => $value) {
                UserHasPermission::create([
                    'user_id' => $user->id,
                    'component_name' => 'sejarah',
                    'permissions' => $value,
                ]);
            }
        }
        if ($request->wisata_hiburan) {
            foreach ($request->wisata_hiburan as $key => $value) {
                UserHasPermission::create([
                    'user_id' => $user->id,
                    'component_name' => 'wisata_hiburan',
                    'permissions' => $value,
                ]);
            }
        }
        if ($request->pantai) {
            foreach ($request->pantai as $key => $value) {
                UserHasPermission::create([
                    'user_id' => $user->id,
                    'component_name' => 'pantai',
                    'permissions' => $value,
                ]);
            }
        }
        if ($request->desa) {
            foreach ($request->desa as $key => $value) {
                UserHasPermission::create([
                    'user_id' => $user->id,
                    'component_name' => 'desa',
                    'permissions' => $value,
                ]);
            }
        }
        if ($request->makanan_khas) {
            foreach ($request->makanan_khas as $key => $value) {
                UserHasPermission::create([
                    'user_id' => $user->id,
                    'component_name' => 'makanan_khas',
                    'permissions' => $value,
                ]);
            }
        }
        if ($request->gallery_video) {
            foreach ($request->gallery_video as $key => $value) {
                UserHasPermission::create([
                    'user_id' => $user->id,
                    'component_name' => 'gallery_video',
                    'permissions' => $value,
                ]);
            }
        }
        if ($request->review) {
            foreach ($request->review as $key => $value) {
                UserHasPermission::create([
                    'user_id' => $user->id,
                    'component_name' => 'review',
                    'permissions' => $value,
                ]);
            }
        }
        if ($request->pura) {
            foreach ($request->pura as $key => $value) {
                UserHasPermission::create([
                    'user_id' => $user->id,
                    'component_name' => 'pura',
                    'permissions' => $value,
                ]);
            }
        }
        if ($request->isAdmin == 'true') {
            UserHasPermission::create([
                'user_id' => $user->id,
                'component_name' => 'user',
                'permissions' => 'admin',
            ]);
        }
        if ($request->isAdmin == 'false') {
            UserHasPermission::where('user_id', $user->id)->where('component_name', 'admin')->delete();
        }
        return redirect()->route('user.index')->with('success', 'Berhasil Mengedit User');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->userHasPermissions()->delete();
        $user->delete();
        return redirect()->route('user.index')->with('success', 'Berhasil Menghapus User');
    }
}