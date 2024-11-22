@extends('layouts.main')

@section('container')
    <section class="container mx-auto px-4 mt-10">
        <div class=" flex flex-wrap-reverse mx-auto md:flex-nowrap gap-4">
            <div class="w-full mx-auto my-auto">
                <h4 class="text-lg text-lime-600 font-bold">Welcome to,</h4>
                <h1 class="text-3xl text-slate-900 font-bold mb-3">Refind App</h1>
                <a href="#" class="py-2 px-4 bg-green-400 rounded-full text-white font-bold hover:shadow hover:shadow-lime-400 transition-all">Scan now</a>
            </div>
            <div class="w-full flex justify-end gap-1 md:max-w-[610px]">
                <div class=" h-[400px] w-[300px] bg-slate-500"></div>
            </div>
        </div>
    </section>

    <section class="container mx-auto px-4 mb-96">
       <h1 class="text-xl font-semibold text-center mt-5">Jenis Sampah</h1>
       <div class="grid grid-cols-4 gap-6 px-20 mt-10">
        <div class=" aspect-square rounded-2xl p-4 shadow-md shadow-lime-400">01</div>
        <div class=" aspect-square rounded-2xl p-4 shadow-md shadow-lime-400">01</div>
        <div class=" aspect-square rounded-2xl p-4 shadow-md shadow-lime-400">01</div>
        <div class=" aspect-square rounded-2xl p-4 shadow-md shadow-lime-400">01</div>
        <div class=" aspect-square rounded-2xl p-4 shadow-md shadow-lime-400">01</div>
        <div class=" aspect-square rounded-2xl p-4 shadow-md shadow-lime-400">01</div>
        <div class=" aspect-square rounded-2xl p-4 shadow-md shadow-lime-400">01</div>
        <div class=" aspect-square rounded-2xl p-4 shadow-md shadow-lime-400">01</div>
        <div class=" aspect-square rounded-2xl p-4 shadow-md shadow-lime-400">01</div>
        <div class=" aspect-square rounded-2xl p-4 shadow-md shadow-lime-400">01</div>
        <div class=" aspect-square rounded-2xl p-4 shadow-md shadow-lime-400">01</div>
        <div class=" aspect-square rounded-2xl p-4 shadow-md shadow-lime-400">01</div>

      </div>
    </section>


@endsection