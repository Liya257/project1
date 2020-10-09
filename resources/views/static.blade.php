@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{$url}}</div>

                <div class="card-body">
                    Вы посетили наш сайт<br/>
					Здесь вы можете .....<br/>
					Воспользуйтесь нашими опциями!<br/>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
