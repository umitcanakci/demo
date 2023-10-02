@extends('consultant.layouts.app')

@section('content')

<div class="col-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Mesaj Detay</h4>
        </div>
        <div class="card-body">
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
            <div class="basic-form">
                <form action="{{ route('consultant.message.answer.post') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="mb-3 col-md-4">
                            <label class="form-label">Konu</label>
                            <h4>{{ $message->subject }} </h4>
                        </div>
                        <div class="mb-3 col-md-4">
                            <label class="form-label">Gönderen Kişi</label>
                            <h4>{{ $message->user->name }} </h4>
                        </div>
                        <div class="mb-3 col-md-12">
                            <label class="form-label">Gelen Mesaj</label>
                            <h4>{{ $message->message }} </h4>
                        </div>

                        <div class="mb-3 col-12">
                            <label class="form-label">Cevap</label>

                            <textarea name="answer" id="editor2">@if(isset($message->answer)){{ $message->answer }}@endif</textarea>
                        </div>
                        <input type="hidden" name="id" value="{{ $message->id }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Kaydet</button>
                </form>
            </div>
        </div>
    </div>

</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/28.0.0/classic/ckeditor.js" ></script>

<script>

ClassicEditor.create(document.querySelector("#editor"));
ClassicEditor.create(document.querySelector("#editor2"));

</script>

@endsection