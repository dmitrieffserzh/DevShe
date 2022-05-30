<fieldset class="mb-3" data-async>

    <style>
        #services.p-4 {
            padding: 1.5rem .8rem 0!important;
        }
        #services .row.form-group {
            display: flex !important;
            flex-direction: column !important;
            margin: 0 0 2rem !important;
        }
        #services textarea {
            margin: 0.5rem 0 0 !important;
            font-size: .8rem !important;
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
