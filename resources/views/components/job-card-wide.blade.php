@props(['job'])

<x-panel class="flex items-center gap-x-6 hover:bg-white/5 transition rounded-2xl p-4">
    {{-- ✅ Employer Logo --}}
    <div class="shrink-0">
        <x-employer-logo :employer="$job->employer" class="rounded-lg" />
    </div>

    {{-- ✅ Job Details --}}
    <div class="flex-1 flex flex-col">
        {{-- Employer Name --}}
        <a href="#" class="text-sm text-gray-400">{{ $job->employer->name }}</a>

        {{-- Job Title --}}
        <h3 class="text-xl font-bold mt-2 group-hover:text-blue-500 transition">
            <a href="{{ $job->url }}" target="_blank" rel="noopener noreferrer">
                {{ $job->title }}
            </a>
        </h3>

        {{-- Salary --}}
        <p class="text-sm text-gray-400 mt-2">{{ $job->salary }}</p>
    </div>

    {{-- ✅ Tags --}}
    @if($job->tags->count())
        <div class="flex flex-wrap gap-2 justify-end">
            @foreach($job->tags as $tag)
                <x-tag :$tag size="small" />
            @endforeach
        </div>
    @endif
</x-panel>
