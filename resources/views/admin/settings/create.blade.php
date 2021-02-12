@extends('layouts.app')

@section('content')
    <section>
        <div class="px-4">
            <h1 class="text-3xl mb-2">General Settings</h1>
            <p class="text-gray-600 mb-3">Save all application settings.</p>
        </div>
        <form action="" x-data="optionsForm()" @submit.prevent="saveSettings(event)">
            <div class="m-3 bg-white rounded-xl border w-2/3 p-4 shadow-sm">
            @csrf
                <div class="mb-3">
                    <label for="app_name" class="block text-sm font-medium text-gray-700">App name</label>
                    <input type="text" name="app_name" x-model="values.app_name" id="app_name" autocomplete="given-name" class="rounded-lg px-3 mt-1 w-full py-1 transition duration-300 border border-gray-300 rounded focus:border-transparent focus:outline-none focus:ring-4 focus:ring-blue-200">
                </div>
                <div class="mb-3  ">
                    <label for="app_shortname" class="block  text-sm font-medium text-gray-700">App shortname</label>
                    <input type="text" name="app_shortname" x-model="values.app_shortname" id="app_shortname" autocomplete="given-name" class="rounded-lg px-3 mt-1 w-full py-1 transition duration-300 border border-gray-300 rounded focus:border-transparent focus:outline-none focus:ring-4 focus:ring-blue-200">
                </div>
                <div class="mb-3">
                    <label for="app_url" class="block text-sm font-medium text-gray-700">App Url</label>
                    <input type="text" name="app_url" id="app_url" x-model="values.app_url" autocomplete="given-name" class="rounded-lg px-3 mt-1 w-full py-1 transition duration-300 border border-gray-300 rounded focus:border-transparent focus:outline-none focus:ring-4 focus:ring-blue-200">
                </div>
                <div class="mb-3">
                    <label for="app_email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="text" name="app_email" id="app_email" x-model="values.app_email" autocomplete="given-name" class="rounded-lg px-3 mt-1 w-full py-1 transition duration-300 border border-gray-300 rounded focus:border-transparent focus:outline-none focus:ring-4 focus:ring-blue-200">
                </div>
                <div class="mb-3">
                    <label for="app_phone" class="block text-sm font-medium text-gray-700">Contact number</label>
                    <input type="text" name="app_phone" id="app_phone" x-model="values.app_phone" autocomplete="given-name" class="rounded-lg px-3 mt-1 w-full py-1 transition duration-300 border border-gray-300 rounded focus:border-transparent focus:outline-none focus:ring-4 focus:ring-blue-200">
                </div>
                <div class="mb-3">
                    <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                    <input type="text" name="title" id="title" x-model="values.title" autocomplete="given-name" class="rounded-lg px-3 mt-1 w-full py-1 transition duration-300 border border-gray-300 rounded focus:border-transparent focus:outline-none focus:ring-4 focus:ring-blue-200">
                </div>
                <div class="mb-3  ">
                    <label for="description" class="block  text-sm font-medium text-gray-700">Descriptions</label>
                    <input type="text" name="description" id="description" x-model="values.description" autocomplete="given-name" class="rounded-lg px-3 mt-1 w-full py-1 transition duration-300 border border-gray-300 rounded focus:border-transparent focus:outline-none focus:ring-4 focus:ring-blue-200 ">
                </div>
                <div class="mb-3  ">
                    <label for="keywords" class="block  text-sm font-medium text-gray-700">Keywords</label>
                    <input type="text" name="keywords" id="keywords" x-model="values.keywords" autocomplete="given-name" class="rounded-lg px-3 mt-1 w-full py-1 transition duration-300 border border-gray-300 rounded focus:border-transparent focus:outline-none focus:ring-4 focus:ring-blue-200 ">
                </div>
                <!-- <div>
                    <label class="block text-sm font-medium text-gray-700">
                        Cover photo
                    </label>
                    <div class="mt-2 flex justify-center px-6 pt-5 pb-6  border-2 border-gray-300 border-dashed rounded-md">
                        <div class="space-y-1 text-center">
                        <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                            <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <div class="flex text-sm text-gray-600">
                            <label for="file-upload" class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                            <span>Upload a file</span>
                            <input id="file-upload" name="image" type="file" class="sr-only">
                            </label>
                            <p class="pl-1">or drag and drop</p>
                        </div>
                        <p class="text-xs text-gray-500">
                            PNG, JPG, GIF up to 10MB
                        </p>
                        </div>
                    </div>
                    </div> -->
                <div class="py-8">
                    <p class="block text-sm leading-5 font-medium text-gray-700 mb-4">
                        Favicon
                    </p>
                    <!-- If you wish to reference an existing file (i.e. from your database), pass the url into imageData() -->
                    <div x-data="imageData()" class="file-input flex items-center">

                    <!-- Preview Image -->
                    <div class="h-12 w-12 rounded-full overflow-hidden bg-gray-100">
                        <!-- Placeholder image -->
                        <div x-show="!previewPhoto" >
                        <!-- <svg class="h-full w-full text-gray-300" fill="currentColor" viewBox="0 0 24 24"><path d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z" /></svg> -->
                        <img src="{{ @$meta['favicon'] }}" alt="no image" class="w-full h-full">
                        </div>
                        <!-- Show a preview of the photo -->
                        <div x-show="previewPhoto" class="h-12 w-12 rounded-full overflow-hidden">
                        <img :src="previewPhoto"
                            alt=""
                            class="h-12 w-12 object-cover">
                        </div>
                    </div>

                    <div class="flex items-center">
                        <!-- File Input -->
                        <div class="ml-5 rounded-md shadow-sm">
                        <!-- Replace the file input styles with our own via the label -->
                        <input @change="updatePreview($refs)" x-ref="input"
                                type="file"
                                accept="image/*,capture=camera"
                                name="favicon" id="favicon"
                                class="w-1 h-1 absolute transpaarent opacity-0">
                        <label for="favicon"
                                class="py-2 px-3 border border-gray-300 rounded-md text-sm leading-4 font-medium text-gray-700 hover:text-indigo-500 hover:border-indigo-300 focus:outline-none focus:border-indigo-300 focus:shadow-outline-indigo active:bg-gray-50 active:text-indigo-800 transition duration-150 ease-in-out">
                            Upload Photo
                        </label>
                        </div>
                        <div class="flex items-center text-sm text-gray-500 mx-2">
                        <!-- Display the file name when available -->
                        <span x-text="fileName || emptyText"></span>
                        <!-- Removes the selected file -->
                        <button x-show="fileName"
                                @click="clearPreview($refs)"
                                type="button"
                                aria-label="Remove image"
                                class="mx-1 mt-1">
                            <svg viewBox="0 0 20 20" fill="currentColor" class="x-circle w-4 h-4"
                                aria-hidden="true" focusable="false"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"></path></svg>
                        </button>
                        </div>
                    </div>
                </div>
                <div class="py-8">
                    <p class="block text-sm leading-5 font-medium text-gray-700 mb-4">
                    Logo
                    </p>
                    <!-- If you wish to reference an existing file (i.e. from your database), pass the url into imageData() -->
                    <div x-data="imageData()" class="file-input flex items-center">

                    <!-- Preview Image -->
                    <div class="h-12 w-12 rounded-full overflow-hidden bg-gray-100">
                        <!-- Placeholder image -->
                        <div x-show="!previewPhoto" >
                        <!-- <svg class="h-full w-full text-gray-300" fill="currentColor" viewBox="0 0 24 24"><path d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z" /></svg> -->
                        <img src="{{ @$meta['logo'] }}" alt="no image" class="w-full h-full">

                        </div>
                        <!-- Show a preview of the photo -->
                        <div x-show="previewPhoto" class="h-12 w-12 rounded-full overflow-hidden">
                        <img :src="previewPhoto"
                            alt=""
                            class="h-12 w-12 object-cover">
                        </div>
                    </div>

                    <div class="flex items-center">
                        <!-- File Input -->
                        <div class="ml-5 rounded-md shadow-sm">
                        <!-- Replace the file input styles with our own via the label -->
                        <input @change="updatePreview($refs)" x-ref="input"
                                type="file"
                                accept="image/*,capture=camera"
                                name="logo" id="logo"
                                class="w-1 h-1 absolute transpaarent opacity-0">
                        <label for="logo"
                                class="py-2 px-3 border border-gray-300 rounded-md text-sm leading-4 font-medium text-gray-700 hover:text-indigo-500 hover:border-indigo-300 focus:outline-none focus:border-indigo-300 focus:shadow-outline-indigo active:bg-gray-50 active:text-indigo-800 transition duration-150 ease-in-out">
                            Upload Photo
                        </label>
                        </div>
                        <div class="flex items-center text-sm text-gray-500 mx-2">
                        <!-- Display the file name when available -->
                        <span x-text="fileName || emptyText"></span>
                        <!-- Removes the selected file -->
                        <button x-show="fileName"
                                @click="clearPreview($refs)"
                                type="button"
                                aria-label="Remove image"
                                class="mx-1 mt-1">
                            <svg viewBox="0 0 20 20" fill="currentColor" class="x-circle w-4 h-4"
                                aria-hidden="true" focusable="false"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"></path></svg>
                        </button>
                        </div>
                    </div>
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
            const req = new Request(`/api/save_settings`, {
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
