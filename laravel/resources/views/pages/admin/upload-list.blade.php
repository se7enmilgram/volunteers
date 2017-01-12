<?php

$statuses = ['pending', 'approved', 'denied'];

?>

@extends('app')

@section('content')
    <h1>Uploaded Files</h1>
    <hr>

    <input type="hidden" class="csrf-token" value="{{ csrf_token() }}">

    <table class="table table-hover">
        <thead>
            <tr>
                <th>User</th>
                <th>Name</th>
                <th>Description</th>
                <th>File</th>
                <th>Status</th>
            </tr>
        </thead>

        <tbody>
            @foreach($uploads as $upload)
                <tr class="upload" data-id="{{ $upload->id }}">
                    <td><a href="/user/{{ $upload->user->id }}">{{ $upload->user->name }}</a></td>
                    <td>{{ $upload->name }}</td>
                    <td>{{ $upload->description }}</td>
                    <td><a href='/files/user/{{ $upload->file }}'>{{ $upload->file }}</a></td>
                    <td>
                        <select class="upload-status" data-status="{{ $upload->status }}">
                            @foreach($statuses as $status)
                                @if($status == $upload->status)
                                    <option value="{{ $status }}" selected>{{ ucwords($status) }}</option>
                                @else
                                    <option value="{{ $status }}">{{ ucwords($status) }}</option>
                                @endif
                            @endforeach
                        </select>

                        <span class="buttons">
                            <a class="save-upload">
                                Save
                            </a>

                            <a class="cancel-upload">
                                Cancel
                            </a>
                        </span>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection