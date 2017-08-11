<?php
// Home
Breadcrumbs::register('home', function($breadcrumbs)
{
    $breadcrumbs->push('Accueil', route('home'));
});

Breadcrumbs::register('conducteur', function($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Votre profile ', route('conducteur'));
});

Breadcrumbs::register('editConducteur', function($breadcrumbs, $id)
{
    $List_conducteur = App\Conducteur::find($id);
    $breadcrumbs->parent('conducteur', $id);
    $breadcrumbs->push('Modifer le profile : '.$List_conducteur->username, route('editConducteur', $id));
});

Breadcrumbs::register('client', function($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Votre profile ', route('client'));
});

Breadcrumbs::register('editClient', function($breadcrumbs, $id)
{
    $List_client = App\Client::find($id);
    $breadcrumbs->parent('client', $id);
    $breadcrumbs->push('Modifer le profile : '.$List_client->username, route('editClient', $id));
});

Breadcrumbs::register('showClient', function($breadcrumbs, $id)
{
    $List_client = App\Client::find($id);
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Profile : '.$List_client->username, route('showClient', $id));
});

Breadcrumbs::register('addVehicule', function($breadcrumbs) {
    $breadcrumbs->parent('conducteur');
    $breadcrumbs->push('Ajouter une Vehicule', route('addVehicule'));
});

Breadcrumbs::register('editVehicule', function($breadcrumbs, $id)
{
    $vehicule = App\Client::find($id);
    $breadcrumbs->parent('client', $id);
    $breadcrumbs->push('Modifer Vehicule : '.$vehicule->username, route('editVehicule', $id));
});

Breadcrumbs::register('addRendezVous', function($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Ajouter un rendez vous', route('addRendezVous'));
});