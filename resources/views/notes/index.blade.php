<x-layout>
    <h3>All Notes</h3>
    @foreach($notes as $note)
        <div style="border: 1px solid black; padding: 10px; margin-bottom: 10px;">
            <h4>{{ $note->title }}</h4>
            <p>{{ $note->content }}</p>
            <form action="{{ route('notes.destroy', $note) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Delete Note</button>
            </form>
        </div>
    @endforeach
</x-layout>