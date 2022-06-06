<div>
    <form action="{{route('admin.posts.store')}}" method="POST">
        @csrf
        <h3>Post Info:</h3>
        <div>
            <label for="title">Title</label>
            <input type="text" name="title">
        </div>
        <div>
            <label for="content">Description</label>
            <input type="text" name="content">
        </div>
        <div>
            <select name="category_id" id="">
                <option value="">select category</option>
                @foreach($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
        </div>
        <div>
            <h3>Tags:</h3>
            @foreach($tags as $tag)
            <div>{{$tag->name}}:</div>
            <input type="checkbox" value="{{$tag->id}}" name="tags[]">
            @endforeach
        </div>
        <button type="submit">submit</button>
    </form>
</div>