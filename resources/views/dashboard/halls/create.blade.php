@extends('dashboard.layouts.master')

@section('title', 'إضافة قاعة')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">إضافة قاعة</li>
@endsection
@section('content')
    <div class="card card-custom">
        <!--begin::Form-->
        <form method="post" action="{{ route('dashboard.hall.store') }}">
            @csrf
            <div class="card-body">
                <div class="form-group row">
                    <x-form.label class="col-2" label="اسم المالك" />
                    <div class="col-10">
                        <x-form.input name="owner_name" value="{{ old('owner_name', $hall->owner_name) }}" />
                    </div>
                </div>
                <div class="form-group row">
                    <x-form.label class="col-2" label="اسم الصالة" />
                    <div class="col-10">
                        <x-form.input name="hall_name" value="{{ old('hall_name', $hall->hall_name) }}" />
                    </div>
                </div>
                <div class="form-group row">
                    <x-form.label class="col-2" label="العنوان" />
                    <div class="col-10">
                        <x-form.input name="address" value="{{ old('address', $hall->address) }}" />
                    </div>
                </div>
                <div class="form-group row">
                    <x-form.label class="col-2" label="تاريخ الإنشاء" />
                    <div class="col-4">
                        <x-form.input type="date" name="created_date" value="{{ old('created_date', $hall->created_date) }}" />
                    </div>
                    <x-form.label class="col-2" label="مساحة الصالة (م2)" />
                    <div class="col-4">
                        <x-form.input type="number" name="size" value="{{ old('size', $hall->size) }}" />
                    </div>
                </div>
                <div class="form-group row">
                    <x-form.label class="col-2" label="عدد الأفراد من" />
                    <div class="col-4">
                        <x-form.input type="number" name="min_count" value="{{ old('min_count', $hall->min_count) }}" />
                    </div>
                    <x-form.label class="col-2" label="إلى" />
                    <div class="col-4">
                        <x-form.input type="number" name="max_count" value="{{ old('max_count', $hall->max_count) }}" />
                    </div>
                </div>
                <div class="form-group row">
                    <x-form.label class="col-2" label="تفاصيل أخرى" />
                    <div class="col-4">
                        <x-form.input type="text" name="detail" value="{{ old('detail', $hall->detail) }}" />
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
