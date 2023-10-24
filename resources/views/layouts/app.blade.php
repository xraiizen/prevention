@extends('layouts.base')

@section('title', config('app.name', 'Laravel'))

@section('content')
    <div class="min-h-screen bg-gray-100" id="app">


        <!-- Page Heading -->
        @if (isset($header))
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>
@endsection
