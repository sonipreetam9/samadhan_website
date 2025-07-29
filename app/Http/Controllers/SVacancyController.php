<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\VacancyModel;
use App\Models\AdvertisementModel;
use Illuminate\Support\Str;
class SVacancyController extends Controller
{
    public function vacancy()
    {
         $ads=AdvertisementModel::orderBy('id','DESC')->get();
        return view('super_admin.add_vacancy',compact('ads'));
    }
    public function add_vacancy(Request $request)
    {
        $request->validate([
            'advt_number' => 'required|string',
            'total_post' => 'required|numeric',
            'post' => 'required|string',
            'category' => 'required|string',
            'post_date' => 'required|date',
            'last_date' => 'required|date|after_or_equal:post_date',
            'application_fee_gen' => 'required|numeric',
            'application_fee_oth' => 'required|numeric',
            'qualifications' => 'required|string',
            'description' => 'required|string',
            'location' => 'required|string',
            'salary_range' => 'required|string',
            'file' => 'required|mimes:pdf|max:20480', // 20 MB
        ]);

        // Generate vacancy number like 160725ABCD
        $vacancyNumber = date('dmy') . strtoupper(Str::random(4));

        // Handle file upload
        $pdf = $request->file('file');
        $newFileName = date('Ymd.His') . '.pdf';
        $uploadPath = public_path('uploads');

        // Create folder if not exists
        if (!file_exists($uploadPath)) {
            mkdir($uploadPath, 0755, true); // recursively create folders
        }

        // Move file to public/uploads
        $pdf->move($uploadPath, $newFileName);

        // Insert into database
        $vacancy = new VacancyModel();
        $vacancy->advertisement_id =  $request->advt_number;
        $vacancy->total_post =  $request->total_post;
        $vacancy->vacancy_number = $vacancyNumber;
        $vacancy->post = $request->post;
        $vacancy->category = $request->category;
        $vacancy->post_date = $request->post_date;
        $vacancy->last_date = $request->last_date;
        $vacancy->application_fee_gen = $request->application_fee_gen;
        $vacancy->application_fee_oth = $request->application_fee_oth;
        $vacancy->qualifications = $request->qualifications;
        $vacancy->description = $request->description;
        $vacancy->location = $request->location;
        $vacancy->salary_range = $request->salary_range;
        $vacancy->file = $newFileName;
        $vacancy->save();

        return redirect()->back()->with('success', 'Vacancy added successfully.');
    }
      public function vacancy_list()
    {
        $vacancies = VacancyModel::with('advertisement')->orderBy('id','DESC')->get();

        return view('super_admin.all_vacancy',compact('vacancies'));
    }

}
