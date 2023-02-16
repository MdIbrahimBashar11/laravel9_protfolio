@extends('layout.app');
@if (Route::has('login'))
<div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
    @auth
        <a href="{{ url('/redirect') }}" class="text-sm text-gray-700 dark:text-gray-500 underline"></a>
    @else
        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline"></a>
    @endauth
</div>
@endif