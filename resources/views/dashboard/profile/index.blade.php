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
                        <x-form.label class="col-2" label="اسم المالك" />
                        <div class="col-10">
                            <x-form.input name="owner_name" :value="$profile->owner_name" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <x-form.label class="col-2" label="اسم الصالة" />
                        <div class="col-10">
                            <x-form.input name="hall_name" :value="$profile->hall_name" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <x-form.label class="col-2" label="العنوان" />
                        <div class="col-10">
                            <x-form.input name="address" :value="$profile->address" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <x-form.label class="col-2" label="رقم الجوال" />
                        <div class="col-4">
                            <x-form.input type="number" name="mobile" :value="$profile->address" />
                        </div>
                        <x-form.label class="col-2" label="رقم التلفون" />
                        <div class="col-4">
                            <x-form.input type="number" name="tel" :value="$profile->tel" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <x-form.label class="col-2" label="تاريخ الإنشاء" />
                        <div class="col-4">
                            <x-form.input type="date" name="created_date" :value="$profile->created_date" />
                        </div>
                        <x-form.label class="col-2" label="مساحة الصالة (م2)" />
                        <div class="col-4">
                            <x-form.input type="number" name="size" :value="$profile->size" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <x-form.label class="col-2" label="عدد الأفراد من" />
                        <div class="col-4">
                            <x-form.input type="number" name="max_count" :value="$profile->created_date" />
                        </div>
                        <x-form.label class="col-2" label="إلى" />
                        <div class="col-4">
                            <x-form.input type="number" name="max_count" :value="$profile->size" />
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
