<div>
    {{-- The whole world belongs to you. --}}
    @livewireStyles
    <div class="card">
        <div class="card-body">
            <div class="row align-items-center m-l-0">
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-xs-12 mb-1">
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-xs-12">
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 text-right">
                    <button class="btn btn-success btn-sm btn-round mb-3" data-toggle="modal" data-target="#modal-report"><i class="feather icon-plus"></i> Add Target Group</button>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-5">
                    <div class="form-group col-sm-6">
                        <label class="form-label">Entries</label>
                        <select class="custom-select">
                            <option>10</option>
                            <option>20</option>
                            <option>30</option>
                            <option>40</option>
                            <option>50</option>
                            <option>60</option>
                            <option>70</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-2">
                </div>
                <div class="col-sm-5">
                    <div class="form-group col-sm-6 align-items-right">
                        <label class="form-label">Search</label>
                        <input type="text" class="form-control">
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table id="report-table" class="table table-bordered table-striped mb-0">
                    <thead>
                        <tr class="text-center">
                            <th>No.</th>
                            <th>Name</th>
                            <th>Contact</th>
                            <th>Email</th>
                            <th>District</th>
                            <th>Amount</th>
                            <th>Interest %</th>
                            <th>Period</th>
                            <th>Status</th>
                            <th>Option</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td hidden></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                                <a href="/admin/suspend-investor/" class="btn btn-success btn-sm"><i class="feather icon-edit"></i>&nbsp;Suspend </a>
                               
                                    <a href="/admin/activate-investor/" class="btn btn-info btn-sm"><i class="feather icon-check"></i>&nbsp; Activate</a>
                                
                                <a href="/admin/delete-investor/" class="btn btn-danger btn-sm"><i class="feather icon-trash-2"></i>&nbsp;Delete </a>
                                
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="row mt-2">
                </div>
            </div>
        </div>
    </div>
@livewireScripts
</div>
