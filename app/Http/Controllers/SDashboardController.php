<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\User;
use App\Models\AdvertisementModel;
use App\Models\MemberModel;
use App\Models\VacancyModel;

class SDashboardController extends Controller
{
    public function dashboard()
    {
        $hour = Carbon::now()->format('H');
        $greeting = 'Hello';
        $user_count = User::count();
        $vancany_count = VacancyModel::count();
        $member_count = MemberModel::count();
        $add_count = AdvertisementModel::count();

        if ($hour >= 5 && $hour < 12) {
            $greeting = 'Good Morning';
        } elseif ($hour >= 12 && $hour < 17) {
            $greeting = 'Good Afternoon';
        } elseif ($hour >= 17 && $hour < 21) {
            $greeting = 'Good Evening';
        } else {
            $greeting = 'Good Night';
        }

        return view('super_admin.index', compact(
            'greeting',
            'user_count',
            'vancany_count',
            'member_count',
            'add_count'
        ));
    }
}
