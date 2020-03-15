@extends('layouts.header')
<div class="container-fluid">
    @include('partials.error');
    @include('partials.success');
</div>


<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <h3>CRUD OPERAION APPLICATION</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <a href="/add" class="btn btn-primary">ADD Players</a>
            <a href="/show" class="btn btn-success"> SHow Players</a>
        </div>
    </div>
</div>



