<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AcademicRequest;
use App\Models\Academic;
use Illuminate\Http\Request;

class AcademicController extends Controller
{
    public function index()
    {
        $academics = Academic::all();

        return view('pages.academic', [
            'academics' => $academics
        ]);
    }

    public function create()
    {
        return view('pages.academic-create');
    }

    public function store(AcademicRequest $request)
    {

        try {
            $validated = $request->validated();

            Academic::create([
                'name' => [
                    'en' => $request->name_en,
                    'ar' => $request->name_ar
                ],
                'notes' => $request->notes,
                'academic_years' => $request->years,
                'requirements' => "s",
            ]);

            toastr()->success(__('message.success'), ['timeOut' => 5000]);
            return redirect()->route('academics');
        } catch (\Exception $e) {
            toastr()->error('Oops! Something went wrong!', 'Oops!');
            return redirect()->back()->withErrors($e);
        }

    }

    public function edit($id)
    {
        $academic = Academic::findOrfail($id);

        return view('pages.academic-edit', [
            'academic' => $academic,
        ]);
    }

    public function update($id, Request $request)
    {

        try {
            $academic = Academic::findOrfail($id);

//            $request->validated();

            $academic->update([
                'name' => [
                    'en' => $request->name_en,
                    'ar' => $request->name_ar
                ],
                'notes' => $request->notes,
                'academic_years' => $request->years,
                'requirements' => "s",
            ]);

            toastr()->success(__('message.success'), ['timeOut' => 5000]);
            return redirect()->route('academics');
        } catch (\Exception $e) {
            toastr()->error('Oops! Something went wrong!', 'Oops!');
            return redirect()->back()->withErrors($e);
        }
    }

    public function destroy(Request $request)
    {
        $academic = Academic::findOrfail($request->id)->delete();
        toastr()->error(trans('تم الحذف'));
        return redirect()->route('academics');
    }

}
