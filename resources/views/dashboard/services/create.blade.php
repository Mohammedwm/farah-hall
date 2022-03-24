@extends('dashboard.layouts.master')

@section('title', 'إضافة قاعة')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">إضافة قاعة</li>
@endsection
@section('content')
    <div class="card card-custom">
        <!--begin::Form-->
        <form method="post" action="{{ route('dashboard.service.store') }}">
            @csrf
            <div class="card-body">
                <div class="form-group row">
                    <x-form.label class="col-2" label="الخدمة" />
                    <div class="col-10">
                        <x-form.input name="name" value="{{old('name',$service->name)}}" />
                    </div>
                </div>
                <div class="form-group row">
                    <x-form.label class="col-2" label="وصف الخدمة" />
                    <div class="col-10">
                        <x-form.input name="description" value="{{old('description',$service->description)}}" />
                    </div>
                </div>

            </div>
            <div class="card-footer">
                <div class="row">
                    <div class="col-2">
                    </div>
                    <div class="col-10">
                        <button type="submit" class="btn btn-success mr-2">حفظ</button>
                        <button type="reset" class="btn btn-secondary">رجوع</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
