@extends('dashboard.layouts.app')

@section('content')

<div class="row layout-top-spacing">
    <div class="col-xl-12 col-lg-12 col-sm-12">
        @if(Session::has('success'))
            <div class="alert alert-light-success alert-dismissible fade show border-0 mb-4" role="alert">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-bs-dismiss="alert"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
                {{ Session::get('success') }}
            </div>
        @endif

        @if(Session::has('error'))
            <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4" role="alert">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-bs-dismiss="alert"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
                {{ Session::get('error') }}
            </div>
        @endif

        <div class="widget-content widget-content-area">
            <div id="zero-config_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
                <div class="table-responsive">
                    <table id="zero-config" class="table dt-table-hover dataTable no-footer" style="width: 100%;" role="grid" aria-describedby="zero-config_info">
                        <thead>
                            <tr role="row">
                                <th class="text-center sorting_asc" tabindex="0" aria-sort="ascending" style="min-width: 8px;">#</th>
                                <th class="text-center sorting" tabindex="0" style="min-width: 80px;">Name</th>
                                <th class="text-center dt-no-sorting" tabindex="0" style="min-width: 80px;">Cover</th>
                                <th class="text-center dt-no-sorting" tabindex="0" style="min-width: 50px;">Status</th>
                                <th class="text-center dt-no-sorting" tabindex="0" style="min-width: 50px;">Order</th>
                                <th class="text-center sorting" tabindex="0" style="min-width: 60px;">Created At</th>
                                <th class="text-center sorting" tabindex="0" style="min-width: 60px;">Last Update</th>
                                <th class="text-center no-content dt-no-sorting" tabindex="0" style="width: 58px;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            @foreach($pages as $page)
                                <tr role="row">
                                    <td class="text-center">{{ $loop->iteration }}</td>
                                    <td class="text-center">{{ $page->name }}</td>
                                    <td class="text-center">
                                        @if($page->cover)
                                            <img src="{{ asset('storage/'.$page->cover) }}" width="80" height="60" >
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        <span class="badge @if($page->status == 1) badge-light-success @else badge-light-danger @endif">{{ $page->statusName }}</span>
                                    </td>
                                    <td class="text-center">{{ $page->order }}</td>
                                    <td class="text-center">{{ $page->created_at->format('Y-m-d H:i a') }}</td>
                                    <td class="text-center">{{ $page->updated_at->format('Y-m-d H:i a') }}</td>
                                    <td class="text-center">
                                        <ul class="table-controls action-btns">
                                            <li>
                                                <a href="{{ route('pages.edit', ['page' => $page->id]) }}" title="update" class="action-btn btn-update bs-tooltip mr-2 _effect--ripple waves-effect waves-light">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                                                </a>
                                            </li>
                                        </ul>
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

@endsection

@section('js')

    <script>
        c3 = $('#zero-config').DataTable({
            "dom": "<'dt--top-section'<'row'<'col-12 col-sm-6 d-flex justify-content-sm-start justify-content-center tableTitle'><'col-12 col-sm-4 d-flex justify-content-sm-end justify-content-center mt-sm-0 mt-3'f><'col-12 col-sm-2 d-flex justify-content-sm-end justify-content-center mt-sm-0 mt-3 table_btns'>>>" +
                "<'table-responsive'tr>" +
                "<'dt--bottom-section d-sm-flex justify-content-sm-between text-center'<'dt--pages-count  mb-sm-0 mb-3'i><'dt--pagination'p>>",
            "oLanguage": {
                "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
                "sInfo": "page number _PAGE_ from _PAGES_ pages",
                "sInfoEmpty": "No pages to show",
                "sInfoFiltered": "",
                "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                "sSearchPlaceholder": "search...",
                //"sLengthMenu": "Results :  _MENU_",
                "sZeroRecords": "No Data Found",
            },
            "stripeClasses": [],
            "lengthMenu": [5, 10, 20, 50],
            "pageLength": 30
        });

        c3.on( 'draw', function () {
            $('#pagesCount').text(c3.rows( {search:'applied'} ).count());
        } );


        $('.tableTitle').html("<span style='padding:6px;font-size:18px;'> Pages (<span id='pagesCount'>"+c3.rows( {search:'applied'} ).count()+"</span>) </span>");
    </script>

@endsection