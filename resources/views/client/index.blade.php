@extends('layouts.master')
@section('content')
<div class="container">
    
    <div class="d-flex justify-content-between">
        <h1>Clients</h1>
        <div>
<a href="/client/create" class="btn btn-primary">Add Client</a>
        </div>
    </div>
<table class="table">
    <tr>
        <th>Name</th>
        <th>Email 1</th>
        <th>Email 2</th>
        <th>Mobile</th>
    </tr>
    @foreach ($client as $w)
    <tr>
        <td>{{ $w->client_name }}</td>
        <td>{{ $w->client_email_1 }}</td>
        <td>{{ $w->client_email_2 }}</td>
        <td>{{ $w->client_mobile }}</td>
        <td><a href="/client/{{ $w->id }}/edit" class="btn btn-secondary">Edit</a></td>
        <td><form action="/client/{{ $w->id }}" method="POST">
            @csrf
            @method('delete')
            <input type="submit" value="Delete" class="btn btn-danger">
        </form></td>
    </tr>    
    @endforeach   
</table>
</div>