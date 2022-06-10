@extends('layout.app')

@section('content')
    <h1 class="mb-4 text-center text-2xl font-semibold">Listings</h1>
    <ul>
        @unless(empty($listings))
            @foreach ($listings as $listing)
                <li class="mb-4 flex rounded bg-white p-4">
                    <img class="mr-4 hidden h-40 rounded md:block" src="{{ asset('images/no-image.jpg') }}" alt="">
                    <div>
                        <a class="mb-2 block text-xl font-semibold"
                            href="/listings/{{ $listing->id }}">{{ $listing->title }}</a>
                        <p class="mb-2 text-sm text-gray-700">{{ $listing->company }}</p>
                        <div class="mb-2">
                            @foreach (explode(' ', $listing->tags) as $tag)
                                <span
                                    class="mr-2 inline-block rounded-full bg-gray-200 px-3 py-1 text-sm font-semibold text-gray-700 last:mr-0">
                                    {{ $tag }}
                                </span>
                            @endforeach
                        </div>
                        <div class="flex items-center">
                            <i class="fa-solid fa-location-dot mr-2"></i>
                            <p class="text-sm text-gray-700">
                                {{ $listing->location }}
                            </p>
                        </div>
                    </div>
                </li>
            @endforeach
        @else
            <li class="text-center text-gray-700">No listings found.</li>
        @endunless
    </ul>
@endsection
