<?php

test('returns a successful response', function () {
    $response = $this->get(route('home'));
    $response->assertOk()
        ->assertInertia(fn (\Inertia\Testing\AssertableInertia $page) => $page
            ->component('welcome'));
});
