    @extends('dashboard.layouts.master')

    @section('title', 'تفاصيل الصالة')
    @section('breadcrumb')
        @parent
        <li class="breadcrumb-item active">تفاصيل الصالة</li>
    @endsection
    @section('content')
        <div class="card card-custom">
            <!--begin::Form-->
            <form method="post" action="{{ route('dashboard.profile.store') }}">
                @csrf
                <div class="card-body">
                    <div class="form-group row">
                        <x-form.input id="owner_name" name="owner_name" label="اسم المالك" value="" />
                    </div>
                    <div class="form-group row">
                        <x-form.input id="hall_name" name="hall_name" label="اسم الصالة" value="" />
                    </div>
                    <div class="form-group row">
                        <x-form.input id="address" name="address" label="العنوان" value="" />
                    </div>
                    <div class="form-group row">
                        <x-form.input type="number" id="mobile" name="mobile" label="رقم الجوال" value="" />
                    </div>
                    <div class="form-group row">
                        <x-form.input type="number" id="tel" name="tel" label="رقم التلفون" value="" />
                    </div>
                    <div class="form-group row">
                        <x-form.input type="date" id="created_date" name="created_date" label="تاريخ الإنشاء" value="" />
                    </div>
                    <div class="form-group row">
                        <x-form.input type="number" id="size" name="size" label="مساحة الصالة (م2)" value="" />
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
