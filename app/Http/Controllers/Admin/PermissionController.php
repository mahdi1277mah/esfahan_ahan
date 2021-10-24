<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Permission;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use Illuminate\Validation\Rule;

class PermissionController extends Controller
{

    public function __construct()
    {
        $this->middleware('can:create_permissions')->only(['create']);
        $this->middleware('can:delete_permissions')->only(['destroy']);
        $this->middleware('can:edit_permissions')->only(['edit','update']);
        $this->middleware('can:show_permissions')->only(['index']);

    }
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View|Response
     */

    public function index()
    {

        $permissions = Permission::query();
        if ($keyword = \request('search')){
            $permissions->where('name','like',"%$keyword%")->orWhere('label','like',"%$keyword%")
                ->orWhere('id',$keyword);
        }

        $permissions =$permissions->paginate(20);

        return view('admin.permissions.index',compact('permissions'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View|Response
     */
    public function create()
    {
        return view('admin.permissions.create');


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Application|RedirectResponse|Response|Redirector
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required','unique:permissions'],
            'label' => 'required',
        ]);
        Permission::create($request->all());

        return redirect(route('admin.permissions.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param Permission $permission
     * @return Response
     */
    public function show(Permission $permission)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Permission $permission
     * @return Application|Factory|View|Response
     */
    public function edit(Permission $permission)
    {
        return view('admin.permissions.edit',compact('permission'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Permission $permission
     * @return Application|RedirectResponse|Response|Redirector
     */
    public function update(Request $request, Permission $permission)
    {
        $request->validate([
            'name' => ['required',Rule::unique('permissions')->ignore($permission->id),],
            'label' => 'required',
        ]);

        $permission->update($request->all());
        return redirect(route('admin.permissions.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Permission $permission
     * @return Application|RedirectResponse|Response|Redirector
     */
    public function destroy(Permission $permission)
    {
        $permission->delete();
        return redirect(route('admin.permissions.index'));
    }
}
