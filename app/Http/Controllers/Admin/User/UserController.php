<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\editUserRequest;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Exception;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use Illuminate\Validation\Rule;


class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('can:create_user')->only(['create']);
        $this->middleware('can:delete_user')->only(['destroy']);
        $this->middleware('can:edit_user')->only(['edit', 'update']);
        $this->middleware('can:show_users')->only(['index']);

    }
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View|Response
     */
    public function index()
    {

        $users = User::query();
        if ($keyword = \request('search')) {
            $users->where('email', 'like', "%$keyword%")->orWhere('name', 'like', "%$keyword%")
                ->orWhere('id', $keyword);
        }

        if (\request('admin')) {
            $this->authorize('show_staff_user');
            $users->where('is_superuser', 1)->orWhere('is_staff', 1);
        }
/*        if (\Illuminate\Support\Facades\Gate::allows('show_staff_user')) {
            if (\request('admin')) {
                $users->where('is_superuser', 1)->orWhere('is_staff', 1);
            } else {
                $users->where('is_superuser', 0)->orWhere('is_staff', 0);
            }
        }*/


        $users = $users->latest()->paginate(10);

        return view('admin.users.index', compact('users'));

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View|Response
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param UserRequest $request
     * @return Application|RedirectResponse|Response|Redirector
     */
    public function store(UserRequest $request)
    {
        User::create($request->all());
        return redirect(route('admin.users.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function show(int $id): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param User $user
     * @return Application|Factory|View|Response
     */
    public function edit(User $user)
    {
        return view('admin.users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param User $user
     * @return Application|RedirectResponse|Response|Redirector
     */
    public function update(Request $request, User $user)
    {
        $data =$request->all();
        $request->validate([
            'name' => 'required',
            'email' => ['required', Rule::unique('users')->ignore($user->id)],
        ]);
        if (!is_null($request->password)) {
            $request->validate([
                'password' => ['required', 'string', 'min:8']
            ]);
            $data['password'] = $request->password;
        }

        $user->update($data);
        return redirect(route('admin.users.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param User $user
     * @return Application|RedirectResponse|Response|Redirector
     * @throws Exception
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect(route('admin.users.index'));
    }
}
