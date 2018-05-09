<?php

// Permet de savoir sous quel route nous sommes \\
function isActiveRoute($route) {
    return Route::is($route) ? 'active' : '';
}