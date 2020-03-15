@extends('layouts.header')
<div class="container-fluid">
    @include('partials.error');
    @include('partials.success');
</div>
<div class="container-fluid">
    <div class="row">
        <h1>Add Players</h1>
    </div>
    <div class="row">
        <div class="col-md-5" style="background: lightblue;">
            <form action="/addplayer" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="">Player Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Enter Player Name">
                </div>
                <div class="form-group">
                    <label for="">Age</label>
                    <input type="text" class="form-control" name="age" placeholder="Enter Player Age">
                </div>
                <div class="form-group">
                    <label for="">Player Value</label>
                    <input type="text" class="form-control"  name="value" placeholder="Enter Value Of the Player">
                </div>
                <button type="submit" class="btn btn-success">Submit</button>

            </form>
        </div>
        
    </div>
    <div class="row">
        <div class="col-md-6" style="margin-top: 12px;">
            <a href="/show" class="btn btn-info">show page</a>

        </div>
    </div>
    
</div>
