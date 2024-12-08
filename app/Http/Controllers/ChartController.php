<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Detail;
use App\Models\Category as Category;
use Illuminate\Http\Request;
use Carbon\Carbon;

use Illuminate\Support\Facades\Auth;

class ChartController extends Controller
{
    public function index()
    {
        if (Auth::user()->role == 'admin') {
            $count_free = User::where('role', 'free_user')->count();
            $count_prem = User::where('role', 'premium_user')->count();
            $count_vid = Detail::count();

            $count = [
                'free' => $count_free,
                'premium' => $count_prem,
                'video' => $count_vid
            ];

            $tgl_awal_5th = Carbon::now()->subYears(4)->format('Y-m-d');

            $all_tahun = range(Carbon::now()->year, Carbon::parse($tgl_awal_5th)->year);

            $all_bulan = range(1, 12);

            $labels = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];

            $data = [];

            foreach ($all_bulan as $i) {
                $data[$i] = [
                    'bulan' => $labels[$i - 1],
                    'total' => User::where('email_verified_at', '!=', null)->whereMonth('created_at', $i)->count(),
                ];
            }

            foreach ($all_bulan as $i) {
                $datas[$i] = [
                    'bulan' => $labels[$i - 1],
                    'total' => User::where('email_verified_at', '!=', null)->where('role', 'premium_user')->whereMonth('created_at', $i)->count(),
                ];
            }

            foreach ($all_bulan as $i) {
                $datass[$i] = [
                    'bulan' => $labels[$i - 1],
                    'total' => Detail::where('url', '!=', null)->where('url', '!=', '')->whereMonth('created_at', $i)->count(),
                ];
            }

            return view('category.admin.sidebar', compact('count', 'labels', 'data', 'datas', 'datass'));
        } else {
            $getData = Category::getData();
            return view('dashboard', compact('getData'));
        }
    }
}
