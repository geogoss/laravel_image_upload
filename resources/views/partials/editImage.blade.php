<div>
    <img class="img" src="{{asset('storage/'.$file->src)}}" alt="">
    <form action="/file/{{$file->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <input type="file" name="src"><br>
        <button type="submit">upload</button>
    </form>
</div>
