    @extends('dashboard.layouts.master')

    @section('title', 'صالات الأفراح')
    @section('breadcrumb')
        @parent
        <li class="breadcrumb-item active">عرض جميع الصالات</li>
    @endsection
    @push('style')
    <link href="{{ asset('assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
    @endpush
    @section('content')
    <x-flash-message />

    <div class="card card-custom gutter-b">
        <div class="card-header flex-wrap py-3">
            <div class="card-title">
                <h3 class="card-label">عرض القاعات
            </div>
            <div class="card-toolbar">
                <!--begin::Button-->
                <a href="{{ route('dashboard.hall.create') }}" class="btn btn-primary font-weight-bolder">
                <span class="svg-icon svg-icon-md">
                    <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg-->
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <rect x="0" y="0" width="24" height="24" />
                            <circle fill="#000000" cx="9" cy="15" r="6" />
                            <path d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z" fill="#000000" opacity="0.3" />
                        </g>
                    </svg>
                    <!--end::Svg Icon-->
                </span>إضافة قاعة</a>
                <!--end::Button-->
            </div>
        </div>
        <div class="card-body">
            <!--begin: Datatable-->
            <table class="table table-bordered table-checkable" id="halls_tb">
                <thead>
                    <tr>
                        <th>اسم المالك</th>
                        <th>اسم القاعة</th>
                        <th>العنوان</th>
                        <th>المساحة (م2)</th>
                        <th>عدد الأفراد(شخص)</th>
                        <th>تاريخ الإنشاء</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($halls as $hall)
                    <tr>
                        <td>{{$hall->owner_name}}</td>
                        <td>{{$hall->hall_name}}</td>
                        <td>{{$hall->address}}</td>
                        <td>{{$hall->size}}</td>
                        <td>{{$hall->min_count }} - {{ $hall->max_count}}</td>
                        <td>{{$hall->created_date}}</td>
                        <td>
                            <a href="{{ route('dashboard.hall.edit', [$hall->id]) }}" class="btn btn-sm btn-clean btn-icon mr-2" title="Edit details">
	                            <i class="icon-x far fa-edit"></i>
	                        </a>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
            <!--end: Datatable-->
        </div>
    </div>
    <!--end::Card-->
    @endsection

    @push('js')
    <script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
    <script>
    $(document).ready(function(){
        $('#halls_tb').DataTable();
    });
    </script>
    @endpush
