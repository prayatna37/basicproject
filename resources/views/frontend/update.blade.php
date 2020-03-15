@extends('layouts.header')
<div class="container-fluid">
    @include('partials.error')
    @include('partials.success')
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <h2> Update Profile For {{$player->name}}</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6" style="background: lightblue;">
            <form action="{{route('player.update',[$player->id])}}" method="post">
                {{csrf_field()}}
                {{method_field('PUT')}}
                <div class="form-group">
                    <label for="">Enter Age</label>
                    <input type="text" name="age" class="form-control" placeholder="Enter Updated Age" value="{{$player->age}}">
                </div>
                <div class="form-group">
                    <label for="">Enter Price</label>
                    <input type="text" name="value" class="form-control" placeholder="Enter Updated Price" value="{{$player->value}}">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>

    </div>
    <div class="row">
        <div class="col-md-6" style="margin-top: 12px;">
            <a href="/show" class="btn btn-info">show page</a>
            <a href="/add" class="btn btn-info">Add Player</a>
        </div>
    </div>

</div>
