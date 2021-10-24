<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CourseRequest;
use App\Http\Requests\TeacherRequest;
use App\Models\Course;
use App\Models\Teacher;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;

class TeacherController extends AdminController
{
    public function __construct()
    {
        $this->middleware('can:create_teacher')->only(['create']);
        $this->middleware('can:delete_teacher')->only(['destroy']);
        $this->middleware('can:edit_teacher')->only(['edit', 'update']);
        $this->middleware('can:show_teacher')->only(['index']);

    }

    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $teachers = Teacher::query();
        if ($keyword = \request('search')) {
            $teachers->where('title', 'like', "%$keyword%")->orWhere('body', 'like', "%$keyword%")
                ->orWhere('id', $keyword);
        }

        $teachers = auth()->user()->teachers()->get();


        return view('admin.teachers.index', compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Teacher $teacher
     * @return Application|Factory|View
     */
    public function create(Teacher $teacher)
    {
        return view('admin.teachers.create' ,compact('teacher'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param TeacherRequest $request
     * @return Application|Redirector|RedirectResponse
     */
    public function store(TeacherRequest $request)
    {
        $imageUrl = $this->uploadImages($request->file('images'));
        $id =  auth()->user()->teacher()->create(array_merge($request->all(), ['images' => $imageUrl]))->id;
        Teacher::create([
            'user_id'=>$request->user_id,
            'teacher_id'=>$id,
        ]);
           alert()->message('دوره شما با موفقیت ایجاد شد!')->persistent('بستن');

                return redirect(url('/admin/teachers'));
    }

    /**
     * Display the specified resource.
     *
     * @param Teacher $teacher
     * @return Response
     */
    public function show(Teacher $teacher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Teacher $teacher
     * @return Application|Factory|View
     */
    public function edit(Teacher $teacher)
    {
        return view('ok');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Teacher $teacher
     * @return Application|Redirector|RedirectResponse
     */
    public function update(Request $request, Teacher $teacher)
    {
        $file = $request->file('images');

        $inputs = $request->all();
        if ($file){
            $inputs['images'] = $this->uploadImages($request->file('images'));
        }else
        {
            $inputs['images'] = $teacher->images;
            $inputs['images']['thumb'] =$inputs['imagesThumb'];
        }

        unset($inputs['imagesThumb']);
        $teacher->update($inputs);
        $teachers = Teacher::all();
//        $teachers->where("user_id",$request->input('user_id'))->update($request->all());

        alert()->message( 'دوره شما با موفقیت آپدیت شد!')->persistent('بستن');
        return redirect(route('admin.teachers.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Teacher $teacher
     * @return Application|Redirector|RedirectResponse
     */
    public function destroy(Teacher $teacher)
    {
    $teacher->delete();
        return redirect(route('admin.teachers.index'));

    }
}
