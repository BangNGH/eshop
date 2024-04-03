<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Menu\CreateFormRequest;
use App\Http\Service\CityService;
use App\Models\Cities;
use App\Models\Menu;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\JsonResponse;

class CityController extends Controller
{
    protected $cityService;

    public function __construct(CityService $cityService)
    {
        $this->cityService = $cityService;
    }

    public function index()
    {
        $cities = $this->cityService->getAll();
        return view("admin.pages.menu.cities.index", ['cities' => $cities]);
    }

    public function create()
    {
        return view("admin.pages.menu.cities.add");
    }
    public function store(CreateFormRequest $request)
    {
        $this->cityService->create($request);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cities $city)
    {
        return view("admin.pages.menu.cities.edit",['city'=>$city]);
    }
    public function update(Cities $city, CreateFormRequest $request)
    {
        $this->cityService->update($city, $request);
        return redirect()->back();
    }
    public function destroy(Request $request): JsonResponse
    {

        $result = $this->cityService->destroy($request);
        if ($result) {
            return response()->json([
                'error' => false,
                'message' => 'Xoá thành công'
            ]);
        }
        return response()->json([
            'error' => true,
        ]);
    }
    //
   
}
