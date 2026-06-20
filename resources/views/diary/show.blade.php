
<x-layout>
    <x-slot:title>
        {{ $diary->title }}
    </x-slot:title>
    <h1>{{ $diary->title }}</h1>
    <p>{{ $diary->content }}</p>
    <p>Date: {{ $diary->date }}</p>
    <p>Completed: {{ $diary->completed ? 'Yes' : 'No' }}</p>

        <a href="/diaries/{{ $diary->id }}/edit">Rediģēt ierakstu</a> 
       <p>
            <a href="/diaries">Atpakal uz sarakstu</a>
        </p>

        <form action="/diaries/{{ $diary->id }}/destroy" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">Dzēst ierakstu</button>
  </form>
</x-layout>