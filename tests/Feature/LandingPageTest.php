<?php

test('landing page renders compdown messaging', function () {
    $response = $this->get('/');

    $response->assertStatus(200);
    $response->assertSee('A markup language for After Effects');
    $response->assertSee('Download');
    $response->assertSee('https://github.com/compdown/compdown/releases/latest/download/com.compdown.cep.zxp');
});
