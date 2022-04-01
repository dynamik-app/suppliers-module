@extends('layouts.app')

@section('content')
    <div class="card">
        <h1>Add Supplier</h1>

        <x-form action="{{ route('app.suppliers.create') }}">
            <x-form.input name="name" />
            <x-form.button>Submit</x-form.button>
        </x-form>
    </div>
@endsection
