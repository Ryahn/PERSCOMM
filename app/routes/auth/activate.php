<?php
$app->get('/activate', function() use($app) {

    $request = $app->request;

    $email = $request->get('email');
    $identifier = $request->get('identifier');

    $hashedIdentifier = $app->hash->hash($identifier);

    $user = $app->user->where('email', $email)
        ->where('active', false)
        ->first();

    if (!$user || !$app->hash->hashCheck($user->active_hash, $hashedIdentifier)) {
        $app->flash('global', 'There was a problem activating');
        $app->response->redirect($app->urlFor('home'));
    } else {
        $user->activateAccount();
        $app->flash('global', 'Account Activated');
        $app->response->redirect($app->urlFor('home'));
    }

})->name('activate');
