@extends('layouts.master')
@section('content')
    @if (Session::get('success'))

        <div class="alert alert-success">
            <button data-dismiss="alert" class="close" type="button">×</button>
            <strong>Process Success.</strong> {{ Session::get('success')}}<br><a href="/section/list">View List</a><br>

        </div>
    @endif
    <div class="row">
        <div class="box col-md-12">
            <div class="box-inner">
                <div data-original-title="" class="box-header well">
                    <h2><i class="glyphicon glyphicon-home"></i> Section Create</h2>

                </div>
                <div class="box-content" id="smsRadioCheckBox">
                    <form role="form" action="/section/create" method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="form-group">
                            <label for="name">Name</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-info-sign blue"></i></span>
                                <input type="text" class="form-control" autofocus required name="name" placeholder="Section Name">
                            </div>
                        </div>
                        <!--<div class="form-group">
                            <label for="name">Value</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-info-sign blue"></i></span>
                                <input type="text" class="form-control" required name="code" placeholder="1,2,3 etc">
                            </div>
                        </div>-->
                        <div class="form-group">
                            <label for="name">Description</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-info-sign blue"></i></span>
                                <textarea type="text" class="form-control" required name="description" placeholder="Section Description"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Hindi/Tamil subject combine pass? <input type="checkbox"  name="combinePass" ></label>
                        </div>

                        <div class="clearfix"></div>
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="form-group">
                            <button class="btn btn-primary pull-right" type="submit"><i class="glyphicon glyphicon-plus"></i>Add</button>
                            <br>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop
