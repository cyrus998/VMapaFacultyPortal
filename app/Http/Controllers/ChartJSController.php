<?php
  
namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Submission;
use App\Models\Subject;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use DB;
    
class ChartJSController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
        $admittedcurrentmonth = DB::table('submissions')->whereMonth('created_at', Carbon::now()->month)->count();
        $admittedthesepastmonths = DB::table('submissions')->whereMonth('created_at', Carbon::now()->subMonths(3))->count();
        $date = Carbon::now();
        $lastMonth =  $date->subMonth()->format('F');
        $lastlastmonth =  $date->subMonth(1)->format('F');

        $admissionaverage = ($admittedthesepastmonths / 3);


        $gradesevenpeople = Submission::where('yearlevel', 'Grade 7')->count();
        $gradeeightpeople = Submission::where('yearlevel', 'Grade 8')->count();
        $gradeninepeople = Submission::where('yearlevel', 'Grade 9')->count();
        $gradetenpeople = Submission::where('yearlevel', 'Grade 10')->count();

    
        $totaladmissions = Submission::count();

        $totalschoolcapacity=3000;
        $everyyearlevelcapacity=750;

        $totalcapacityleft= $totalschoolcapacity-$totaladmissions;
        $untilfull = $totalcapacityleft / $admissionaverage;


        $fivepercentmarginaccommodation=$totalcapacityleft-($totalschoolcapacity*.05);
        $gradesevenpercent= ($gradesevenpeople/$everyyearlevelcapacity)*100;
        $gradeeightpercent= ($gradeeightpeople/$everyyearlevelcapacity)*100;

        $totalcapacitypercent= ($totaladmissions/$totalschoolcapacity)*100;
        $totalcapacitypercentnumeral= ($totaladmissions/$totalschoolcapacity);

        $totalusers = User::count();
        $totalteachers = User::where('position','teacher')->count();
        $totaladmins = User::where('role','1')->count();
        $activesubjects = Subject::count();

        $users = User::select(DB::raw("COUNT(*) as count"), DB::raw("MONTHNAME(created_at) as month_name"))
                    ->groupBy(DB::raw("month_name"))
                    ->orderBy('id','ASC')
                    ->pluck('count', 'month_name');
 
        $labelsUser = $users->keys();
        $dataUser = $users->values();

        $submissions = Submission::select(DB::raw("COUNT(*) as count"), DB::raw("MONTHNAME(created_at) as month_name"))
                    ->groupBy(DB::raw("month_name"))
                    ->orderBy('id','ASC')
                    ->pluck('count', 'month_name');
 
        $labelsSubmission = $submissions->keys();
        $dataSubmission = $submissions->values();

        $yearlevel = Submission::select(DB::raw("COUNT(*) as count"), DB::raw("yearlevel as year"))
                    ->groupBy(DB::raw("year"))
                    ->pluck('count', 'year');
 
        $labelsYearLevel = $yearlevel->keys();
        $dataYearLevel = $yearlevel->values();

        $city = Submission::select(DB::raw("COUNT(*) as count"), DB::raw("city as city"))
                    ->groupBy(DB::raw("city"))
                    ->pluck('count', 'city');
 
        $labelsCity = $city->keys();
        $dataCity = $city->values();

        
        $contacts = Contact::select(DB::raw("COUNT(*) as count"), DB::raw("MONTHNAME(created_at) as month_name"))
                    ->groupBy(DB::raw("month_name"))
                    ->orderBy('id','ASC')
                    ->pluck('count', 'month_name');
 
        $labelsContact = $contacts->keys();
        $dataContact = $contacts->values();

              
        $role = Auth::user()->role;
        return view('chart', compact ('untilfull','admittedthesepastmonths', 'admittedcurrentmonth', 'admissionaverage', 'lastlastmonth', 'lastMonth', 'totalusers','totalteachers', 'labelsContact', 'dataContact',  'totaladmins', 'activesubjects', 'labelsUser', 'dataUser', 'labelsSubmission', 'dataSubmission', 'labelsYearLevel', 'dataYearLevel', 'labelsCity', 'dataCity', 'totaladmissions','totalcapacitypercent','totalcapacitypercentnumeral','gradesevenpeople' , 'gradeeightpeople', 'gradeninepeople', 'gradetenpeople','gradesevenpercent','gradeeightpercent','totalcapacityleft','fivepercentmarginaccommodation'));
    }
}