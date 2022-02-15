@extends('layouts.backend')
@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css">
@endsection
@section('content')

{{-- Registered Artists --}}
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">All Judges</h4>
        <div class="col-lg-10 offset-1 table-responsive">
          <table class="table table-striped  table-bordered table-hover" id="JudgesTable">
            <thead>
              <tr>
                <th> Name </th>
                <th>Email</th>
                <th>Phone</th>
                <th>Date Registered</th>
                <th class="text-center">Actions</th>
              </tr>
            </thead>
            <tbody>
                @forelse ($judges as $judge)
                    <tr>
                        <td>{{ $judge->name}}</td>
                        <td class="text-center">{{ $judge->email}}</td>
                        <td class="text-center">{{ $judge->phone}}</td>
                        <td class="text-center">{{ $judge->created_at}}</td>
                        <td class="text-center"><a href="{{route('profile',[$judge->id])}}" class="btn btn-sm btn-primary"> View </a> &nbsp; <a href="" class="btn btn-sm btn-danger"> Delete </a></td>
                    </tr>
                @empty
                    <tr>
                        <td class="text-center" colspan="6">No Registered Judges</td>
                    </tr>
                @endforelse
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
{{-- End of registered Users --}}

@endsection
@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/jquery.dataTables.min.js" integrity="sha512-BkpSL20WETFylMrcirBahHfSnY++H2O1W+UnEEO4yNIl+jI2+zowyoGJpbtk6bx97fBXf++WJHSSK2MV4ghPcg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    {{-- <script>
      $(document).ready(function (){
        $('#ArtistTable').DataTable({
          "processing":true,
          "serverSide":true,
          "ajax": "{{route('api.artists.index')}}",
          "columns":[
            { "data": "name"},
            { "data": "email"},
            { "data": "phone"},
            { "data": "is_approved"},
            { "data": "created_at"},
          ]
        });
      });
    </script> --}}
    <script>
        $(document).ready(function() {
            $('#JudgesTable').DataTable();
        } );
    </script>
@endsection