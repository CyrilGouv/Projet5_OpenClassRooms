<?php

// Permet de savoir sous quel route nous sommes \\
function isActive($route) {
    return Route::is($route) ? 'active' : '';
}