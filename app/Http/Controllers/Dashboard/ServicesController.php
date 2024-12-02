<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use Illuminate\Http\Request;
use App\Traits\ImageFunctions;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Exception;
use App\Models\Service;

class ServicesController extends Controller
{
    use ImageFunctions;

    public function index()
    {
        $services = Service::get();
        return view('dashboard.services.list', ['services' => $services]);
    }


    public function create()
    {
        $categories = Categories::all(); // تأكد أن لديك البيانات المطلوبة

        return view('dashboard.services.create', compact('categories'));
    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg',
            'icon' => 'required|image|mimes:jpg,png,jpeg,gif,svg',
            'categories_id' => 'required|exists:categories,id',
        ]);

        try {
            $data = [];
            $data['name'] = $request->name;
            $data['categories_id'] = $request->categories_id;
            $data['shortdescription'] = $request->shortdescription;
            $data['description'] = $request->description;
            $service = Service::create($data);
            if ($request->file('image')) {
                $service->image = $this->storeImagePath($request->image, 'services') ?? '';
                $service->save();
            }
            if ($request->file('icon')) {
                $service->icon = $this->storeImagePath($request->icon, 'services_icon') ?? '';
                $service->save();
            }
            Session::flash('success', 'Service created successfully');
        } catch (Exception $e) {
            Session::flash('error', 'Something went wrong: ' . $e->getMessage());
            return Redirect::back();
        }

        $services = Service::get();
        return redirect()->route('services.index', ['services' => $services]);
    }

    public function edit(string $id)
    {

        $service = Service::findOrFail($id);
        return view('dashboard.services.update', ['service' => $service]);
    }

    public function update(Request $request, string $id)
    {
        $service = Service::findOrFail($id);

        $service->update($request->except('image', 'icon', '_token'));
        if ($request->file('image')) {
            $service->image = $this->storeImagePath($request->image, 'services') ?? '';
            $service->save();
        }
        if ($request->file('icon')) {
            $service->icon = $this->storeImagePath($request->icon, 'services_icon') ?? '';
            $service->save();
        }
        $services = Service::get();
        return redirect()->route('services.index', ['services' => $services]);
    }


    public function destroy($id)
    {
        try {
            Service::where('id', $id)->delete();
            Session::flash('success', 'service deleted successfully');
        } catch (Exception $e) {
            Session::flash('error', 'Something went wrong');
        }
        $services = Service::get();
        return redirect()->route('services.index', ['services' => $services]);
    }
}