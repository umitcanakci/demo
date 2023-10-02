<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;
use App\Application;
use App\Service;
use App\Message;
use App\Reminder;
use App\Stage;
use App\Data;
use App\Process;
use App\ExtraService;
use App\ExtraPay;
use Auth;
use DB;


class ConsultantController extends Controller
{

    public function index(){
        return view('consultant.index');
    }

    public function consultants(){
        $consultants = User::where('role_id', 4)->get();
        return view('consultant.consultants', ['consultants' => $consultants]);
    }

    public function applications(){
        $applications = Application::orderBy('id', 'DESC')->get();
        return view('consultant.applications', [
            'applications' => $applications
        ]);
    }

    public function applicationsView($id){
        $consultants = User::where('role_id', 4)->get();
        $application = Application::where('id', $id)->first();
        return view('consultant.applicationView', [
            'application' => $application,
            'consultants' => $consultants
        ]);

    }

    public function StatusConsultantPost(Request $request){
        $consultant = $request->consultant;
        $status = $request->status;
        $id = $request->application_id;

        if($request->ajax()){
            $application = Application::where('id', $id)->first();        
            $application->consultant_id = $consultant;
            $application->status = $status;
            $application->save();
        }else{
            redirect()->route('index');
        }
        return response()->json(['success'=>'']);
    }

    public function consultantEdit($id){
        $consultant = User::findorfail($id);
        return view('consultant.consultant_edit', ['consultant' => $consultant]);
    }

    public function consultantDelete(Request $request){
        $consultant = User::findorfail($request->id);
        $consultant->delete();
        return response()->json(['sucess' => ""]);
    }

    public function consultantServiceDelete(Request $request){

        $service = ExtraService::findorfail($request->id);
        $service->delete();
        return response()->json(['sucess' => ""]);

    }

    public function consultantAdd(){
        return view('consultant.add');
    }

    public function consultantServices(){
        $services = ExtraService::where('user_id', Auth::user()->id)->get();
        return view('consultant.services', [
            'services' => $services
        ]);
    }

    public function consultantServiceAdd(){
        return view('consultant.service_add');
    }

    public function consultantServiceApplyPost(Request $request){

        $service = new ExtraService;

        $service->name = $request->name;
        $service->price = $request->price;
        $service->user_id = $request->user_id;
        $save = $service->save();

        if ($save) {
            return redirect()->back()->with('success', 'Servisiniz eklenmiştir.');
        }
    }

    public function consultantPayAdd(){
        return view('consultant.pay_add');
    }

    public function consultantPayApplyPost(Request $request){

        $service = new ExtraPay;

        $service->name = $request->name;
        $service->price = $request->price;
        $service->user_id = $request->user_id;
        $save = $service->save();

        if ($save) {
            return redirect()->back()->with('success', 'Ek ücretiniz eklenmiştir.');
        }
    }

    public function consultantMessages(){

        $messages = Message::get()->all();
        return view('consultant.messages', [
            'messages' => $messages
        ]);

    }

    public function consultantEditPost(Request $request){

        $user = User::where('id', $request->id )->first();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
         $user->slug = $request->slug;
        $user->linkedin = $request->linkedin;
        $user->instagram = $request->instagram;
        $user->content = $request->content;
        $user->save();

        return redirect()->back()->with('success', 'Profiliniz güncellendi.');
    }

    public function consultantMessageDetail($id){
        $message = Message::findorfail($id);
        return view('consultant.messageDetail', ['message' => $message]);
    }
    
    public function consultantMessageAnswerPost(Request $request){

        $message = Message::findorfail($request->id);
        $message->answer = $request->answer;
        $message->save();

        return redirect()->back()->with('success', 'Mesajınız gönderildi.');
        
    }

    public function datas(){

        

    }

    public function consultantAddPost(Request $request){
        $save = Data::create($request->all());
        if($save){
            return redirect()->back()->with('success', 'İşlem Başarılı.');
        }else{
            return redirect()->back()->with('error', 'İşlem Başarısız.');
        }
        

    }

    public function consultantStudentCreate(){
        return view('consultant.student_add');
    }



    public function consultantDatasCreate(){
        return view('consultant.dataCreate');
    }

    public function consultantDataEdit($id){
        $data = Data::findorfail($id);
        return view('consultant.dataEdit', ['data' => $data]);
    }

    public function consultantEditDataPost(Request $request){

        $data = Data::findorfail($request->id);

        
        $save = $data->update($request->all());
        if($save){
            return redirect()->back()->with('success', 'İşlem Başarılı.');
        }else{
            return redirect()->back()->with('error', 'İşlem Başarısız.');
        }
    }

    public function consultantReminderStatusUpdate(Request $request){

        $reminder = Reminder::findorfail($request->id);

        if($reminder->status == 1){
            $reminder->status = 0;
        }else{
            $reminder->status = 1;
        }
        $save = $reminder->update();
        if($save){

            return "OK";

        }

    }

    public function consultantReminderPost(Request $request){
        $reminder = new Reminder;
        $reminder->content = $request->content;
        $reminder->date = $request->date;
        $reminder->data_id = $request->id;
        $save = $reminder->save();

        if($save){
            return redirect()->back()->with('success', 'İşlem Başarılı.');
        }else{
            return redirect()->back()->with('error', 'İşlem Başarısız.');
        }
    }

    public function consultantProcessPost(Request $request){
        $process = new Process;

        $process->content = $request->content;
        $process->name = $request->name;
        $process->date = $request->date;
        $process->data_id = $request->id;
        $save = $process->save();

        if($save){
            return redirect()->back()->with('success', 'İşlem Başarılı.');
        }else{
            return redirect()->back()->with('error', 'İşlem Başarısız.');
        }
    }

    public function consultantDatasAll(){
        $datas = Data::get()->all();
        return view('consultant.datasAll', ['datas' => $datas]);
    }

    public function consultantAllDataFilter($filter){
        $datas = Data::where('status', $filter)->get();
        return view('consultant.datasAll', ['datas' => $datas, 'filter' => $filter]);
    }

    public function consultantReminderAll(){
        if(Auth::user()->role_id == 6 || Auth::user()->role_id == 7){
            $reminders = Data::where('consultant_id', Auth::user()->id)->get();
        }else if(Auth::user()->role_id == 1 || Auth::user()->role_id == 6){
            $reminders = Data::get()->all();
        }else{
            return back();
        }
        $array = [];
        foreach($reminders as $reminder){
            foreach($reminder->reminders as $reminder2){
                if($reminder2->status != 1){
                    array_push($array, $reminder2);
                }
                
        }
            
        }
        return view('consultant.reminders', ['reminders' => $array]);

    }

    public function stagePost(Request $request){
        $stage = new Stage;
        if(isset($request->name2))
            $stage->name = $request->name2;
        else{
            $stage->name = $request->name;
        }
        $stage->content = $request->content;
        $stage->sorting = $request->sorting;
        $stage->application_id = $request->application_id;
        $stage->color = $request->color;
        $save = $stage->save();

        if($save){
            return redirect()->back()->with('success', 'İşlem Başarılı.');
        }else{
            return redirect()->back()->with('error', 'İşlem Başarısız.');
        }
    }

    public function consultantExtrapayPost(Request $request){
        $application = Application::findorfail($request->application_id);
        $save = $application->extrapays()->attach($request->pay);
        return redirect()->back()->with('success', 'İşlem Başarılı.');
    }

    public function consultantExtraservicePost(Request $request){
        $application = Application::findorfail($request->application_id);
        $save = $application->extraservices()->attach($request->service);
        return redirect()->back()->with('success', 'İşlem Başarılı.');
    }

    public function consultantDataFilter(Request $request){

        $category = $request->category;
        $consultant_id = $request->consultant_id;
        $status = $request->status;
        $program = $request->program;
        $data_date_end = $request->data_date_end;
        $data_date_start = $request->data_date_start;

        $string = "SELECT * FROM datas WHERE ";

        foreach ($request->all() as $key => $value) {
            if($key == "_token" || $key == "data_date_start" || $key == "data_date_end"){
            }else{
                if($value != ""){
                    if($key == "consultant_id"){
                        $string .= $key . " = " . $value . " AND ";
                    }else{
                        $string .= $key . " = '" . $value . "' AND ";
                    }
                    
                }else{

                }
            }
        }
        if($data_date_start != ""){
           $string .= "data_date" . " >= '" . $data_date_start . "' AND ";
        }
        if($data_date_end != ""){
            $string .= "data_date" . " <= '" . $data_date_end . "' AND";
        }
        $sql = substr($string, 0, -4);
        $datas = DB::select($sql);
        return view('consultant.datasAll', ['datas' => $datas]);
    }

    public function consultantPays(){
        $pays = ExtraPay::where('user_id', Auth::user()->id)->get();
        return view('consultant.pays', [
            'pays' => $pays
        ]);
    }

    
    public function consultantPayDelete(Request $request){
        $service = ExtraPay::findorfail($request->id);
        $service->delete();
        return response()->json(['sucess' => ""]);
    }


}