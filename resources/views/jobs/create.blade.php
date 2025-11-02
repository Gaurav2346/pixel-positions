<x-layout>
    <x-page-heading>New Job</x-page-heading>

    <x-forms.form method="POST" action="/jobs">
        <x-forms.input name="title" label="Title" placeholder="CEO" required/>
        <x-forms.input name="salary" label="Salary" placeholder="$90,000" required/>
        <x-forms.input name="location" label="Location" placeholder="Bhayander" required/>

        <x-forms.select label="Schedule" name="schedule">
            <option>Full Time</option>
            <option>Part Time</option>

        </x-forms.select>


        <x-forms.input name="url" label="URL" placeholder="http//example.com" required/>
        <x-forms.checkbox label="feature (cost extra)" name="featured"/>

        <x-forms.divider/>

        <x-forms.input name="tags" label="Tags (Coma seperated)" placeholder="lacaracast , ceo , software" required/>

        <x-forms.button>
            Publish
        </x-forms.button>


    </x-forms.form>
</x-layout>
