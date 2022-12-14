<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateUserRequest;
use App\Mail\SendUserInfoEmail;
use App\Models\User;
use App\Models\UserAppointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\View;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Illuminate\Support\File;
use Session;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userRole = Role::pluck('name')->toArray();
        $permissions = Permission::get();
        $roles = Role::orderBy('id','DESC')->paginate(5);
        $users = User::latest()->paginate(4);
        $notifications = auth()->user()->unreadNotifications;
        return view('page.user.index', compact('users','permissions','roles','userRole','notifications'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('page.user.user-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(User $user, Request $request) 
    {
        try {
            //For demo purposes only. When creating user or inviting a user
            // you should create a generated random password and email it to the user
            if($request->file('image_path') != null){
                $image_path = $request->file('image_path')->store('image_path', 'public');
            }

            $u = $user->create(array_merge($request->all(), [
                'password' => bcrypt('peace2u'),
                'active' => 1,
                'image_path' => $image_path ?? ''
            ]));

            $details = [
                'title' => 'Your account has been created successfully, please visit the site to login',
                'body' => 'Hi '.$u->fname.' '.$u->lname.' your current password is peace2u'
            ];

            $u->syncRoles($request->user_group);
            Mail::to($u->email)->send(new SendUserInfoEmail($details));
            Session::flash('attention', "User created successfully.");
            return redirect()->route('users.index')
                ->withSuccess(__('User created successfully.'));
        } catch (\Throwable $th) {
            Session::flash('attention', "User created successfully.");
            Session::flash('error_msg', "Looks like the email was not sent.");
            return redirect()->route('users.index');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user) 
    {
        return view('page.user.user-information', ['user' => $user]);
    }

    public function display(User $user) 
    {
        return view('page.user.user-information', ['user' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user) 
    {
        return View::make('page.user.user-edit', [
            'user' => $user,
            'userRole' => $user->roles->pluck('name')->toArray(),
            'roles' => Role::latest()->get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(User $user, Request $request) 
    {
        try {
            $user->update($request->toArray());
            if($request->file('image_path') != null){
                $image_path = $request->file('image_path')->store('image_path', 'public');
                $user->update([
                    'image_path' => $image_path
                ]);
            }

            if( Auth::user()->type == 'admin' || $user->hasRole('admin')){
                $user->syncRoles($request->get('role'));
                Session::flash('attention', "User details updated successfully");
                return redirect()->route('users.index');
            }
            Session::flash('attention', "Profile updated successfully");
            return redirect()->route('profile');
        } catch (\Throwable $th) {
            Session::flash('error_msg', $th);
            return redirect()->route('profile');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user) 
    {
        $user->delete();

        return redirect()->route('users.index')
            ->withSuccess(__('User deleted successfully.'));
    }
}
