@extends('layouts.app')

@section('content')
    <form id="testform">
    <div class="m-3 bg-white rounded-xl border p-4 shadow-sm">
        <div class="mb-3">
            <label for="first_name" class="block text-sm font-medium text-gray-700">Title</label>
            <input type="text" name="title" id="title" autocomplete="given-name" class="rounded-lg px-3 mt-1 w-full py-1 transition duration-300 border border-gray-300 rounded focus:border-transparent focus:outline-none focus:ring-2 focus:ring-blue-400">
        </div>
        <div class="mb-3  ">
            <label for="first_name" class="block  text-sm font-medium text-gray-700">Description</label>
            <input type="text" name="description" id="description" autocomplete="given-name" class="rounded-lg px-3 mt-1 w-full py-1 transition duration-300 border border-gray-300 rounded focus:border-transparent focus:outline-none focus:ring-2 focus:ring-blue-400  h-32">
        </div>
        <div>
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
                      <input id="file_upload" name="image" type="file" class="sr-only">
                    </label>
                    <p class="pl-1">or drag and drop</p>
                  </div>
                  <p class="text-xs text-gray-500">
                    PNG, JPG, GIF up to 10MB
                  </p>
                </div>
              </div>
            </div>

            <div>
              <label class="block text-sm font-medium text-gray-700">
                Thumbnail
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
            </div>
          </div>
        <div class="text-center">
        <button type="submit" class="bg-blue-600  hover:bg-blue-900 px-4 py-2 rounded-lg text-white">Add Testimonial</button>
        </div>
    </div>
    </form>
    @push('js')
        <script>
         const form = document.getElementById('testform');
         form.addEventListener('submit',(event) => {
            event.preventDefault();
            var title = document.getElementById('title').value;
            var description = document.getElementById('description').value;
            var file_upload = document.getElementById('file_upload').value;
            try {
                    axios({
                        method:'post',
                        url:'/api/testimonials',
                        data:{
                            title:title,
                            description:description,
                            file_upload:file_upload,
                        },
                    }).then(function(response){
                        console.log(response)
                    });
            } catch (error) {
                console.log(error);
            }
         });

        </script>
    @endpush

@endsection
