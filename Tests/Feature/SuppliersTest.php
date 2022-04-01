<?php

use Modules\Suppliers\Models\Supplier;

uses(Tests\TestCase::class);

test('can see supplier list', function() {
    $this->authenticate();
   $this->get(route('app.suppliers.index'))->assertOk();
});

test('can see supplier create page', function() {
    $this->authenticate();
   $this->get(route('app.suppliers.create'))->assertOk();
});

test('can create supplier', function() {
    $this->authenticate();
   $this->post(route('app.suppliers.store', [
       'name' => 'Joe',
       'email' => 'joe@joe.com'
   ]))->assertRedirect(route('app.suppliers.index'));

   $this->assertDatabaseCount('suppliers', 1);
});

test('can see supplier edit page', function() {
    $this->authenticate();
    $supplier = Supplier::factory()->create();
    $this->get(route('app.suppliers.edit', $supplier->id))->assertOk();
});

test('can update supplier', function() {
    $this->authenticate();
    $supplier = Supplier::factory()->create();
    $this->patch(route('app.suppliers.update', $supplier->id), [
        'name' => 'Joe Smith',
       'email' => 'joe@joe.com'
    ])->assertRedirect(route('app.suppliers.index'));

    $this->assertDatabaseHas('suppliers', ['name' => 'Joe Smith']);
});

test('can delete supplier', function() {
    $this->authenticate();
    $supplier = Supplier::factory()->create();
    $this->delete(route('app.suppliers.delete', $supplier->id))->assertRedirect(route('app.suppliers.index'));

    $this->assertDatabaseCount('suppliers', 0);
});