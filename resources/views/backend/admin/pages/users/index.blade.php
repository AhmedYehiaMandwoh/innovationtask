@extends('backend.layouts.index')

@section('content')
    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-start mb-0">{{ __('users') }}</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">{{ __('dashboard') }}</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">{{ __('users') }}</a>
                                    </li>
                                    <li class="breadcrumb-item active">{{ __('List') }}
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none">
                    <div class="mb-1 breadcrumb-right">
                        <a href="{{ route('users.create', app()->getLocale()) }}"
                            class="btn-icon btn btn-primary btn-round">{{ __('add_new_user') }}</a>
                    </div>
                </div>
            </div>
            <div class="content-header row">
            </div>
            <div class="content-body">
                <div class="card p-2">
                    <div class="table-responsive">
                        <table id="users" class="table table-striped dt-responsive" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>{{ __('name') }}</th>
                                    <th>{{ __('email') }}</th>
                                    <th>{{ __('status') }}</th>
                                    <th>{{ __('options') }}</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <!-- END: Content-->
@endsection



@section('scripts')
    <script></script>
    <script type="text/javascript">
        var table = $('#users').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('users.datatables', app()->getLocale()) }}",
            columns: [{
                    data: 'name',
                    name: 'name',
                },
                {
                    data: 'email',
                    name: 'email'
                },
                {
                    data: 'status',
                    name: 'status'
                },

                {
                    data: 'options',
                    searchable: false,
                    orderable: false
                }

            ],
            language: {
                processing: '<div id="overlay"><i class="fa fa-spinner fa-spin fa-3x fa-fw"></i></div>',
                url: '{{ LanguageDatatable() }}'
            }

        });

        function ActiveDeactive(id, status) {
            $.ajax({
                type: "get",
                dataType: 'json',
                url: `{{ route('users.status', app()->getLocale()) }}?id=${id}&status=${status}`,
                success: function(data) {
                    console.log(data);

                },
                error: function(err) {
                    console.log(err);
                }
            });
        }

        function deleteUser (id) {
            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: 'btn btn-success',
                    cancelButton: 'btn btn-danger'
                },
                buttonsStyling: false
            })

            swalWithBootstrapButtons.fire({
                title: '{{__('are_you_sure')}}',
                text: "{{__('no_revert')}}",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: '{{__('yes')}}',
                cancelButtonText: '{{__('no')}}',
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type: "get",
                        dataType: 'json',
                        url: `{{ route('users.delete', app()->getLocale()) }}?id=${id}`,
                        success: function(data) {
                          table.draw();

                        },
                        error: function(err) {
                            console.log(err);
                        }
                    });
                    swalWithBootstrapButtons.fire(
                        '{{__('Deleted')}}',
                        '{{__('file_deleted')}}',
                        'success'
                    )
                } else if (
                    /* Read more about handling dismissals below */
                    result.dismiss === Swal.DismissReason.cancel
                ) {
                    swalWithBootstrapButtons.fire(
                        '{{__('Cancelled')}}',
                        '{{__('safe')}}',
                        'error'
                    )
                }
            })

        }
    </script>
@endsection
