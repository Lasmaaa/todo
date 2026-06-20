<x-layout>
    <x-slot:title>Izveidot dienasgrāmatas ierakstu</x-slot:title>
    <h1>Izveidot dienasgrāmatas ierakstu</h1>

    <form method="POST" action="/diaries">
        <input name="title" />
        <input name="body" />
        <input name="date" />
        

        @error("title")
        <p>{{ $message }}</p>
        @enderror
        <button>Saglabāt</button>
    </form>
    @csrf
</x-layout>