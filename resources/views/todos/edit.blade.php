<x-layout>
    <x-slot:title>Ieraksta rediģēšana</x-slot:title>
    <h1>Ieraksta rediģēšana</h1>
    <form action="/todos/{{ $todo->id }}" method="POST">
        @csrf
        @method("PUT")
        
        <p>
            <label>
                <input name="content" type="text" value="{{ old('content', $todo->content) }}" required />
            </label>
            @error("content")
                <p>{{ $message }}</p>
            @enderror
        </p>
        <input type="hidden" name="body" value="{{ $todo->content }}">
        <input type="hidden" name="date" value="{{ $todo->date }}">
        <p>
            <label>
                <input name="completed" type="hidden" value="0">
                <input name="completed" type="checkbox" value="1" {{ old('completed', $todo->completed) ? 'checked' : '' }}> 
                Izpildīts
            </label>
            @error("completed")
                <span style="color: red;">{{ $message }}</span>
            @enderror
        </p>
        
        <button type="submit">Saglabāt</button>
    </form>
</x-layout>