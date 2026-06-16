<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Jersey;
class TransactionController extends Controller
{
   public function index()
{
    $transactions = DB::table('transactions')
        ->join('jerseys', 'transactions.jersey_id', '=', 'jerseys.id')
        ->join('categories', 'jerseys.category_id', '=', 'categories.id')
        ->select(
            'transactions.*',
            'jerseys.name as jersey_name',
            'categories.name as category_name'
        )
        ->orderBy('transactions.created_at', 'desc')
        ->get();
    return view('transactions.index', compact('transactions'));
}
public function create()
{
    $jerseys = Jersey::all();
    return view('transactions.create', compact('jerseys'));
}
public function store(Request $request)
{
    $request->validate([
        'jersey_id' => 'required',
        'quantity' => 'required|integer|min:1'
    ]);

    $jersey = DB::table('jerseys')
        ->where('id', $request->jersey_id)
        ->first();

    if ($request->quantity > $jersey->stock) {
        return back()->with('error', 'Stok tidak mencukupi');
    }

    DB::table('transactions')->insert([
        'user_id' => 1,
        'jersey_id' => $request->jersey_id,
        'quantity' => $request->quantity,
        'total_price' => $jersey->price * $request->quantity,
        'created_at' => now(),
        'updated_at' => now(),
    ]);

    // ❌ JANGAN ADA UPDATE STOK DI SINI
    // karena sudah ditangani TRIGGER DATABASE

    return redirect()->route('transactions.index');
}


}
