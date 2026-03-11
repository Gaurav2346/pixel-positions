<x-layout>
    <div class="space-y-10">

        <section class="text-center">
            <h1 class="text-4xl font-bold animate__animated animate__backInDown animate__slow">Lets Find a Perfect Job</h1>

            <x-forms.form action="/search" class="mt-8">
                <x-forms.input :label="false" name="q" placeholder="Full stack Dev"/>

            </x-forms.form>
        </section>

        <section>
            <x-section-heading>Latest Jobs</x-section-heading>
            <div class="mt-6 grid lg:grid-cols-3 gap-8 rounded-xl">
                @foreach($featuredJobs as $job)
                    <x-job-card :$job />
                @endforeach

            </div>
        </section>

        <section>
            <x-section-heading>Tags</x-section-heading>
            <div class="mt-6 space-x-1 flex flex-wrap gap-2">
                @foreach($tags as $tag)
                    <x-tag :tag="$tag" />
                @endforeach
            </div>
        </section>

        <section>
            <x-section-heading>Recent Jobs</x-section-heading>

            <div class="mt-6 space-y-6 ">
                @foreach($jobs as $job)
                    <x-job-card-wide :$job />
                @endforeach
            </div>

        </section>
    </div>
</x-layout>
