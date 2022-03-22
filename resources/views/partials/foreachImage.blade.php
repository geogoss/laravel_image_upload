<div>
    <h1 class="text-center">Image non archivées</h1>
    <div class="d-flex justify-content-around">
        @foreach ($files as $file)
            <img class="img" src="{{ asset('storage/' . $file->src) }} " alt="">
            <div class="d-flex">
                <a class="btn btn-info" href="/file/{{$file->id}}/edit">EDIT</a>
                <a class="btn btn-success mx-2" href="/archived/{{ $file->id }}">Archiver</a>
            </div>
        @endforeach
    </div>
</div>
<div>
    <h1 class="text-center">Image archivées</h1>
    <div class="d-flex justify-content-around">
        @foreach ($archived as $file)
            <img class="img" src="{{ asset('storage/' . $file->src) }} " alt="">
            <div class="d-flex">
                <form action="/file/{{ $file->id }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
                <a class="btn btn-success mx-2" href="/archived/{{ $file->id }}">Dé-Archiver</a>
            </div>
        @endforeach
    </div>
</div>
