<?php

use App\Models\File;
use App\Models\User;

it('has a name', function () {
    $file = File::factory()->create();

    expect($file->name)->toBeString();
});

it('has a path', function () {
    $file = File::factory()->create();

    expect($file->path)->toBeString();
});

it('has a size', function () {
    $file = File::factory()->create();

    expect($file->size)->toBeInt();
});

it('has a status', function () {
    $file = File::factory()->create();

    expect($file->status)->toBeString();
});

it('has a mime type', function () {
    $file = File::factory()->create();

    expect($file->mime_type)->toBeString();
});

it('may belong to an agent', function () {
    $file = File::factory()->create();
    expect($file->agent)->toBeNull();

    $file = File::factory()->create(['agent_id' => 1]);
    expect($file->agent)->toBeNull();
});

it('must belong to a user', function () {
    $file = File::factory()->create();
    expect($file->user)->toBeInstanceOf(User::class);

    $this->expectException(\Illuminate\Database\QueryException::class);
    $file = File::factory()->create(['user_id' => null]);
});
