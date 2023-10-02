<?php

use App\Brand;
use App\ProgramCategory;
use App\School;
use App\Legal;
use App\Country;
use App\Page;
use App\Models\User;

function brandimages(){
    $brands = Brand::get()->all();
    return $brands;
}

function pages(){
    $pages = Page::where('status',1)->get();
    return $pages;
}

function programCategories(){
    $programs = ProgramCategory::get()->all();
    return $programs;
}

function consultants(){
    $consultants = User::where('role_id', 4)->get();
    return $consultants;
}

function schoolPhotos(){
    $schoolPhotos = School::inrandomorder()->take(10)->select('slug', 'logo')->get();
    return $schoolPhotos;
}

function countries(){
    $countries = Country::get()->all();
    return $countries;
}

function legals(){
    $legals = Legal::get()->all();
    return $legals;
}

function randomSchools(){
    $schools = School::inrandomorder()->take(5)->get();
    return $schools;
}