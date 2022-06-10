@extends('layout.app')

@section('content')
    @unless(empty($listing))
        <div class="mb-4 flex rounded bg-white p-4">
            <img class="mr-4 hidden h-40 rounded md:block" src="{{ asset('images/no-image.jpg') }}" alt="">
            <div>
                <a class="mb-2 block text-xl font-semibold" href="/listings/{{ $listing->id }}">{{ $listing->title }}</a>
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
        </div>
    @else
        <div class="text-center text-gray-700">No listings found.</div>
    @endunless
@endsection
