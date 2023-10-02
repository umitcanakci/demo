@extends('consultant.layouts.app')

@section('content')

<link href="{{ asset('consultant/vendor/datatables/css/jquery.dataTables.min.css')}}" rel="stylesheet">


<div class="row">
    <div class="col-lg-12">
        @if (session()->has('success'))
                <div class="alert alert-success">
                    @if (is_array(session('success')))
                        @foreach (session('success') as $message)
                            <li>{{ $message }}</li>
                        @endforeach
                        </ul>
                    @else
                        {{ session('success') }}
                    @endif
                </div>
            @endif

            @if (session()->has('error'))
                <div class="alert alert-warning">
                    @if (is_array(session('error')))
                        @foreach (session('error') as $message)
                            <li>{{ $message }}</li>
                        @endforeach
                        </ul>
                    @else
                        {{ session('error') }}
                    @endif
                </div>
            @endif
    </div>
    <div class="col-xl-8">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <div class="profile-statistics">
                            <div class="text-left">
                                <div class="row" >
                                    
                                    

                                    <h4>Başvuru Bilgileri</h4>
                               
                                                      <table>
                                                      <tr>
                                                       <td>   <h5 style="color:#002547">Atanan Danışman:  </h5> </td>
                                                        <td> <h5 style="color:#7a7a7a">@if(isset($application->consultant->name)) {{ $application->consultant->name }} @else <b style="color:red"> Danışman atanmadı! @endif </b></h5> </td>
                                                    
                                                      </tr>
                                                      </table>
                                                                                        <hr>
                                                        <table>
                                                  <tr>
                                                   <td>   <h5 style="color:#002547">Ad Soyad:  </h5> </td>
                                                    <td><h5 style="color:#7a7a7a">{{ $application->userInformation->name  ?? 'Henüz Doldurulmadı' }}</h5> </td>
                                                
                                                  </tr>
                                                  <tr>
                                                   <td> <h5 style="color:#002547">E-posta adresi:</h5> </td>
                                                <td><h5 style="color:#7a7a7a">{{ $application->userInformation->email  ?? 'Henüz Doldurulmadı' }}</h5> </td>
                                                
                                                  </tr>
                                                  <tr>
                                                    <td><h5 style="color:#002547">Telefon:</h5> </td>
                                                    <td><h5 style="color:#7a7a7a">{{ $application->userInformation->phone  ?? 'Henüz Doldurulmadı' }}</h5></td>
                                                
                                                  </tr>

                                                  <tr>
                                                    <td><h5 style="color:#002547">Doğum Yeri:</h5> </td>
                                                    <td><h5 style="color:#7a7a7a">{{ $application->userInformation->country  ?? 'Henüz Doldurulmadı' }}</h5></td>
                                                
                                                  </tr>

                                                  <tr>
                                                    <td><h5 style="color:#002547">Doğum Tarihi:</h5> </td>
                                                    <td><h5 style="color:#7a7a7a">{{ $application->userInformation->birthday  ?? 'Henüz Doldurulmadı' }}</h5></td>
                                                
                                                  </tr>

                                                  <tr>
                                                    <td><h5 style="color:#002547">Yabancı Dil:</h5> </td>
                                                    <td><h5 style="color:#7a7a7a">{{ $application->userInformation->foreign_language  ?? 'Henüz Doldurulmadı' }}</h5></td>
                                                
                                                  </tr>

                                                  <tr>
                                                    <td><h5 style="color:#002547">Dil Seviyesi:</h5> </td>
                                                    <td><h5 style="color:#7a7a7a">{{ $application->userInformation->language_level  ?? 'Henüz Doldurulmadı' }}</h5></td>
                                                
                                                  </tr>

                                                  <tr>
                                                    <td><h5 style="color:#002547">Dil Sınavı:</h5> </td>
                                                    <td><h5 style="color:#7a7a7a">{{ $application->userInformation->language_test  ?? 'Henüz Doldurulmadı' }}</h5></td>
                                                
                                                  </tr>

                                                  <tr>
                                                    <td><h5 style="color:#002547">Uyruk:</h5> </td>
                                                    <td><h5 style="color:#7a7a7a">{{ $application->userInformation->nationality  ?? 'Henüz Doldurulmadı' }}</h5></td>
                                                
                                                  </tr>

                                                  <tr>
                                                    <td><h5 style="color:#002547">Sınav Puanı:</h5> </td>
                                                    <td><h5 style="color:#7a7a7a">{{ $application->userInformation->exam_score  ?? 'Henüz Doldurulmadı' }}</h5></td>
                                                
                                                  </tr>
                                                   
                                                       <tr>
                                                    <td><h5 style="color:#002547">Program Süresi:</h5> </td>
                                                    <td><h5 style="color:#7a7a7a">{{ $application->program->program_time }}</h5> </td>
                                                
                                                  </tr>
                                                    <tr>
                                                        <td><h5 style="color:#002547">Program Fiyatı:</h5> </td>
                                                        <td><h5 style="color:#7a7a7a">{{ $application->program->price }}</h5> </td>
                                                    </tr>

                                                   
                                                </table>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4">
        <div class="card" style="height:auto">
            <div class="card-body pt-5 pb-5" >
                <form id="statusConsultant">
                    <label style="color:black" for="consultant">Danışman Atama</label>
                    <select required name="consultant_id" id="consultant" class="form-select" aria-label="Default select example">
                        <option >Lütfen Danışman Seçiniz </option>
                        @foreach($consultants as $consultant)
                            <option @if($consultant->id == $application->consultant_id) selected @endif value="{{ $consultant->id }}">{{ $consultant->name }}</option>
                        @endforeach
                    </select>
                    <input type="hidden" name="application_id" id="applicationid" value="{{ $application->id }}">
                </form>

                <button id="saveConsultantStatus" class="btn btn-block btn-success mt-3"> Kaydet </button>
            </div>
        </div>

        

    </div>


    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Aşama Ekle</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal">
                    </button>
                </div>
                <div class="modal-body">
                    <form id="stagePostForm" action="{{ route('consultant.stage.post') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="mb-3 col-12">
                                <label style="color:black" for="consuçltant">İşlem</label>
                                <select name="name" id="name" id="selectName" class="form-select">
                                    <option >Lütfen İşlem Seçiniz </option>
                                        <option value="Ön Başvuru"> Ön Başvuru </option>
                                        <option value="Evraklar ve Ödeme"> Evraklar ve Ödeme </option>
                                        <option value="Okul Kaydı"> Okul Kaydı </option>
                                        <option value="Okul Ödemesi"> Okul Ödemesi </option>
                                        <option value="Vize Randevusu"> Vize Randevusu </option>
                                </select>
                            </div>
                            <div class="mb-3 col-12">
                                <label style="color:black" for="content">Özel bir işlem eklemek istiyorsanız burayı doldurun. Aksi halde boş bırakın. </label>
                                <input class="form-control" type="text" name="name2" placeholder="Özel İşlem">
                            </div>
                            <div class="mb-3 col-12">
                                <label style="color:black" for="color">Renk</label>
                                <select required name="color" id="color" class="form-select">
                                    <option >Lütfen Renk Seçiniz (Bu öğrencinin başvuru aşamalarında gözükecek olan renktir) </option>
                                        <option value="yellow"> Sarı </option>
                                        <option value="blue"> Mavi </option>
                                        <option value="red"> Kırmızı </option>
                                        <option value="green"> Yeşil </option>
                                        <option value="black"> Siyah </option>
                                        <option value="orange"> Turuncu </option>
                                </select>
                            </div>
                            <div class="mb-3 col-12">
                                <label style="color:black" for="content">Açıklama</label>
                                <input class="form-control" type="text" name="content" placeholder="Açıklama">
                            </div>
                            <div class="mb-3 col-12">
                                <label style="color:black" for="consultant">Sıra</label>
                                <input class="form-control" type="number" name="sorting" placeholder="Sıra">
                            </div>

                            <input type="hidden" name="application_id" value="{{ $application->id }}">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Kapat</button>
                    <button type="button" id="stagePost" class="btn btn-primary">Kaydet</button>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-12">
        <div class="card" style="height:auto">
            <div class="card-body pt-5 pb-5">

                <div class="card-header">
                    <h4 class="card-title">Aşamalar</h4><button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target=".bd-example-modal-lg">Aşama Ekle</button>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example3" class="display text-center" style="min-width: 845px">
                            <thead>
                                <tr>
                                    <th>Aşamanın Adı</th>
                                    <th>Aşama Notu</th>
                                    <th>Aşama Sırası</th>
                                    <th>İşlemler</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                    @foreach($application->stages as $stage)
                                        <tr>
                                            <th>{{ $stage->name }}</th>
                                            <th>{{ $stage->content }}</th>
                                            <th>{{ $stage->sorting }}</th>
                                            <th></th>
                                        </tr>
                                    @endforeach
                                
                                
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Aşamanın Adı</th>
                                    <th>Aşama Notu</th>
                                    <th>Aşama Sırası</th>
                                    <th>İşlemler</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <div class="accordion accordion-primary" id="accordion-one">
                    <div class="accordion-item">
                        <div class="accordion-header  rounded-lg" id="headingOne" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-controls="collapseOne" aria-expanded="true" role="button">
                            <span class="accordion-header-icon"></span>
                            <span class="accordion-header-text">Özet</span>
                            <span class="accordion-header-indicator"></span>
                        </div>
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-bs-parent="#accordion-one">
                            <div class="accordion-body-text">
                                <ul class="timeline">
                                    <li>
                                        <div class="timeline-panel">
                                            <div class="media-body">
                                                <table style="width: 100%;">
                                                    <tr>
                                                        <td><h5 style="color:#7a7a7a">Program İsmi:</h5><h5 style="color:#002547">{{ $application->program->name }}</h5> </td>
                                                        <td><h5 style="color:#7a7a7a">Program Süresi:</h5> <h5 style="color:#002547">{{ $application->program->program_time }}</h5></td>
                                                        <td>
                                                            <h5 style="color:#7a7a7a">Program Fiyatı:</h5><h5 style="color:#002547">{{ $application->program->price }}</h5> 
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><h5 style="color:#7a7a7a">Program Türü:</h5><h5 style="color:#002547">{{ $application->program->programCategory->name }}</h5> </td>
                                                        <td><h5 style="color:#7a7a7a">Program Okulu:</h5><h5 style="color:#002547">{{ $application->program->school->name }}</h5> </td>
                                                        <td><h5 style="color:#7a7a7a">Program Bölümü:</h5><h5 style="color:#002547">{{ $application->program->part }}</h5> </td>
                                                    </tr>
                                                    <tr>
                                                        <td><h5 style="color:#7a7a7a">Program Dil:</h5><h5 style="color:#002547">{{ $application->program->language }}</h5> </td>
                                                        <td><h5 style="color:#7a7a7a">Program Ülkesi:</h5><h5 style="color:#002547">{{ $application->program->school->country->name }}</h5> </td>
                                                        <td><h5 style="color:#7a7a7a">Program Şehri:</h5><h5 style="color:#002547">{{ $application->program->school->city }}</h5> </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>


                    <div class="modal fade bd-example-modal-lg ekhizmet" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Ek Hizmet Ekle</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal">
                                    </button>
                                </div>
                                <div class="modal-body">
                                <form id="hizmetpostForm" action="{{ route('consultant.extraservice.post') }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="mb-3 col-12">
                                            <label class="form-label">Ek Hizmet Ekle</label>
                                                <select required name="service" id="ser" class="form-select">
                                                    <option value=""> Hizmet Seçiniz </option>
                                                    @foreach(Auth::user()->services as $service)
                                                        <option value="{{ $service->id }}"> {{ $service->name }} </option>
                                                    @endforeach
                                                </select>
                                        </div>
                                        <input type="hidden" name="application_id" value="{{ $application->id }}">

                                    </div>
                                </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Kapat</button>
                                    <button type="button" id="hizmetpost" class="btn btn-primary">Kaydet</button>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="accordion-item">
                        <div class="accordion-header collapsed rounded-lg" id="headingTwo" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-controls="collapseTwo" role="button" aria-expanded="true">
                            <span class="accordion-header-text">Ek Hizmetler</span>
                            <span class="accordion-header-indicator"></span>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-bs-parent="#accordion-one"><br>
                        <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target=".ekhizmet">Ek Hizmet Ekle</button>
                            <div class="accordion-body-text">
                                <ul class="timeline">
                                    @foreach($application->extraservices as $service)
                                        <li>
                                            <div class="timeline-panel">
                                                <div class="media-body">
                                                            <table style="width: 100%;">
                                                 <tr>
                                            <td><h5 style="color:#7a7a7a">{{ $service->name }}:</h5><h5 style="color:#002547">{{ $service->price }}</h5> </td>
                                           </tr>
                                             </table>
                                                  
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div class="accordion-header collapsed rounded-lg" id="headingThree" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-controls="collapseThree" role="button" aria-expanded="true">
                            <span class="accordion-header-text">Konaklama</span>
                            <span class="accordion-header-indicator"></span>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-bs-parent="#accordion-one">
                            <div class="accordion-body-text">
                                @foreach($application->tostays as $tostay)
                                    <li>
                                        <div class="timeline-panel">
                                            <div class="media-body">
                                                <table style="width: 100%;">
                                             <tr>
                                            <td><h5 style="color:#7a7a7a">Adı:</h5><h5 style="color:#002547">{{ $tostay->name }}</h5> </td>
                                           
                                            <td><h5 style="color:#7a7a7a">Zaman:</h5> <h5 style="color:#002547">{{ $tostay->name }}</h5></td>
                                          
                                             <td><h5 style="color:#7a7a7a">Fiyat:</h5><h5 style="color:#002547">{{ $tostay->price }}</h5> </td>
                                            </tr>
                                            </table>
                                                
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <div class="accordion-header collapsed rounded-lg" id="headingFour" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-controls="collapseFour" role="button" aria-expanded="true">
                            <span class="accordion-header-text">Evraklar</span>
                            <span class="accordion-header-indicator"></span>
                        </div>
                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-bs-parent="#accordion-one">
                            <div class="accordion-body-text">
                                @foreach($application->files as $file)
                                    <li>
                                        <div class="timeline-panel">
                                            <div class="media-body">
                                                <h5 class="mb-1">Adı: {{ $file->type }}</h5><br>
                                                <h5 class="mb-1">Dosya: <a href="<?=url('/storage')?>/{{ str_replace('public', '', $file->title)}}" target="_blank">Dosya için tıklayınız.</a> </h5><br>
                                            </div>
                                        </div>
                                    </li>
                                    <hr>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    

                    
                    <div class="modal fade bd-example-modal-lg ekucret" id="exampleModalLong" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Ek Ücret Ekle</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form id="ucretpostForm" action="{{ route('consultant.extrapay.post') }}" method="POST">
                                        @csrf
                                        <div class="row">
                                            <div class="mb-3 col-12">
                                                <label class="form-label">Ek Ücret Ekle</label>
                                                    <select required name="pay" id="ser" class="form-select">
                                                        <option value=""> Hizmet Seçiniz </option>
                                                        @foreach(Auth::user()->pays as $pays)
                                                            <option value="{{ $pays->id }}"> {{ $pays->name }} </option>
                                                        @endforeach
                                                    </select>
                                            </div>
                                            <input type="hidden" name="application_id" value="{{ $application->id }}">
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Kapat</button>
                                    <button type="button" id="ucretpost" class="btn btn-primary">Kaydet</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <div class="accordion-header collapsed rounded-lg" id="headingfive" data-bs-toggle="collapse" data-bs-target="#collapsefive" aria-controls="collapsefive" role="button" aria-expanded="true">
                            <span class="accordion-header-text">Ek Ücretler</span>
                            <span class="accordion-header-indicator"></span>
                        </div>
                        <div id="collapsefive" class="collapse" aria-labelledby="headingfive" data-bs-parent="#accordion-one"><br>
                        <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target=".ekucret">Ek Ücret Ekle</button>
                            <div class="accordion-body-text">
                                @foreach($application->extrapays as $extrapay)
                                    <li>
                                        <div class="timeline-panel">
                                            <div class="media-body">
                                                   <table style="width: 100%;">
                                             <tr>
                                            <td style="width: 50%;"><h5 style="color:#7a7a7a">Adı:</h5><h5 style="color:#002547">{{ $extrapay->name }}</h5> </td>
                                           
                                          <td><h5 style="color:#7a7a7a">Fiyat:</h5><h5 style="color:#002547"> {{ $extrapay->price }}</h5> </td>
                                            </tr>
                                            </table>
                                              
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <div class="accordion-header collapsed rounded-lg" id="headingsix" data-bs-toggle="collapse" data-bs-target="#collapsesix" aria-controls="collapsesix" role="button" aria-expanded="true">
                            <span class="accordion-header-text">Ödemeler</span>
                            <span class="accordion-header-indicator"></span>
                        </div>
                        <div id="collapsesix" class="collapse" aria-labelledby="headingsix" data-bs-parent="#accordion-one">
                            <div class="accordion-body-text">
                                @foreach($application->payments as $payment)
                                    <li>
                                        <div class="timeline-panel">
                                            <div class="media-body">
                                                 <table style="width: 100%;">
                                             <tr>
                                            <td style="width: 50%;"><h5 style="color:#7a7a7a">Türü:</h5><h5 style="color:#002547">@if($payment->type == 1) Fatura @else Ödeme @endif</h5> </td>
                                           
                                          <td><h5 style="color:#7a7a7a">Tutar:</h5><h5 style="color:#002547"> {{ $payment->amount }}</h5> </td>
                                            <td><h5 style="color:#7a7a7a">Para Birimi:</h5><h5 style="color:#002547">  {{ $payment->currency }}</h5> </td>
                                            </tr>
                                            </table>
                                              
                                               
                                            </div>
                                        </div>
                                    </li>
                                    <hr>
                                @endforeach
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('consultant/vendor/global/global.min.js')}}"></script>
    <script src="{{ asset('consultant/vendor/chart.js/Chart.bundle.min.js')}}"></script>
    <!-- Apex Chart -->
    <script src="{{ asset('consultant/vendor/apexchart/apexchart.js')}}"></script>

    <!-- Datatable -->
    <script src="{{ asset('consultant/vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{ asset('consultant/js/plugins-init/datatables.init.js')}}"></script>

    <script src="{{ asset('consultant/vendor/jquery-nice-select/js/jquery.nice-select.min.js')}}"></script>

    <script src="{{ asset('consultant/js/custom.min.js')}}"></script>
    <script src="{{ asset('consultant/js/deznav-init.js')}}"></script>
    <script src="{{ asset('consultant/js/demo.js')}}"></script>
    <script src="{{ asset('consultant/js/styleSwitcher.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        $('#saveConsultantStatus').on('click', function(){

            var consultant = $('#consultant').val();
            var status = $('#status').val();
            var application_id = $('#applicationid').val();
            $.ajaxSetup({
                headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type:'POST',
                url: "{{ route('consultant.StatusConsultantPost')}}",
                data: {
                    consultant:consultant,
                    status:status,
                    application_id:application_id,
                },
                success: function(response) {
                    swal("Başarılı!", "Kaydedildi!", "success");
                },

                error:function(response) {
                    console.log(response)
                },
                    
            });

        });

        $('#hizmetpost').on('click', function(){
            $( "#hizmetpostForm" ).submit();
        });


    $('#ucretpost').on('click', function(){
        $( "#ucretpostForm" ).submit();
    });

    $('#stagePost').on('click', function(){
        $( "#stagePostForm" ).submit();
    });


    </script>






@endsection