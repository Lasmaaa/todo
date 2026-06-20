<x-layout>
  <x-slot:title>
    {{ $todo->title }}
  </x-slot:title>

  <h1>{{ $todo->content }}</h1>
    <p>Completed: {{ $todo->completed ? 'Yes' : 'No' }}</p>
  
  <p><a href="/todos/{{ $todo->id }}/edit">Rediget ierakstu</a></p>
  <p>
    <a href="/todos">Atpakal uz sarakstu</a>
  </p>

  <form action="/todos/{{ $todo->id }}/destroy" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">Dzēst ierakstu</button>
  </form>
</x-layout>