<h1>Create Post</h1>

<form action="{{ route('posts.store') }}"" method="POST">
    @csrf
    <div>
        <label for="title">Title</label>
        <input type="text" name="title" id="title" value={{ old('title') }}>
        @error('title')
            <div class="text-danger">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div>
        <label for="content" ></label>
        <textarea name="content" id="content" value= {{ old('content') }} cols="30" rows="10"></textarea>
        @error('content')
            <div class="text-danger">
                {{ $message }}
            </div>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary">Save</button>



</form>
