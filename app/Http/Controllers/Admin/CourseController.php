<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CourseRequest;
use App\Models\Course;
use App\Models\Teacher;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;

class CourseController extends AdminController
{
    public function __construct()
    {
        $this->middleware('can:create_course')->only(['create']);
        $this->middleware('can:delete_course')->only(['destroy']);
        $this->middleware('can:edit_course')->only(['edit', 'update']);
        $this->middleware('can:show_course')->only(['index']);

    }

    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $courses = Course::query();
        if ($keyword = \request('search')) {
            $courses->where('title', 'like', "%$keyword%")->orWhere('body', 'like', "%$keyword%")
                ->orWhere('id', $keyword);
        }

        $courses = auth()->user()->teachers()->get();

        return view('admin.courses.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Course $course
     * @return Application|Factory|View
     */
    public function create(Course $course)
    {
        return view('admin.courses.create' ,compact('course'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CourseRequest $request
     * @return Application|Redirector|RedirectResponse
     */
    public function store(CourseRequest $request)
    {
        $imageUrl = $this->uploadImages($request->file('images'));
        $id =  auth()->user()->course()->create(array_merge($request->all(), ['images' => $imageUrl]))->id;
        Teacher::create([
            'user_id'=>$request->user_id,
            'course_id'=>$id,
        ]);
           alert()->message('دوره شما با موفقیت ایجاد شد!')->persistent('بستن');

                return redirect(url('/admin/courses'));
    }

    /**
     * Display the specified resource.
     *
     * @param Course $course
     * @return Response
     */
    public function show(Course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Course $course
     * @return Application|Factory|View
     */
    public function edit(Course $course)
    {
        return view('admin.courses.edit', compact('course'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Course $course
     * @return Application|Redirector|RedirectResponse
     */
    public function update(Request $request, Course $course)
    {
        $file = $request->file('images');

        $inputs = $request->all();
        if ($file){
            $inputs['images'] = $this->uploadImages($request->file('images'));
        }else
        {
            $inputs['images'] = $course->images;
            $inputs['images']['thumb'] =$inputs['imagesThumb'];
        }

        unset($inputs['imagesThumb']);
        $course->update($inputs);
        $teachers = Teacher::all();
//        $teachers->where("user_id",$request->input('user_id'))->update($request->all());

        alert()->message( 'دوره شما با موفقیت آپدیت شد!')->persistent('بستن');
        return redirect(route('admin.courses.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Course $course
     * @return Application|Redirector|RedirectResponse
     */
    public function destroy(Course $course)
    {
        $course->delete();
        return redirect(route('admin.courses.index'));
    }
}
