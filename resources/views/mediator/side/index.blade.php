@extends('layout.main')
@section('content')
    <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
        @include('layout.breadcrumb', [
            'url' => [route('lawsuit.index') => 'Dosya Listele', null => 'Taraflar'],
        ])
        <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
            <div class="kt-portlet kt-portlet--mobile">
                <div class="kt-portlet__head kt-portlet__head--lg">
                    <div class="kt-portlet__head-label">
                        <span class="kt-portlet__head-icon">
                            <i class="kt-font-brand flaticon2-line-chart"></i>
                        </span>
                        <h3 class="kt-portlet__head-title">
                            Taraflar
                        </h3>
                    </div>
                    <div class="kt-portlet__head-toolbar">
                        <div class="kt-portlet__head-wrapper">
                            <div class="dropdown dropdown-inline">
                                <button type="button" class="btn btn-brand btn-icon-sm" data-toggle="modal"
                                    data-target="#newSideModal">
                                    <i class="flaticon2-plus"></i> Yeni
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="kt-portlet__body">
                    <!--begin: Search Form -->
                    <form class="kt-form kt-form--fit">
                        <div class="row kt-margin-b-20">
                            <div class="col-lg-4 kt-margin-b-10-tablet-and-mobile">
                                <label>Taraf</label>
                                <select class="form-control kt-input" data-col-index="0">
                                    <option value="">Hepsi</option>
                                    <option value="1">Başvuran</option>
                                    <option value="2">Diğer Taraf </option>
                                </select>
                            </div>
                            <div class="col-lg-4 kt-margin-b-10-tablet-and-mobile">
                                <label>Tip</label>
                                <select class="form-control kt-input" data-col-index="1">
                                    <option value="">Hepsi</option>
                                    <option value="1">Şahıs</option>
                                    <option value="2">Şirket</option>
                                    <option value="3">Avukat</option>
                                    <option value="4">Yetkili</option>
                                    <option value="5">Çalışan</option>
                                </select>
                            </div>
                            <div class="col-lg-4 kt-margin-t-10-tablet-and-mobile" style="margin-top: 24px;">
                                <button class="btn btn-primary btn-brand--icon" id="kt_search">
                                    <span>
                                        <i class="la la-search"></i>
                                        <span>Ara</span>
                                    </span>
                                </button>
                                <button class="btn btn-secondary btn-secondary--icon" id="kt_reset">
                                    <span>
                                        <i class="la la-close"></i>
                                        <span>Sıfırla</span>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!--begin: Datatable -->
                    <div class="kt-separator kt-separator--border-dashed kt-separator--space-sm"></div>
                    <table class="table table-striped- table-bordered table-hover table-checkable" id="dataTable">
                        <thead>
                            <tr>
                                <th>Taraf No</th>
                                <th>Ad Soyad</th>
                                <th>Taraf</th>
                                <th>Tip</th>
                                <th>İşlemler</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($lawsuit->sides as $side)
                                <tr>
                                    <td>{{ $side->id }}</td>
                                    <td>{{ $side->detail->name }}</td>
                                    <td>{{ $side->side_type->name }}</td>
                                    <td>{{ $side->side_applicant_type->name }}</td>
                                    <td><a href="javascript:;" data-id="" data-type=""
                                            class="btn btn-sm btn-clean btn-icon btn-icon-md edit-side-button"
                                            title="Evraklarım"><i class="la la-edit"></i></a>
                                        <a href="javascript:;" data-id="" data-side="" data-type=""
                                            class="btn btn-sm btn-clean btn-icon btn-icon-md delete-side-button"
                                            title="Sil"><i class="la la-remove"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <!--end: Datatable -->
                </div>
            </div>
        </div>
        <!-- end:: Content -->
    </div>
    @include('mediator.lawsuit.partials.side_modals')
    <div class="modal" tabindex="-1" role="dialog" id="newSideModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title font-weight-bold" style="color:#2C3E50;">Yeni Taraf</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="" id="formNewSide" data-lawsuitid="{{ $lawsuit->id }}">
                        <div class="form-group">
                            <select class="form-control" id="side_type_id" required>
                                <option value="">Seçiniz</option>
                                <option value="1" data-type="BAŞVURAN">BAŞVURAN</option>
                                <option value="2" data-type="KARŞI TARAF">KARŞI TARAF</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <select class="form-control" id="side_applicant_type_id" required>
                            </select>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Vazgeç</button>
                    <button type="button" class="btn new-side-button"
                        style="background: #149FFC; color: white;">Ekle</button>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        var applicant = 0;
        var opponent = 0;
    </script>
    <script src="{{ asset('js/side_management_functions.js') }}?v={{ time() }}"></script>
@endsection