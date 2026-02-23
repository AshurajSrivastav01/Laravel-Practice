<div>
    <h1>Upload Files</h1>
    <form action="/upload" method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" name="file" id="file">
        <button type="submit">Upload</button>
    </form>
</div>
