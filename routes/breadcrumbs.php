<?php
use Diglactic\Breadcrumbs\Breadcrumbs;

// Home
Breadcrumbs::for('home', function ($trail) {
    $trail->push('Главная', route('home'));
});
// Home > Contacts
Breadcrumbs::for('contacts', function ($trail) {
    $trail->parent('home');
    $trail->push((config2('moonshine.contact.title'))?:' - ', route('contacts'));
});

// Home > Company > Category > Item
Breadcrumbs::for('company_item', function ($trail, $category, $item) {
    $trail->parent('company_category', $category);
    $trail->push($item->title , route('company_item', ['category_slug' => $category->slug, 'item_slug' => $item->slug]));
});

Breadcrumbs::for('site_excursion', function ($trail, $item) {

    $trail->parent('home');
    $trail->push($item->title, route('site_excursion', ['slug' => $item->slug]));

});
