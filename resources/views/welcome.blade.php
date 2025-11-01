<x-layout>
    <div class="space-y-10">

        <section class="text-center">
            <h1 class="text-4xl font-bold">Lets Find a Perfect Job</h1>

            <form class="mt-6 pb-2">
                <input type="text" placeholder="Web Developer...." class="  rounded-2xl bg-white/15 px-5 py-3 w-full max-w-xl">
            </form>
        </section>

        <section>
            <x-section-heading>Latest Jobs</x-section-heading>
            <div class="mt-6 grid lg:grid-cols-3 gap-8 rounded-xl">
                <x-job-card />
                <x-job-card />
                <x-job-card />
            </div>
        </section>

        <section>
            <x-section-heading>Tags</x-section-heading>
            <div class="mt-6 space-x-1 flex flex-wrap gap-2">
                <x-tag>Tags</x-tag>
                <x-tag>Tags</x-tag>
                <x-tag>Tags</x-tag>
                <x-tag>Tags</x-tag>
                <x-tag>Tags</x-tag>
                <x-tag>Tags</x-tag>
                <x-tag>Tags</x-tag>
                <x-tag>Tags</x-tag>
                <x-tag>Tags</x-tag>
                <x-tag>Tags</x-tag>
                <x-tag>Tags</x-tag>
                <x-tag>Tags</x-tag>
                <x-tag>Tags</x-tag>
                <x-tag>Tags</x-tag>
            </div>
        </section>

        <section>
            <x-section-heading>Recent Jobs</x-section-heading>

            <div class="mt-6 space-y-6 ">
                <x-job-card-wide />
                <x-job-card-wide />
                <x-job-card-wide />
            </div>

        </section>
    </div>
</x-layout>
