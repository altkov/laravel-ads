<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAdRequest;
use App\Models\Ad;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Support\Facades\Auth;
use Storage;
use Str;

class AdController extends Controller implements HasMiddleware
{
    public static function middleware(): array
    {
        return [
            new Middleware('auth', except:['index','show'])
        ];
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (request()->has('cancel')) {
            return redirect(route('ads.index'));
        }

        $filters = [
            ['category_id', '=', request()->get('category_id')],
            ['price', '>', request()->get('min')],
            ['price', '<', request()->get('max')],
        ];

        $ads = Ad::where(function($query) use ($filters) {
            foreach ($filters as $filter) {
                $val = $filter[2];
                if ($val) {
                    $query->where($filter[0], $filter[1], $val);
                }
            }
        })->get();

        $filterUsed = false;
        $filterVals = array_column($filters, '2');
        foreach ($filterVals as $filterVal) {
            if ($filterVal !== null) {
                $filterUsed = true;
                break;
            }
        }

        return view('ads.index', [
            'ads' => $ads,
            'categories' => Category::all(),
            'filter' => $filterUsed,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ads.create', ['categories' => Category::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAdRequest $request)
    {
        $data = $request->validated();
        $data['user_id'] = Auth::id();

        $data['img'] = $request->file('img')->storePublicly('ads', 'public');

        $user = Auth::user();
        $ad = $user->ads()->create($data);

        return redirect(route('ads.show', $ad->id))->with('success','');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('ads.show', [
            'ad' => Ad::findOrFail($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
