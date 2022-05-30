<fieldset class="mb-3" data-async>

    <style>
        #services .row.form-group {
            display: flex;
            flex-direction: column;
            margin: 0 0 1rem;
        }
        #services textarea {
            margin: 0.5rem 0 0;
            font-size: .9rem;
        }
    </style>

    @empty(!$title)
        <div class="col p-0 px-3">
            <legend class="text-black">
                {{ $title }}
            </legend>
        </div>
    @endempty
    <div id="services" class="bg-white rounded shadow-sm p-4 py-4 d-flex flex-row flex-wrap">
        @foreach($forms as $item)
            {!! $item ?? '' !!}
        @endforeach
    </div>
</fieldset>
