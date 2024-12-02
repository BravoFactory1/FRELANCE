<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Exception;
use App\Traits\ImageFunctions;
use Illuminate\Support\Facades\Redirect;

class CategoriesController extends Controller
{
    use ImageFunctions;
    public function index()
    {
        $categories = Categories::get();
        return view('dashboard.Categories.list', ['categories' => $categories]);
    }

    public function create()
    {
        return view('dashboard.Categories.create');
    }

    public function store(Request $request)
    {

        try {
            $data = [];
            $data['name'] = $request->name;
            $data['description'] = $request->description;
            $service = Categories::create($data);
            if ($request->file('image')) {
                $service->image = $this->storeImagePath($request->image, 'Categories') ?? '';
                $service->save();
            }
            Session::flash('success', 'Categories created successfully');
        } catch (Exception $e) {
            Session::flash('error', 'Something went wrong');
            return Redirect::back();
        }
        $categories = Categories::get();
        return redirect()->route('Categories.index', ['Categories' => $categories]);
    }

    public function edit(string $id)
    {

        $service = Categories::findOrFail($id);
        return view('dashboard.Categories.update', ['service' => $service]);
    }

    public function update(Request $request, string $id)
    {
        $service = Categories::findOrFail($id);

        $service->update($request->except('image', '_token'));
        if ($request->file('image')) {
            $service->image = $this->storeImagePath($request->image, 'Categories') ?? '';
            $service->save();
        }
        $categories = Categories::get();
        return redirect()->route('Categories.index', ['Categories' => $categories]);
    }


    public function destroy($id)
    {
        try {
            Categories::where('id', $id)->delete();
            Session::flash('success', 'service deleted successfully');
        } catch (Exception $e) {
            Session::flash('error', 'Something went wrong');
        }
        $categories = Categories::get();
        return redirect()->route('Categories.index', ['Categories' => $categories]);
    }
}
