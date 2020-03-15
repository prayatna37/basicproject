@extends('layouts.header')
<div class="container-fluid">
    @include('partials.error');
    @include('partials.success');
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <table class="table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Age</th>
                        <th>Value</th>
                        <th>Actions</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach($players as $player)
                        <tr>
                            <td>{{$player->id}}</td>
                            <td>{{$player->name}}</td>
                            <td>{{$player->age}}</td>
                            <td>{{$player->value}}</td>
                            <td>


                                <form action=" {{route('player.destroy',[$player->id]) }} " method="POST">
                                    <input type="hidden" name="_method" value="delete">
                                    <button class="btn btn-danger" type="submit">Delete</button>
                                    {{csrf_field()}}
                                    <a href="/show/{{$player->id}}/edit" class="btn btn-warning mr-2" style="margin-left: 10px;">Update</a>
                                </form>


                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6" style="margin-top: 12px;">
            <a href="/" class="btn btn-info">Home page</a>
            <a href="/add" class="btn btn-info">Add Player</a>
        </div>
    </div>
</div>


