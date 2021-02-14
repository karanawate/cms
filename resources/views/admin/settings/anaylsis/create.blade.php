@extends('layouts.app')

@section('content')
    <section>
        <div class="px-4">
            <h1 class="text-3xl mb-2">Anaylsis Settings</h1>
            <p class="text-gray-600 mb-3">Save all Anaylsis settings.</p>
        </div>
        <form action="" x-data="optionsForm()" @submit.prevent="saveSettings(event)">
            <div class="m-3 bg-white rounded-xl border w-2/3 p-4 shadow-sm">
            @csrf

                <div class="mb-3">
                    <label for="app_name" class="block text-sm font-medium text-gray-700">Facebook link</label>
                    <input type="text" name="facebook_link" x-model="values.facebook_link" id="facebook_link" autocomplete="given-name" class="rounded-lg px-3 mt-1 w-full py-1 transition duration-300 border border-gray-300 rounded focus:border-transparent focus:outline-none focus:ring-4 focus:ring-blue-200">
                </div>
                <div class="mb-3  ">
                    <label for="app_shortname" class="block  text-sm font-medium text-gray-700">App shortname</label>
                    <input type="text" name="app_shortname" x-model="values.app_shortname" id="app_shortname" autocomplete="given-name" class="rounded-lg px-3 mt-1 w-full py-1 transition duration-300 border border-gray-300 rounded focus:border-transparent focus:outline-none focus:ring-4 focus:ring-blue-200">
                </div>
                <div class="mb-3">
                    <label for="app_url" class="block text-sm font-medium text-gray-700">App Url</label>
                    <input type="text" name="app_url" id="app_url" x-model="values.app_url" autocomplete="given-name" class="rounded-lg px-3 mt-1 w-full py-1 transition duration-300 border border-gray-300 rounded focus:border-transparent focus:outline-none focus:ring-4 focus:ring-blue-200">
                </div>
                <div class="mb-3  ">
                    <label for="ANAYLYSIS" class="block  text-sm font-medium text-gray-700">Anaylsis</label>
                    <input type="text" name="ANAYLYSIS"  id="ANAYLYSIS" autocomplete="given-name" class="rounded-lg px-3 mt-1 w-full py-1 transition duration-300 border border-gray-300 rounded focus:border-transparent focus:outline-none focus:ring-4 focus:ring-blue-200">
                </div>
                </div>
                <div class="text-left">
                <button class="bg-blue-600  hover:bg-blue-900 px-4 py-2 rounded-lg text-white">Save</button>
                </div>
            </div>
        </form>
    </section>
@push('js')
<script>
    function optionsForm() {
        const formvalues = @json($options);
        const values = formvalues

        return {
            values

        }
    }

    async function saveSettings(event) {
        try {
    const req = new Request(`/api/save_anaylsis`, {
                method: 'POST',
                body: new FormData(event.target)
            })
            let res = await fetch(req)
            res = await res.json()
            const { ok, message } = res
            // console.log({res})
            alert(message)
        } catch (error) {
            console.log({error})
            alert(error.message)


        }
    }
    function imageData(url) {
        const originalUrl = url || '';
        return {
            previewPhoto: originalUrl,
            fileName: null,
            emptyText: originalUrl ? 'No new file chosen' : 'No file chosen',
            updatePreview($refs) {
            var reader,
                files = $refs.input.files;
            reader = new FileReader();
            reader.onload = (e) => {
                this.previewPhoto = e.target.result;
                this.fileName = files[0].name;
            };
            reader.readAsDataURL(files[0]);
            },
            clearPreview($refs) {
            $refs.input.value = null;
            this.previewPhoto = originalUrl;
            this.fileName = false;
            }
        };
    }
</script>
@endpush
@endsection
