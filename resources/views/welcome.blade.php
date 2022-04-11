@extends('layouts.app')

@section('content')

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8 hero-board">

                <h3>## Adminpanel to manage companies </h3>
                <h4> ## Basically, project to manage companies and their employees. Mini-CRM.</h4>
                <ul>
                    <li>Basic Laravel Auth: ability to log in as administrator</li>
                    <li>Use database seeds to create first user with email admin@admin.com and password “password”</li>
                    <li>CRUD functionality (Create / Read / Update / Delete) for two menu items: Companies and Employees.</li>
                    <li>Companies DB table consists of these fields: Name (required), email, logo (minimum 100×100), website</li>
                    <li>Employees DB table consists of these fields: First name (required), last name (required), Company (foreign key to Companies), email, phone</li>
                    <li>Use database migrations to create those schemas above</li>
                    <li>Store companies logos in storage/app/public folder and make them accessible from public</li>
                    <li>Use basic Laravel resource controllers with default methods – index, create, store etc.</li>
                    <li>Use Laravel’s validation function, using Request classes</li>
                    <li>Use Laravel’s pagination for showing Companies/Employees list, 10 entries per page</li>
                    <li> Use Laravel make:auth as default Bootstrap-based design theme, but remove ability to register4</li>
                </ul>
            </div>
@endsection

