@extends('layouts.master')

@section('content')

<div class="card">
    <div class="card-header">
        <h5>Zero Configuration</h5>
        <span>
            <form method="POST" action="{{ route('ckediter.index') }}">
            @csrf
                <button>
                    <img src="{{ asset('assets\images\signe.png') }}" width="15px" height="20px" >
                </button>
            </form>
        </span>
    </div>
    <div class="card-block">
        <div class="dt-responsive table-responsive">
            <div id="simpletable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                <!-- <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6">
                        <div class="dataTables_length" id="simpletable_length">
                            <label> Show 
                                <select name="simpletable_length" aria-controls="simpletable" class="form-control input-sm">
                                    <option value="10">10</option>
                                    <option value="25">25</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                </select>
                                 entries
                            </label>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6">
                        <div id="simpletable_filter" class="dataTables_filter">
                            <label> Search:
                                <input type="search" class="form-control input-sm" placeholder="" aria-controls="simpletable">
                            </label>
                        </div>
                    </div>
                </div> -->
                <div class="row">
                    <div class="col-xs-12 col-sm-12">
                        <table id="simpletable" class="table table-striped table-bordered nowrap dataTable" role="grid" aria-describedby="simpletable_info">
                            <thead>
                                <tr role="row">
                                    <th>No.</th>
                                    <th>ทะเบียน</th>
                                    <th>เอกสารที่</th>
                                    <th>วันที่</th>
                                    <th>เวลา</th>
                                    <th>เรื่อง</th>
                                    <th>สถานะ</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>xxxxx</td>
                                    <td>xxxxx</td>
                                    <td>dd/mm/yy</td>
                                    <td>hh:mm</td>
                                    <td>xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</td>
                                    <td><img src="{{ asset('assets\images\msg_success.png') }}"></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>xxxxx</td>
                                    <td>xxxxx</td>
                                    <td>dd/mm/yy</td>
                                    <td>hh:mm</td>
                                    <td>xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</td>
                                    <td><img src="{{ asset('assets\images\msg_success.png') }}"></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>xxxxx</td>
                                    <td>xxxxx</td>
                                    <td>dd/mm/yy</td>
                                    <td>hh:mm</td>
                                    <td>xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</td>
                                    <td><img src="{{ asset('assets\images\msg_success.png') }}"></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>xxxxx</td>
                                    <td>xxxxx</td>
                                    <td>dd/mm/yy</td>
                                    <td>hh:mm</td>
                                    <td>xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</td>
                                    <td><img src="{{ asset('assets\images\msg_success.png') }}"></td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>xxxxx</td>
                                    <td>xxxxx</td>
                                    <td>dd/mm/yy</td>
                                    <td>hh:mm</td>
                                    <td>xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</td>
                                    <td><img src="{{ asset('assets\images\msg_success.png') }}"></td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>xxxxx</td>
                                    <td>xxxxx</td>
                                    <td>dd/mm/yy</td>
                                    <td>hh:mm</td>
                                    <td>xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</td>
                                    <td><img src="{{ asset('assets\images\msg_success.png') }}"></td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>xxxxx</td>
                                    <td>xxxxx</td>
                                    <td>dd/mm/yy</td>
                                    <td>hh:mm</td>
                                    <td>xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</td>
                                    <td><img src="{{ asset('assets\images\msg_success.png') }}"></td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>xxxxx</td>
                                    <td>xxxxx</td>
                                    <td>dd/mm/yy</td>
                                    <td>hh:mm</td>
                                    <td>xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</td>
                                    <td><img src="{{ asset('assets\images\msg_success.png') }}"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-5">
                    <div class="dataTables_info" id="simpletable_info" role="status" aria-live="polite">
                        Show 1 to 10 of 88 entries
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-7" >
                    <div class="dataTables_paginate paging_simple_numbers" id="simpletable_paginate">
                        <ul class="pagination">
                            <li class="paginate_button page-item previous disabled" id="simpletable_previous">
                                <a href="#" aria-controls="simpletable" data-dt-idx="0" tabindex="0" class="page-link">Previous</a>
                            </li>
                            <li class="paginate_button page-item active">
                                <a href="#" aria-controls="simpletable" data-dt-idx="1" tabindex="0" class="page-link">1</a>
                            </li>
                            <li class="paginate_button page-item ">
                                <a href="#" aria-controls="simpletable" data-dt-idx="2" tabindex="0" class="page-link">2</a>
                            </li>
                            <li class="paginate_button page-item ">
                                <a href="#" aria-controls="simpletable" data-dt-idx="3" tabindex="0" class="page-link">3</a>
                            </li>
                            <li class="paginate_button page-item ">
                                <a href="#" aria-controls="simpletable" data-dt-idx="4" tabindex="0" class="page-link">4</a>
                            </li>
                            <li class="paginate_button page-item ">
                                <a href="#" aria-controls="simpletable" data-dt-idx="5" tabindex="0" class="page-link">5</a>
                            </li>
                            <li class="paginate_button page-item ">
                                <a href="#" aria-controls="simpletable" data-dt-idx="6" tabindex="0" class="page-link">6</a>
                            </li>
                            <li class="paginate_button page-item next" id="simpletable_next">
                                <a href="#" aria-controls="simpletable" data-dt-idx="7" tabindex="0" class="page-link">Next</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Zero config.table end -->
@endsection