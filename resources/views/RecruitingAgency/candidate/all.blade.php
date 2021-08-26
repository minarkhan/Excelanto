@extends("RecruitingAgency/master")

@section('title', 'All Candidates')
@section('DataTableCss')
    <!-- DataTables -->
    <link href="{{ asset('assets/plugins/datatables/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/plugins/datatables/buttons.bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/plugins/datatables/fixedHeader.bootstrap.min.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('assets/plugins/datatables/responsive.bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/plugins/datatables/dataTables.bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/plugins/datatables/scroller.bootstrap.min.css') }}" rel="stylesheet" type="text/css" />

@endsection

@section('main-content')
    <!-- Start content -->
    <div class="content">
        <div class="container">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-header-title">
                        <h4 class="pull-left page-title">All Candidates</h4>
                        <ol class="breadcrumb pull-right">
                            <li><a href="#">Excelanto</a></li>
                            <li><a href="#">Candidates
                                </a></li>
                            <li class="active">All Candidates</li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">Candidates List</h3>
                        </div>
                        <div class="panel-body">

                            <table id="datatable-buttons" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>SL No</th>
                                        <th>Candidate Name</th>
                                        <th>Job Category</th>
                                        <th>Phone No</th>
                                        <th>Email</th>
                                        <th>Photo</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>


                                <tbody>
                                    @foreach ($candidates as $candidate)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $candidate->candidate_name }}</td>
                                            <td>{{ $candidate->job_category->category_name }}</td>
                                            <td>{{ $candidate->phone_number }}</td>
                                            <td>{{ $candidate->candidate_email }}</td>
                                            <td>
                                                @if ($candidate->candidate_picture)
                                                    <img height="70px;" src="{{ asset($candidate->candidate_picture) }}"
                                                        width="70px;" class="rounded-circle" />
                                                @else
                                                    <img class="rounded-circle" height="70px;" src="{{asset('assets/images/users/avatar-1.jpg')}}" width="70px;" />
                                                @endif
                                            </td>
                                            <td>
                                                @if ($candidate->status == 'Active')
                                                    <span class=" badge badge-info">Active</span>
                                                @elseif ($candidate->status == "Reviewed")
                                                    <span class="badge badge-warning">Reviewed</span>
                                                @elseif ($candidate->status == "Forwarded")
                                                    <span class="badge badge-warning">Forwarded</span>
                                                @elseif ($candidate->status == "Interview")
                                                    <span class="badge badge-warning">Interview</span>
                                                @elseif ($candidate->status == "Inactive")
                                                    <span class="badge badge-danger">Inactive</span>
                                                @elseif ($candidate->status == "Selected")
                                                    <span class="badge badge-success">Selected</span>
                                                @else
                                                <span class="badge badge-info">{{ $candidate->status }}</span>
                                                @endif
                                            </td>
                                            <td>
                                                <a class="btn btn-info btn-sm" href="{{ route('RecruitingAgency.candidate.show',$candidate->id ) }}">
                                                    <i class="mdi mdi-eye"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>SL No</th>
                                        <th>Candidate Name</th>
                                        <th>Job Category</th>
                                        <th>Phone No</th>
                                        <th>Email</th>
                                        <th>Photo</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div> <!-- End Row -->
        </div> <!-- container -->
    </div>
    <!--End content -->
@endsection

@section('DataTableJs')
   <!-- Datatables-->
    <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/dataTables.bootstrap.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/buttons.bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/jszip.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/pdfmake.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/vfs_fonts.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/buttons.print.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/dataTables.fixedHeader.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/dataTables.keyTable.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/responsive.bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/dataTables.scroller.min.js') }}"></script>
    <!-- Datatable init js -->
    <script src="{{ asset('assets/pages/datatables.init.js') }}"></script>
@endsection
