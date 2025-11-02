@props(['job'])
<x-panel class="flex gap-x-6">
    <div>
        <x-employer-logo :employer="$job->employer" />
    </div>

    <div class="flex-1 flex flex-col">
        <a href="#" class="elf-start text-sm text-gray-400">{{$job->employer->name}}</a>

        <h3 class="text-xl font-bold mt-2 group-hover:text-blue-600">
            <a href="{{$job->url}}" target="_blank">
                {{ $job->title }}
            </a>
        </h3>

        <h1 class="text-sm text-gray-400 mt-auto">{{$job->salary}}</h1>
    </div>

        <div>
            @foreach($job->tags as $tag)
                <x-tag :$tag />
            @endforeach

        </div>

</x-panel>
