@extends('admin.layout._master')
@section('content')

    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white mr-2">
                    <i class="mdi mdi-home"></i>
                </span> Dashboard </h3>
            <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">
                        <span></span>Overview <i
                            class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="row">
            {{--  <div class="col-md-4 stretch-card grid-margin">
                <div class="card bg-gradient-info card-img-holder text-white">
                    <div class="card-body">
                        <img src="/admin/assets/images/dashboard/circle.svg" class="card-img-absolute"
                            alt="circle-image" />
                        <h4 class="font-weight-normal mb-3">All Messages <i
                                class="mdi mdi-bookmark-outline mdi-24px float-right"></i>
                        </h4>
                        <h2 class="mb-5">{{ $messages->count() }}</h2>
                        <h6 class="card-text">Increased by 50%</h6>
                    </div>
                </div>
            </div>
            <div class="col-md-4 stretch-card grid-margin">
                <div class="card bg-gradient-primary card-img-holder text-white">
                    <div class="card-body">
                        <img src="/admin/assets/images/dashboard/circle.svg" class="card-img-absolute"
                            alt="circle-image" />
                        <h4 class="font-weight-normal mb-3">Unread Messages <i
                                class="mdi mdi-bookmark-outline mdi-24px float-right"></i>
                        </h4>
                        <h2 class="mb-5">{{ $unread_messages->count() }}</h2>
                        <h6 class="card-text">check you unread messages</h6>
                    </div>
                </div>
            </div>  --}}
            <div class="col-md-4 stretch-card grid-margin">
                <div class="card bg-gradient-success card-img-holder text-white">
                    <div class="card-body">
                        <img src="/admin/assets/images/dashboard/circle.svg" class="card-img-absolute"
                            alt="circle-image" />
                        <h4 class="font-weight-normal mb-3">Admin<i class="mdi mdi-diamond mdi-24px float-right"></i>
                        </h4>
                        <h2 class="mb-5">{{$admins->count()}}</h2>
                        <h6 class="card-text">All registered admins</h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        @include('layouts._error')
                        @include('layouts._alert')
                        <h4 class="card-title">All Investors</h4>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th> Profile </th>
                                        <th> First Name </th>
                                        <th> Last Name </th>
                                        <th> Delete </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($admins as $admin)
                                    <tr>
                                        <td>
                                            <img src={{ "https://ui-avatars.com/api/?name=".$admin->lastname."+".$admin->firstname."&background=9a55ff&color=fff&size=50" }} alt="image" class="mr-2">
                                        </td>
                                        <td> {{ $admin->firstname }} </td>
                                        <td>
                                            {{ $admin->lastname }}
                                        </td>
                                        <td>
                                            <span class="page-title-icon bg-gradient-danger text-white mr-2">
                                                <i type="button" data-toggle="modal" data-target="#delete{{$admin->id}}" class="mdi mdi-delete-forever user-table-icon"></i>
                                            </span>

                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('admin.modals.add-admin')
    </div>
    <!-- content-wrapper ends -->
@endsection
