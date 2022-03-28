@extends('dashboard.layouts.master')

@section('title', 'إضافة قاعة')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">إضافة خدمة لقاعة</li>
@endsection
@section('content')
    <div class="card card-custom">
        <!--begin::Form-->
        <form method="post" action="{{ route('dashboard.HallService.store') }}">
            @csrf
            <div class="card-body">
                <div class="form-group row">
                    <x-form.label class="col-2" label="القاعة" />
                    <div class="col-lg-4 col-md-9 col-sm-12">
                        <select class="form-control select2 @error('hall_id') is-invalid @enderror" id="hall_id" name="hall_id">
                            <option value="">اختر القاعة</option>
                            @foreach ($halls as $hall)
                            <option value="{{$hall->id}}" @selected(old('hall_id') == $hall->id)>{{$hall->hall_name}}</option>
                            @endforeach
                        </select>
                        @error('hall_id')
                            <p class="invalid-feedback">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <x-form.label class="col-2" label="الخدمة" />
                    <div class="col-lg-4 col-md-9 col-sm-12">
                        <select class="form-control select2 @error('service_id') is-invalid @enderror" id="service_id" name="service_id">
                            <option value="">اختر الخدمة</option>
                            @foreach ($services as $service)
                            <option value="{{$service->id}}" @selected(old('service_id') == $service->id)>{{$service->name}}</option>
                            @endforeach
                        </select>
                        @error('service_id')
                            <p class="invalid-feedback">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <x-form.label class="col-2" label="السعر(بالشيكل)" />
                    <div class="col-4">
                        <x-form.input name="price" value="{{old('price',$service->price)}}" />
                    </div>
                </div>
                <div class="form-group row">
                    <x-form.label class="col-2" label="ملاحظات" />
                    <div class="col-10">
                        <x-form.input name="notes" value="{{old('notes',$service->notes)}}" />
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
@push('js')
    <script>
    $(document).ready(function(){
        $('.select2').select2({
            placeholder: 'اختر',
        });
    });
    </script>
    @endpush

