<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use Illuminate\Validation\Rule;

class RoleController extends Controller
{

    public function __construct()
    {
        $this->middleware('can:create_role')->only(['create']);
        $this->middleware('can:delete_roles')->only(['destroy']);
        $this->middleware('can:edite_role')->only(['edit','update']);
        $this->middleware('can:show_role')->only(['index']);

    }
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View|Response
     */
    public function index()
    {
        $roles = Role::query();
        if ($keyword = \request('search')) {
            $roles->where('name', 'like', "%$keyword%")->orWhere('label', 'like', "%$keyword%")
                ->orWhere('id', $keyword);
        }

        $roles = $roles->paginate(20);

        return view('admin.roles.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View|Response
     */
    public function create()
    {
             return view('admin.roles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Application|RedirectResponse|Response|Redirector
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'unique:roles'],
            'label' => 'required',
            'permissions' =>['required','array']
        ]);

        $role = Role::create($data);

        $role->permissions()->sync($data['permissions']);
        return redirect(route('admin.roles.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param Role $role
     * @return Response
     */
    public function show(Role $role)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Role $role
     * @return Application|Factory|View|Response
     */
    public function edit(Role $role)
    {
        return view('admin.roles.edit', compact('role'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Role $role
     * @return Application|RedirectResponse|Response|Redirector
     */
    public function update(Request $request, Role $role)
    {
        $data =  $request->validate([
            'name' => ['required',Rule::unique('roles')->ignore($role->id),],
            'label' => 'required',
            'permissions' =>['required','array']
        ]);

        $role->update($data);
        $role->permissions()->sync($data['permissions']);
        return redirect(route('admin.roles.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Role $role
     * @return Application|RedirectResponse|Response|Redirector
     */
    public function destroy(Role $role)
    {
        $role->delete();
        return redirect(route('admin.roles.index'));
    }
}
