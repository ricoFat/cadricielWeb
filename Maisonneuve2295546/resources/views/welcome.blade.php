@extends('.layouts.app')
@section('title', config('app.name'))
@section('titleHeader', config('app.name'))
@section('content')
        <div class="row">
            <div class="col-12 text-center">
                <p>  @lang('lang.text_welcome_page')</p>
            </div>
        </div>
    </div>
@endsection