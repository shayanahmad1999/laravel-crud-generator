@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Bank
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Create') }} Bank</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('banks.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('bank.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
