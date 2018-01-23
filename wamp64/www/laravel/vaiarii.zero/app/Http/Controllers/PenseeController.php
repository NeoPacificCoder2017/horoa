<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Pensee;
class PenseeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('app', 'index');
    }
    public function app()
    {
        return view('pensees.index');
    }
    public function index(Request $request)
    {
        $pensees = Pensee::with('user')->latest()->get();
        $user = auth()->check() ? auth()->id() : 0;
        return response()->json([$pensees, $user]);
    }
    public function store(Request $request)
    {
        $request->validate([
            'text' => 'required|max:1000',
        ]);
        $request->merge(['user_id' => $request->user()->id]);
        $pensee = Pensee::create($request->all());
        return Pensee::with('user')->find($pensee->id);
    }
    public function destroy(Pensee $pensee)
    {
        $this->authorize('delete', $pensee);
        $pensee->delete();
        return response()->json();
    }

    public function construct()
    {
        $this->middleware('auth')->except('app', 'index');
    }
}