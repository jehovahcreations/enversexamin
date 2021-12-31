@extends('layouts.blade', ['class' => 'dashboard'])

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                    <div class="col-6">Blog</div>
                    <div class="col-6" style="text-align:right">
                        <a href="/addblog" style="color: #3c8dbc">Add Blog +</a>
                    </div>
                </div></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
<div class="row">
    <div class="col">


                    <div class="container mt-5">
                        <table class="table table-bordered yajra-datatable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{  ('https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js')}}"></script>
<script src="{{ ('https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js') }}"></script>
<script src="{{ ('https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ ('https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js') }}"></script>
<script src="{{ ('https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js') }}"></script>

<script type="text/javascript">
  $(function () {

    var table = $('.yajra-datatable').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('emp.listing') }}",
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'name', name: 'name'},
            {data: 'created_at', name: 'created_at'},
            {
                data: 'action',
                name: 'action',
                orderable: true,
                searchable: true
            },
        ]
    });

  });
</script>
@endsection
