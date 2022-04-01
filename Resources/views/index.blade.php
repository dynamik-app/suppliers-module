@extends('layouts.app')

@section('content')
    <div class="card">
    <h1>Suppliers</h1>

    <p><a href="{{ route('app.suppliers.create') }}">Add Supplier</a> </p>

    <table>
        <tr>
            <td>Name</td>
            <td>Action</td>
        </tr>
        @foreach($suppliers as $supplier)
            <tr>
                <td>{{ $supplier->name }}</td>
                <td>
                    <a href="{{ route('app.suppliers.edit', $supplier->id) }}">Edit</a>

                    <a href="#" onclick="event.preventDefault(); document.getElementById('delete-form').submit();">Delete</a>
                    <x-form id="delete-form" method="delete" action="{{ route('app.suppliers.delete', $supplier->id) }}" />
                </td>
            </tr>
        @endforeach
    </table>
    </div>
@endsection
