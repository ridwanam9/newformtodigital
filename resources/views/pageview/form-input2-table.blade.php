@extends('layouts.master')
@section('content')
    {{-- message --}}
    {!! Toastr::message() !!}
    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="page-title">Laporan Form</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Laporan Form Asesment Pasien Kondisi Terminal</li>
                        </ul>
                    </div>
                </div>
            </div>

            <form action="{{ route('search2') }}" method="GET">
            <div class="row filter-row">
                <div class="col-sm-6 col-md-3">
                    <div class="form-group form-focus select-focus">
                        <input class="form-control floating" type="text" name="query" placeholder="Cari Nama">
                        <label class="focus-label">Nama / NoRM</label>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <button type="submit" class="btn btn-success btn-block">Cari</button>
                </div>
            </div>
        </form>

        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-striped custom-table mb-0 datatable">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>NoRM</th>
                                <th>Nama</th>
                                <th>Tanggal Lahir</th>
                                <th>Alamat</th>
                                <th class="text-right">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($dataFormInput2 as $key=>$items )
                            <tr>
                                <td class="id">{{ $items->id }}</td>
                                <td class="norm">{{ $items->norm }}</td>
                                <td><strong>{{ $items->nama }}</strong></td>
                                <td>{{ $items->tanggallahir }}</td>
                                <td>{{ $items->alamat }}</td>


                                <td class="text-right">
                                    <!-- <td class="text-right"> -->
                                        <div class="dropdown dropdown-action">
                                        <a href="{{ route('export2-pdf', $items->id) }}" class="btn btn-warning">Export PDF</a>
                                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                <i class="material-icons">more_vert</i>
                                                </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="{{ url('form/input2/edit/'.$items->id) }}">
                                                    <i class="fa fa-pencil m-r-5"></i>Edit
                                                </a>
                                                <a class="dropdown-item delete" href="#" data-toggle="modal" data-target="#delete_form_record">
                                                    <i class="fa fa-trash-o m-r-5"></i>Delete
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                </td>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Delete Record From Modal -->
    <div class="modal custom-modal fade" id="delete_form_record" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="form-header">
                        <h3>Delete Form Record</h3>
                        <p>Are you sure want to delete?</p>
                    </div>
                    <div class="modal-btn delete-action">
                        <form action="{{ route('form/input2/delete') }}" method="POST">
                            @csrf
                            <input type="hidden" name="id" class="e_id" value="">
                            <div class="row">
                                <div class="col-6">
                                    <button type="submit" class="btn btn-primary continue-btn submit-btn">Delete</button>
                                </div>
                                <div class="col-6">
                                    <a href="javascript:void(0);" data-dismiss="modal" class="btn btn-primary cancel-btn">Cancel</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete Record From Modal -->

@section('script')
{{-- delete js --}}
<script>
    $(document).on('click','.delete',function()
    {
        var _this = $(this).parents('tr');
        $('.e_id').val(_this.find('.id').text());
    });
</script>
@endsection
@endsection
