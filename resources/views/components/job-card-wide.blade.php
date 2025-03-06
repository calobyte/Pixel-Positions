@props(["job"])

<x-panel class="flex flex-row gap-6">
    <div>
        <x-employer-logo />
    </div>

    <div class="flex-1 flex flex-col">
        <a href="#" class="self-start text-sm text-gray-400 group-hover:text-blue-800 transition-colors duration-300">{{ $job->employer->name }}</a>
        <h3 class="font-bold mt-3 text-xl">{{ $job->title }}</h3>
        <p class="text-sm text-gray-400 mt-auto">{{$job->schedule}} - {{ $job->salary }}</p>
    </div>

    <div class="flex flex-col">
        <div class="mt-auto">
            @foreach($job->tags as $tag)
                <x-tag :$tag />
            @endforeach
        </div>
    </div>
</x-panel>