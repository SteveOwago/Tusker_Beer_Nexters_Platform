@extends('layouts.backend')
@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css">
@endsection
@section('content')

    {{-- Profile --}}
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">{{ $user->name }}</h4>
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="row">
                                        <img src="/profile_pictures/{{ $user->profile }}" width="200" height="200"
                                            style="border-radius:50%;" class="mx-auto" alt="Profile Image Avatar">
                                    </div>
                                </div>
                                <div class="col-lg-9">
                                    <div class="card">
                                        <div class="card-header">
                                            {{ strtoupper($user->name) }}
                                        </div>
                                        <div class="card-body  text-dark">
                                            <ul class="list-group">
                                                {{-- <li class="list-group-item"><b>Email:</b> {{ $user->email }}</li> --}}
                                                <li class="list-group-item"><b>Phone:</b> {{ $user->phone }}</li>
                                                <li class="list-group-item"><b>Registered:</b>
                                                    {{ $user->created_at }} </li>

                                                <li class="list-group-item"><b>Region:</b> {{ \DB::table('regions')->where('id',$user->region_id)->value('name') }}</li>
                                                <li class="list-group-item"><b>Type:</b>
                                                    {{ $user->role_id == 1 ? 'Judge' : ($user->role_id == 2 ? 'Artist' : ($user->role_id == 3 ? 'E-Gamer' : ($user->role_id == 4 ? 'Admin' : 'Receptionist'))) }}
                                                </li>
                                                @if ($user->role_id != 1 && $user->role_id != 4 && $user->role_id != 5)
                                                    <li class="list-group-item"><b>Approval Level:</b> {{ \DB::table('phases')->where('id',$user->phase_id)->value('title') }}</li>

                                                    <li class="list-group-item"><b>Status:</b> <a
                                                            class="btn btn-sm {{ $user->is_approved == '1' ? 'text-success' : 'text-danger' }}">{{ $user->is_approved == '1' ? 'Approved' : 'Not Approved' }}</a>
                                                    </li>
                                                @endif
                                            </ul>
                                            @if (Auth::id() == $user->id || Auth::user()->role_id == 1 || Auth::user()->role_id == 4)
                                                <div class="text-center">
                                                    <a href="{{ route('edit_profile', [$user->id]) }}"
                                                        class="btn btn-lg btn-primary mt-3">Edit</a>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                @if ($user->is_approved == 0 && Auth::user()->role_id == 1 && $user->id != Auth::id()&& $user->role_id != 1)
                                    <div class="row text-center ml-5 mt-5">
                                        <a class="btn btn-lg btn-warning" href="{{ route('approve', [$user->id]) }}"
                                            onclick="event.preventDefault();
                                                                                document.getElementById('approve').submit();">
                                            Approve
                                        </a>

                                        <form id="approve" action="{{ route('approve', [$user->id]) }}" method="POST"
                                            class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                @endif

                                @if ($user->is_approved == 1 && Auth::user()->role_id == 1)
                                    @if ($user->id != Auth::id())
                                        <a class="btn btn-sm btn-danger" data-toggle="modal" data-target="#exampleModal"
                                            href="#">
                                            Disapprove
                                        </a>
                                    @endif

                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">REJECT ARTIST :
                                                        {{ strtoupper($user->name) }}</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form action="{{ route('disapprove', [$user->id]) }}" method="post">
                                                    @csrf
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <label for="reason">Select Reason</label>
                                                            <select name="reason_id">
                                                                <option selected disabled>Select Reason</option>
                                                                @foreach ($reasons as $reason)
                                                                    <option value="{{ $reason->id }}">
                                                                        {{ strtoupper($reason->reason) }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="reason">Reason Description</label>
                                                            <textarea class="form-control" name="reason" id="" cols="30"
                                                                rows="10"></textarea>
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

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- End of registered Users --}}

@endsection
