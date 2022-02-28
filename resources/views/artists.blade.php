@extends('layouts.backend')
@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
@endsection
@section('content')
    {{-- Registered Artists --}}
    <div class="col-sm-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title text-dark">All Registered Artists</h4>
                <div class="col-lg-10 offset-1 table-responsive">
                    <table class="table table-striped table-hover display nowrap" id="ArtistTable">
                        <thead>
                            <tr>
                                <th>Date Registered</th>
                                <th> Name </th>
                                {{-- <th>Email</th> --}}
                                <th>Phone</th>
                                <th> Status </th>
                                <th>Level</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($artists as $artist)
                                <tr>
                                    <td class="text-center">{{ $artist->created_at }}</td>
                                    <td>{{ $artist->name }}</td>
                                    {{-- <td class="text-center">{{ $artist->email }}</td> --}}
                                    <td class="text-center">{{ $artist->phone }}</td>
                                    <td class="text-center">
                                        {{ $artist->is_approved == '1' ? 'Approved' : 'Not Approved' }}
                                    </td>
                                    <td>{{ strtoupper(\DB::table('phases')->where('id', $artist->phase_id)->value('title')) }}
                                    </td>
                                    <td class="text-center"><a href="{{ route('profile', [$artist->id]) }}"
                                            class="btn btn-sm btn-dark"> View </a> &nbsp;
                                        @if (Auth::user()->role_id == 1)
                                            <a class="btn btn-sm btn-warning" href="{{ route('approve', [$artist->id]) }}"
                                                onclick="event.preventDefault();
                                                                            document.getElementById('approve').submit();">
                                                Approve
                                            </a>

                                            <form id="approve" action="{{ route('approve', [$artist->id]) }}"
                                                method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        @endif
                                        @if (Auth::user()->role_id == 1)
                                            <a class="btn btn-sm btn-danger" data-toggle="modal"
                                                data-target="#exampleModal{{ $artist->id }}" href="#">
                                                Disapprove
                                            </a>
                                            <div class="modal fade" id="exampleModal{{ $artist->id }}" tabindex="-1"
                                                role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">REJECT ARTIST
                                                                :
                                                                {{ strtoupper($artist->name) }}</h5>
                                                            <button type="button" class="close"
                                                                data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <form action="{{ route('disapprove', [$artist->id]) }}"
                                                            method="post">
                                                            @csrf
                                                            <div class="modal-body">
                                                                <div class="form-group">
                                                                    <label for="reason">Select Reason</label>
                                                                    <select name="reason_id" class="form-control"
                                                                        style="border:solid 1px;">
                                                                        <option selected disabled>Select Reason</option>
                                                                        @foreach ($reasons as $reason)
                                                                            <option value="{{ $reason->id }}">
                                                                                {{ strtoupper($reason->reason) }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="reason">Reason Description</label>
                                                                    <textarea class="form-control" name="reason" id=""
                                                                        cols="30" rows="10"></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">Close</button>
                                                                <button type="submit" class="btn btn-primary">Save
                                                                    changes</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                        {{-- &nbsp; @if (Auth::user()->role_id == 1)
                                            <a class="btn btn-sm btn-danger" href="{{ route('delete', [$artist->id]) }}"
                                                onclick="event.preventDefault();
                                                                      document.getElementById('delete').submit();">
                                                Delete
                                            </a>

                                            <form id="delete" action="{{ route('delete', [$artist->id]) }}" method="POST"
                                                class="d-none">
                                                @csrf
                                                @method('delete')
                                            </form>
                                        @endif --}}
                                </tr>
                            @empty
                                <tr>
                                    <td class="text-center" colspan="6">No Registered Artists</td>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/jquery.dataTables.min.js"
        integrity="sha512-BkpSL20WETFylMrcirBahHfSnY++H2O1W+UnEEO4yNIl+jI2+zowyoGJpbtk6bx97fBXf++WJHSSK2MV4ghPcg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.colVis.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#ArtistTable').DataTable({
                dom: 'lBfrtip',
                buttons: [
                    'copy',
                    {
                        extend: 'excelHtml5',
                        title: 'Artist_list',
                        exportOptions: {
                            exportOptions: {
                                columns: [0, 1, 2, 3, 4, ':visible']
                            }
                        }
                    },
                    {
                        extend: 'pdfHtml5',
                        title: 'Artist_list',
                        exportOptions: {
                            columns: [0, 1, 2, 3, 4]
                        }
                    },
                    'colvis'
                ]
            });
        });
    </script>
@endsection
