@extends('layouts.app')

@section('content')
<div class="container-fluid py-4">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ $card_header }}</div>

                <div class="card-body">
                    <table class="table table-striped" width="100%">
                        <thead>
                            <tr>
                                <th class="font-weight-bold">Material</th>
                                <th class="text-center font-weight-bold">Diameter</th>
                                <th class="text-center font-weight-bold">Unit</th>
                                <th class="text-center font-weight-bold">Quantity</th>
                                <th class="text-center font-weight-bold">Linear Meter</th>
                            </tr>
                        </thead>
                        @if(!empty($boq))
                            <tbody>
                                @foreach ($boq as $key => $val)
                                    <tr>
                                        <td>{{ $val->material }}</td>
                                        <td class="text-center">{{ $val->diameter }}</td>
                                        <td class="text-center">{{ $val->unit_of_measurement }}</td>
                                        <td class="text-center">{{ $val->quantity }}</td>
                                        <td class="text-center">{{ $val->linear_meter }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        @else
                            <tbody></tbody>
                        @endif
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('page-js')
    <script>
        dataTableFunctions.onLoad();
    </script>
@endsection
