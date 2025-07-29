<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VacancyModel;
class VacancyController extends Controller
{
      public function vacancy_list()
    {
        $vacancies = VacancyModel::with('advertisement')->orderBy('id','DESC')->get();

        return view('software.all_vacancy',compact('vacancies'));
    }
      public function select_vacancy_list()
    {
        $vacancies = VacancyModel::where('status',1)->with('advertisement')->orderBy('id','DESC')->get();

        return view('software.select_vacancy_for_apply',compact('vacancies'));
    }
}
