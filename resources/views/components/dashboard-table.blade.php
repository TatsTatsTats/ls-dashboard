<div class="col-md-{{ $size ?? '6' }} mt-5">
    <!--begin::Latest Order Widget-->
    <div class="card text-center">
        <div class="card-header">
            <h4>{{ $title ?? '' }}</h4>

            {{-- <div class="card-tools">
                <button type="button" class="btn btn-tool" data-lte-toggle="card-collapse" aria-label="Collapse card">
                    <i data-lte-icon="expand" class="bi bi-plus-lg"></i>
                    <i data-lte-icon="collapse" class="bi bi-dash-lg"></i>
                </button>
                <button type="button" class="btn btn-tool" data-lte-toggle="card-remove" aria-label="Remove card">
                    <i class="bi bi-x-lg"></i>
                </button>
            </div> --}}
        </div>
        <!-- /.card-header -->
        <div class="card-body p-0">
            <div class="card-body table-responsive p-2">
                <table class="table text-nowrap hover display compact" id="{{ $id ?? 'defaultTables' }}">
                    <thead>
                        <tr>
                            @foreach ($headers as $key)
                                <th>{{ Str::title(str_replace('_', ' ', $key)) }}</th>
                            @endforeach
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($items as $item)
                            <tr>
                                @foreach ($headers as $key)
                                    @if (isset($item[$key]))
                                        @if (is_array($item[$key]))
                                            <td>{{ json_encode($item[$key], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) }}
                                            </td>
                                        @else
                                            <td>{{ $item[$key] }}</td>
                                        @endif
                                    @else
                                        <td>None</td>
                                    @endif
                                @endforeach

                            </tr>
                        @endforeach

                    </tbody>
                    <tfoot>
                        <tr>
                            @foreach ($headers as $key)
                                <th></th>
                            @endforeach
                        </tr>
                    </tfoot>
                </table>

            </div>
            {{-- PAGINATION  --}}
            <div class="m-1">
                {{-- {{ $items->links('pagination::bootstrap-5') }} --}}
            </div>
            <!-- /.table-responsive -->
        </div>
        <!-- /.card-body -->
        {{-- <div class="card-footer clearfix">
                <a href="javascript:void(0)" class="btn btn-sm btn-primary float-start">
                    Place New Order
                </a>
                <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-end">
                    View All Orders
                </a>
            </div> --}}
        <!-- /.card-footer -->
    </div>
    <!-- /.card -->
</div>

<script>
    const table_sparkline_1_data = [25, 66, 41, 89, 63, 25, 44, 12, 36, 9, 54];
    const table_sparkline_2_data = [12, 56, 21, 39, 73, 45, 64, 52, 36, 59, 44];
    const table_sparkline_3_data = [15, 46, 21, 59, 33, 15, 34, 42, 56, 19, 64];
    const table_sparkline_4_data = [30, 56, 31, 69, 43, 35, 24, 32, 46, 29, 64];
    const table_sparkline_5_data = [20, 76, 51, 79, 53, 35, 54, 22, 36, 49, 64];
    const table_sparkline_6_data = [5, 36, 11, 69, 23, 15, 14, 42, 26, 19, 44];
    const table_sparkline_7_data = [12, 56, 21, 39, 73, 45, 64, 52, 36, 59, 74];

    createSparklineChart('#table-sparkline-1', table_sparkline_1_data);
    createSparklineChart('#table-sparkline-2', table_sparkline_2_data);
    createSparklineChart('#table-sparkline-3', table_sparkline_3_data);
    createSparklineChart('#table-sparkline-4', table_sparkline_4_data);
    createSparklineChart('#table-sparkline-5', table_sparkline_5_data);
    createSparklineChart('#table-sparkline-6', table_sparkline_6_data);
    createSparklineChart('#table-sparkline-7', table_sparkline_7_data);
</script>
