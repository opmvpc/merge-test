<?php

test('la page About se charge correctement', function () {
    $response = $this->get('/about');
    $response->assertStatus(200);
    $response->assertSee('À propos');
});

test('la page Contact se charge correctement', function () {
    $response = $this->get('/contact');
    $response->assertStatus(200);
    $response->assertSee('Contact');
});
