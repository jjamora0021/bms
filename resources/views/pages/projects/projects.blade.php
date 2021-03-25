@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ $card_header }}</div>
                {{-- List --}}
                <div class="card-body" id="projects-list-container">
                    @if (!empty($projects))
                        @foreach ($projects as $key => $val)
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h5 class="card-title text-uppercase text-muted mb-0">Performance</h5>
                                        <span class="h2 font-weight-bold mb-0">49,65%</span>
                                    </div>
                                    <div class="col-auto">
                                        <div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">
                                        <i class="ni ni-chart-bar-32"></i>
                                        </div>
                                    </div>
                                </div>
                                <p class="mt-3 mb-0 text-sm">
                                <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                                <span class="text-nowrap">Since last month</span>
                                </p>
                            </div>
                        @endforeach
                    @else
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <span class="alert-icon"><i class="ni ni-bell-55"></i></span>
                            <span class="alert-text"><strong>No Projects Yet</strong></span>
                        </div>
                        <div class="text-center">
                            <button class="btn btn-icon btn-success" type="button">
                                <span class="btn-inner--icon"><i class="ni ni-fat-add"></i></span>
                                <span class="btn-inner--text">Create New Project</span>
                            </button>
                        </div>
                    @endif
                </div>
                {{-- Create New --}}
                <div class="card-body" id="new-project-container">
                    <form method="POST" action="#">
                        @csrf
                        <h6 class="heading-small text-muted mb-4">Project information</h6>
                        <div class="pl-md-4">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-control-label">Project Name</label><small><i><span class="text-danger">*</span></i></small>
                                        <input type="text" name="project_name" class="form-control" value="{{ old('project_name') }}" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-control-label">Project Location</label><small><i><span class="text-danger">*</span></i></small>
                                        <input type="text" name="project_location" class="form-control" value="{{ old('project_location') }}" placeholder="">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-control-label">Number of Floors</label><small><i><span class="text-danger">*</span></i></small>
                                        <input type="number" name="num_of_floors" class="form-control" value="{{ old('num_of_floors') }}" min="0" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        @if (!empty($boq))
                                            <label class="form-control-label">Materials</label><small><i><span class="text-danger">*</span></i></small>
                                            <select name="materials" id="materials" class="select-picker form-control" data-title="Select Material">
                                                <option value="">Select Material</option>
                                                @foreach ($boq as $key => $val)
                                                    <option value="{{ $val->id }}">{{ $val->material . '|' . $val->diameter . ' ' . $val->unit_of_measurement}} </option>
                                                @endforeach
                                            </select>
                                        @else
                                            <label class="form-control-label text-danger">No Materials Listed Yet.</label>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('page-js')
    <script src="{{ asset('js/components/projects-custom.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('.select-picker').selectpicker();
        });
    </script>
@endsection
