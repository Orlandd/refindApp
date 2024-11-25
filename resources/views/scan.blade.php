@extends('layouts.main')

@section('container')
    <section class="container mx-auto px-4 mt-10">
        <form id="predictForm" class="flex-row gap-5" enctype="multipart/form-data">
            <div class="w-full">
                <label for="file-input" class="sr-only">Choose file</label>
                <input type="file" name="file-input" id="file-input"
                    class="block w-full border border-gray-200 shadow-sm rounded-lg text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400
                file:bg-gray-50 file:border-0
                file:me-4
                file:py-3 file:px-4
                dark:file:bg-neutral-700 dark:file:text-neutral-400">
            </div>
            <div class="flex justify-center mt-3">
                <button type="submit" class="border-2 py-2 w-full rounded-lg border-lime-600">Scan</button>
            </div>
        </form>
    </section>

    <section class="container mx-auto px-4 mt-10">
        <div id="predict">
        </div>

        <div>
            <div id="response" class="grid grid-cols-1 lg:grid-cols-4 gap-3">
                <div class="shadow-lg shadow-lime-400/30 rounded-lg">
                    <div class=" m-2 aspect-square rounded-lg bg-slate-400"></div>
                    <div class="h-16 flex justify-between px-6 items-center">
                        <h3 class="font-semibold text-lg">Product Name</h3>
                        <a href="" class="px-6 py-2 bg-lime-400 rounded-full">Link</a>
                    </div>
                </div>
                <!-- ... -->
                <div class="shadow-lg shadow-lime-400/30 rounded-lg">
                    <div class=" m-2 aspect-square rounded-lg bg-slate-400"></div>
                    <div class="h-16 flex justify-between px-6 items-center">
                        <h3 class="font-semibold text-lg">Product Name</h3>
                        <a href="" class="px-6 py-2 bg-lime-400 rounded-full">Link</a>
                    </div>
                </div>
                <div class="shadow-lg shadow-lime-400/30 rounded-lg">
                    <div class=" m-2 aspect-square rounded-lg bg-slate-400"></div>
                    <div class="h-16 flex justify-between px-6 items-center">
                        <h3 class="font-semibold text-lg">Product Name</h3>
                        <a href="" class="px-6 py-2 bg-lime-400 rounded-full">Link</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>

    <script>
        $(document).ready(function() {
            // Menangani event submit form
            $('#predictForm').submit(function(event) {
                event.preventDefault(); // Mencegah refresh halaman setelah form disubmit

                // Membuat FormData untuk mengirim data termasuk file
                var formData = new FormData();
                formData.append('user', 1);
                formData.append('image', $('#file-input')[0].files[0]);
                formData.append('token', 1234);

                // Mengirim data menggunakan AJAX
                $.ajax({
                    url: 'https://refindapp-70793757615.asia-southeast2.run.app/predict', // Ganti dengan URL endpoint API Anda
                    type: 'POST',
                    data: formData,
                    contentType: false, // Jangan set contentType, FormData akan menanganinya
                    processData: false, // Jangan memproses data sebelum mengirim
                    success: function(response) {
                        // Menampilkan respons di dalam div response
                        // $('#response').html('<p>Data berhasil dikirim: ' + JSON.stringify(
                        //     response) + '</p>');

                        $('#predict').html(`
                            <div class="w-full text-center bg-lime-100 py-4 rounded-full">
                                <h2 class="font-bold text-lg">${response.data.result}</h2>
                            </div>
                        `);

                        const $container = $('#response');
                        $container.html('');

                        response.data.sugesstion.forEach(suggestion => {
                            $container.append(`
                                <div class="shadow-lg shadow-lime-400/30 rounded-lg">
                                <div class="m-2 aspect-square rounded-lg bg-slate-400"></div>
                                <div class="h-16 flex justify-between px-6 items-center">
                                    <h3 class="font-semibold text-lg">${suggestion.name}</h3>
                                    <a href="#" class="px-6 py-2 bg-lime-400 rounded-full">Link</a>
                                </div>
                                </div>
                            `);
                        });


                    },
                    error: function(xhr, status, error) {
                        // Menampilkan error jika terjadi kesalahan
                        $('#response').html('<p>Terjadi kesalahan dalam mengirim data: ' +
                            error + '</p>');
                    }
                });
            });
        });
    </script>
@endsection
