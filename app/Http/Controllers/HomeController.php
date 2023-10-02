<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Country;
use App\School;
use App\News;
use App\Legal;
use App\Comment;
use App\Contact;
use App\Program;
use App\Tostay;
use App\ExtraService;
use App\Payment;
use App\ExtraPay;
use App\ProgramCategory;
use App\Application;
use App\Models\Post;
use App\UserInformation;
use App\File;
use App\Message;
use App\Stage;
use App\Models\User;
use App\ConsultantsApply;
use App\CanadaCoopApplication;
use App\FranchiseApplication;
use App\Data;
use App\Page;
use Auth;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    public function index(){
        $news = News::inrandomorder()->take(5)->get();
        $blogs = Post::inrandomorder()->take(3)->get();
        $comments = Comment::inrandomorder()->take(10)->get();
        $schools = School::inrandomorder()->take(5)->get();
        return view('index', [
            'news' => $news,
            'blogs' => $blogs,
            'schools' => $schools,
            'comments' => $comments
        ]);
    }

    public function countries(){
        $countries = Country::get()->all();
        return view('countries', [
            'countries' => $countries]);
    }

    public function edvisor(){
        $countries = Country::get()->all();
        return view('edvisor', [
            'countries' => $countries]);
    }


    public function consultants(){
        
        $consultant = \App\Models\User::where('role_id', 4)->get();
        return view('consultants', ['consultants' => $consultant]);

        
        return view('consultants');
    }

    public function contact(){
        return view('contact');
    }

    public function aboutUs(){
        return view('aboutUs');
    }

    public function countryView($slug){
        $country = Country::where('slug', $slug)->first();
        return view('countryView', [
            'country' => $country
        ]);
    }

    public function schoolView($slug){
        $school = School::where('slug', $slug)->first();
        return view('schoolView', [
            'school' => $school
        ]);
    }

    public function consultantApply(){
        return view('consultantApply');
    }

    public function newView($slug){
        $new = News::where('slug', $slug)->first();
        $last5new = News::latest()->take(5)->get();
        return view('newView', [
            'new' => $new,
            'last5new' => $last5new
        ]);
    }

    public function blogView($slug){
        $post = Post::where('slug', $slug)->first();
        $last5post = Post::latest()->take(5)->get();
        return view('postView', [
            'post' => $post,
            'last5post' => $last5post
        ]);
    }

    public function legalView($slug){
        $legal = Legal::where('slug', $slug)->first();
        return view('legalView', [
            'legal' => $legal
        ]);
    }

    public function bankAccount(){
       return view('bankAccount');
    }

    public function contactPost(Request $request){
        if($request->ajax()){
            $form = new Contact;        
            $form->name = $request->name;
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->message = $request->program;
            $form->save();
        }else{
            redirect()->route('index');
        }
        return response()->json(['success'=>'Form Gönderildi']);
        
    }

    public function programView($slug){
        $program = Program::where('slug', $slug)->first();
        return view('programView', [
            'program' => $program
        ]);
    }

    public function programCategoryView($slug){


        $programCategory = ProgramCategory::where('slug', $slug)->first();
        $programs = Program::where('program_category_id', $programCategory->id)->with('school')->groupBy('school_id')->get();
        return view('programCategoryView', ['schools' => $programs]);
        
    }

    public function getCountries($id){
        $programCategory = ProgramCategory::where('id', $id)->first();
        $programs = Program::where('program_category_id', $programCategory->id)->with('school')->get();
        $countries = array();
        foreach($programs as $program){
            $countries[$program->school->country->id] = $program->school->country->name;
        }

        return response()->json($countries);
    }

    public function getLanguages(Request $request){
        $id2 = $request->id;
        $programs = Program::whereHas('school', function ($q2) use ($id2) {
            $q2->where('country_id', $id2);
        })->groupBy('language')->get();

        return response()->json($programs);
        
    }

    public function getParts(Request $request){

        $ulke = $request->id;
        $program = $request->id2;
        $dil = $request->id3;

        $programs = Program::whereHas('school', function ($q2) use ($ulke) {
            $q2->where('country_id', $ulke);
        })->where('language', $dil)->groupBy('part')->where('program_category_id', $program)->get();
        return response()->json($programs);
    }

    public function getExtraTostay(Request $request){
        $tostay = Tostay::where('id', $request->id)->first();
        return response()->json($tostay);
    }

    public function getExtraService(Request $request){
        $service = ExtraService::where('id', $request->index)->first();
        return response()->json($service);
    }

    public function getProgramList(Request $request){
        $ulke = $request->id;
        $program = $request->id2;
        $dil = $request->id3;
        $part = $request->id4;

        $programs = Program::whereHas('school', function ($q2) use ($ulke) {
            $q2->where('country_id', $ulke);
        })->where('language', $dil)->where('part', $part)->where('program_category_id', $program)->get();       
        return view('programsList', ['programs' => $programs]);
    }

    public function programsList(Request $request){
        $ulke = $request->DrpUlke;
        $program = $request->DrpProgram;
        $dil = $request->DrpLang;
        $part = $request->DrpBolum;
        $programs = Program::whereHas('school', function ($q2) use ($ulke) {
            $q2->where('country_id', $ulke);
        })->where('language', $dil)->where('part', $part)->where('program_category_id', $program)->get();



        $cities = Program::whereHas('school', function ($q2) use ($ulke) {
            $q2->where('country_id', $ulke);
        })->where('language', $dil)->where('part', $part)->where('program_category_id', $program)->groupBy('city')->get();

        $sponsored = array();
        $notsponsored = array();
        foreach($programs as $programArray){
            if($programArray->school->sponsored == 1){
                array_push($sponsored, $programArray);
            }else{
                array_push($notsponsored, $programArray);
            }
        }


        
        
        return view('programsList', [
            'cities' => $cities,
            'sponsored' => $sponsored,
            'notsponsored' => $notsponsored,
            'ulke' => $ulke,
            'program' => $program,
            'dil' => $dil,
            'part' => $part
        ]);
    }
    
    public function filterProgram(Request $request){

        $ulke = $request->ulke;
        $program = $request->program;
        $dil = $request->dil;
        $part = $request->part;
        $city = $request->city;

        if(isset($city)){
            $programs = Program::whereHas('school', function ($q2) use ($ulke) {
                $q2->where('country_id', $ulke);
            })->where('language', $dil)->where('part', $part)->where('program_category_id', $program)->whereIn('city', $city)->get();
        }else{
            $programs = Program::whereHas('school', function ($q2) use ($ulke) {
                $q2->where('country_id', $ulke);
            })->where('language', $dil)->where('part', $part)->where('program_category_id', $program)->get();
        }
       
        $cities = Program::whereHas('school', function ($q2) use ($ulke) {
            $q2->where('country_id', $ulke);
        })->where('language', $dil)->where('part', $part)->where('program_category_id', $program)->groupBy('city')->get();


        return view('programsList', [
            'cities' => $cities,
            'programs' => $programs,
            'ulke' => $ulke,
            'program' => $program,
            'dil' => $dil,
            'part' => $part,
            'citySelect' => $city 
        ]);
    }

    public function kayitOl(){
        return view('kayit');
    }

    public function applyProgram(){
        return view('applyProgram');
    }

    public function blogs(){
        $blogs = Post::where('id', "!=", 0)->paginate(10);
        return view('allBlogs', ['blogs' => $blogs]);
    }

    public function news(){
        $news = News::where('id', "!=", 0)->paginate(10);
        return view('allNews', ['news' => $news]);
    }

    public function newApplication(Request $request){

        $user_id = Auth::user()->id;
        $program_id = $request->program_id;
        
        $check = Application::where('user_id', Auth::user()->id)->where('program_id', $program_id)->first();
        if($check != ""){
            return redirect()->route('applicationContinue', ['id' => $check->id]);
        }else{
            $application = new Application;
            $application->user_id = $user_id;
            $application->program_id = $program_id;
            $application->status = "İlk Kayıt";
            if($application->save()){
                
                
                return redirect()->route('applicationContinue', ['id' => $application->id]);
            }
        }
    }

   public function informationPost(Request $request){     

        if($request->ajax()){
            $check = UserInformation::where('application_id', $request->application_id)->first();
            if($check){
                $form = $check;        
                $form->name = $request->name;
                $form->gender = $request->gender;
                $form->birthday = $request->birthday;
                $form->country = $request->country;
                $form->nationality = $request->nationality;
                $form->nationality_2 = $request->nationality_2;
                $form->email = $request->email;
                $form->phone = $request->phone;
                $form->foreign_language = $request->foreign_language;
                $form->language_level = $request->language_level;
                $form->language_test = $request->language_test;
                $form->exam_score = $request->exam_score;
                $form->application_id = $request->application_id;
                $form->save();
                $application = Application::where('id', $request->application_id)->first();
                $application->status = "İlk Bilgiler Dolduruldu";
                $application->save();


            }else{
                $form = new UserInformation;        
                $form->name = $request->name;
                $form->gender = $request->gender;
                $form->birthday = $request->birthday;
                $form->country = $request->country;
                $form->nationality = $request->nationality;
                $form->nationality_2 = $request->nationality_2;
                $form->email = $request->email;
                $form->phone = $request->phone;
                $form->foreign_language = $request->foreign_language;
                $form->language_level = $request->language_level;
                $form->language_test = $request->language_test;
                $form->exam_score = $request->exam_score;
                $form->application_id = $request->application_id;
                $form->save();

                $application = Application::where('id', $request->application_id)->first();
                $application->status = "İlk Bilgiler Dolduruldu";
                $application->save();

                $stage = new Stage;
                $stage->name = "Başvuru Taslak";
                $stage->content = "Başvuru süreciniz başladı. Lütfen gerekli bilgileri doldurunuz.";
                $stage->sorting = 1;
                $stage->application_id = $request->application_id;
                $stage->color = "yellow";
                $stage->save();
            }
            
        }else{
            redirect()->route('index');
        }
        return response()->json(['success'=>'İlk aşama başarılı.']);

   } 

   public function calculate(Request $request){
        $application_id = $request->application_id;
        $tostayCalculate = $request->tostayCalculate;
        $extrapaysCalculate = $request->extrapaysCalculate;

        $application = Application::where('id', $request->application_id)->first();
        if(isset($tostayCalculate)){
            $tostay = Tostay::where('id', $request->tostayCalculate)->first();
            $tostayPrice = $tostay->price;
        }else{
            $tostayPrice = 0;
        }
        $program = Program::where('id', $application->program_id)->first();
        $extrapayTotal = 0;
        if(isset($extrapaysCalculate)){
            foreach($extrapaysCalculate as $extrapay){
                $extraPayPrice = ExtraService::where('id', $extrapay)->first();
                $extrapayTotal += $extraPayPrice->price;
            }
        }
        $extraserviceTotal = 0;
        if(isset($program->extrapays)){
            foreach($program->extrapays as $extraservice){
                $extraPayTwoPrice = ExtraPay::where('id', $extraservice->id)->first();
                $extraserviceTotal += $extraPayTwoPrice->price;
            }
        }

        
        return (250 + intval($extrapayTotal) + intval($extraserviceTotal) + (intval($program->price)) + intval($tostayPrice)) . " " . $program->school->country->currency;
   }

   public function applyApplication(Request $request){

        $application_id = $request->application_id;
        $tostayCalculate = $request->tostayCalculate;
        $extrapaysCalculate = $request->extrapaysCalculate;

        $application = Application::where('id', $request->application_id)->first();
        if(isset($tostayCalculate)){
            $tostay = Tostay::where('id', $request->tostayCalculate)->first();
            $tostayPrice = $tostay->price;
        }else{  
            $tostayPrice = 0;
        }
        $program = Program::where('id', $application->program_id)->first();
        $extrapayTotal = 0;
        if(isset($extrapaysCalculate)){
            foreach($extrapaysCalculate as $extrapay){
                $extraPayPrice = ExtraService::where('id', $extrapay)->first();
                $extrapayTotal += $extraPayPrice->price;
            }
        }
        $extraserviceTotal = 0;
        if(isset($program->extrapays)){
            foreach($program->extrapays as $extraservice){
                $extraPayTwoPrice = ExtraPay::where('id', $extraservice->id)->first();
                $extraserviceTotal += $extraPayTwoPrice->price;
            }
        }
        
        $save = $application->extrapays()->sync($program->extrapays);
        if($save){
            $save2= $application->extraservices()->sync($extrapaysCalculate);
            if($save2){
                    $save3 = $application->tostays()->sync($tostayCalculate);
            }
        }

        $payment = new Payment;
        $payment->application_id = $application_id;
        $payment->type = 1;
        $payment->amount = (intval($extrapayTotal) + intval($extraserviceTotal) + (intval($program->price)) + intval($tostayPrice));
        $payment->save();
   }

    public function profile(){
        if(Auth::check()){
            $consultants = User::where('role_id', 4)->get();
            $messages = Message::where('user_id', Auth::user()->id)->get();
            return view('profile', ['consultants' => $consultants, 'messages' => $messages]);
        }else{
            return redirect()->route('login');
        }
        
    }

    public function studentSendMessage(Request $request){

        $message = new Message;

        $message->receive_id = $request->receive_id;
        $message->user_id = Auth::user()->id;
        $message->subject = $request->subject;
        $message->message = $request->message;
        $message->save();

        return response()->json(['success'=>'']);


    }

    public function applicationContinue($id){

        $application = Application::where('id', $id)->first();
        $messages = Message::where('user_id', Auth::user()->id)->get();
        
        return view('applyProgram', ['application' => $application, 'messages' => $messages]);

    }

    public function changePassword(Request $request){
        $user = Auth::user();

        $userPassword = $user->password;

        $request->validate([
        'current_password' => 'required',
        'new_password' => 'required|same:confirm_password|min:6',
        'confirm_password' => 'required',
        ]);

        if (!Hash::check($request->current_password, $userPassword)) {
            return back()->withErrors(['current_password' => 'Eski parolanız doğru değil!']);
        }

        $user->password = Hash::make($request->new_password);

        $user->save();

        return redirect()->back()->with('success', 'Parolanız değiştirildi.');
    }

    public function profile_update(Request $request){

        $user = Auth::user();
    
        $user->country = $request->country;
        $user->birthday = $request->birthday;
        $user->nationality = $request->nationality;
        $user->nationality_2 = $request->nationality_2;
        $user->foreign_language = $request->foreign_language;
        $user->language_level = $request->language_level;
        $user->language_test = $request->language_test;
        $user->gender = $request->gender;
        $user->exam_score = $request->exam_score;
    
        $save = $user->save();
    
        if ($save) {
          return redirect()->back()->with('success', 'Profiliniz güncellenmiştir.');
        }
    }

    public function fileUpload(Request $request){
       request()->validate([
         'file'  => 'required|mimes:doc,docx,pdf,txt,png,jpg|',
       ]);
  
        if ($files = $request->file('file')) {
             
            $file = $request->file->store('public/documents');
 
            
            $document = new File();
            $document->title = $file;
            $document->type = $request->type;
            $document->application_id = $request->application_id;
            $document->save();

            if($request->type == "Dekont"){
                $stage = new Stage;
                $stage->name = "Ön Başvuru";
                $stage->content = "Ön Başvurunuz tamamlandı.";
                $stage->sorting = 2;
                $stage->application_id = $request->application_id;
                $stage->color = "orange";
                $stage->save();
                
            }
              
            return Response()->json([
                "success" => true,
                "file" => $file
            ]);
  
        }
  
        return Response()->json([
                "success" => false,
                "file" => ''
          ]);
  
    }

    public function consultantView($slug){
        $consultant = User::where('slug', $slug)->first();
        return view('consultantView', ['consultant' => $consultant]);
    }

    public function consultantApplyPost(Request $request){

        $consultant = new ConsultantsApply;
        $consultant->name = $request->name;
        $consultant->email = $request->email;
        $consultant->password = $request->password;
        $consultant->adress = $request->adress;
        $consultant->country = $request->country;
        $consultant->phone = $request->phone;
        $consultant->birthday = $request->birthday;
        $consultant->content = $request->content;
        $consultant->identity_number = $request->identity_number;
        $save = $consultant->save();

        if ($save) {
            return redirect()->back()->with('success', 'Başarılı.');
        }
    }

    public function studentMessageDetail($id){

        $message = Message::findorfail($id);
        return view('message_detail', ['message' => $message]);

    }

    public function canadaCoop(){
        return view('kanada_coop');
    }

    public function CanadaCoopApplication(Request $request){

        $CanadaCoop = new CanadaCoopApplication;
        $CanadaCoop->name = $request->name;
        $CanadaCoop->email = $request->email;
        $CanadaCoop->phone = $request->phone;
        $CanadaCoop->job_title = $request->job_title;
        $CanadaCoop->birthday = $request->birthday;
        $CanadaCoop->education = $request->education;
        $CanadaCoop->marital_status = $request->marital_status;
        $CanadaCoop->special = $request->special;
        $save1 = $CanadaCoop->save();

        $data = new Data;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->job = $request->job_title;
        $data->birthday = $request->birthday;
        $data->education = $request->education;
        $data->marital_status = $request->marital_status;
        $data->data_date = date('Y-m-d');
        $data->status = "Devam Ediyor";
        $save2 = $data->save();

        if($save2){
            return response()->json(['success'=>'Form Gönderildi']);
        }
    }

    public function franchise(){
        return view('franchise');
    }

    public function FranchiseApplicationPost(Request $request){

        $CanadaCoop = new FranchiseApplication;
        $CanadaCoop->name = $request->name;
        $CanadaCoop->email = $request->email;
        $CanadaCoop->phone = $request->phone;
        $CanadaCoop->city = $request->city;
        $CanadaCoop->content = $request->content;
        $save = $CanadaCoop->save();
        if($save){
            return response()->json(['success'=>'Form Gönderildi']);
        }
    }

    public function specialPage($slug){

        $page = Page::where('slug', $slug)->first();
        return view('special', ['page' => $page]);

    }
}
