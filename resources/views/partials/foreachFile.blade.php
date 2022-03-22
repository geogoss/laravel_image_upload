<div>
    @foreach ($files as $file)
        <img class="img" src="{{asset('storage/'.$file->src)}} " alt="">
        <div class="d-flex">
            <form action="/file/{{$file->id}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </div>
    @endforeach
</div>
