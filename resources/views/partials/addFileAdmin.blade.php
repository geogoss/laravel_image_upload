<section>
    <form action="/file" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="src" ><br>
        <button type="submit">upload</button>
    </form>
</section>