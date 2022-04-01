@extends('layouts.app')

@section('content')
    <div class="card">
        <h1>Edit Supplier</h1>

        <x-form action="{{ route('app.suppliers.update', $supplier->id) }}" method="patch">
            <x-form.input name="name">{{ $supplier->name }}</x-form.input>
            <x-form.button>Update</x-form.button>
        </x-form>
    </div>
@endsection
