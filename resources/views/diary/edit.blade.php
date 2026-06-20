<x-layout>
    <x-slot:title>Ieraksta rediģēšana</x-slot:title>
    
    <h1>Ieraksta rediģēšana</h1>
    
    <form action="/diaries/{{ $diary->id }}" method="POST">
        @csrf
        @method("PUT")
        
        <p>
            <label>
                Virsraksts: <br>
                <input name="title" type="text" value="{{ old('title', $diary->title) }}" required />
            </label>
            @error("title")
                <span style="color: red;"><br>{{ $message }}</span>
            @enderror
        </p>

        <p>
            <label>
                Saturs: <br>
                <textarea name="body" required>{{ old('body', $diary->body) }}</textarea>
            </label>
            @error("body")
                <span style="color: red;"><br>{{ $message }}</span>
            @enderror
        </p>

        <p>
            <label>
                Datums: <br>
                <input name="date" type="date" value="{{ old('date', $diary->date) }}" required />
            </label>
            @error("date")
                <span style="color: red;"><br>{{ $message }}</span>
            @enderror
        </p>

        <p>
            <label>
                <input name="completed" type="hidden" value="0">
                <input name="completed" type="checkbox" value="1" {{ old('completed', $diary->completed) ? 'checked' : '' }}> 
                Izpildīts
            </label>
            @error("completed")
                <span style="color: red;"><br>{{ $message }}</span>
            @enderror
        </p>
        
        <button type="submit">Saglabāt</button>
    </form>
</x-layout>