<select class="flex-1 appearance-none bg-transparent w-48 py-2 pl-3 pr-9 text-sm font-semibold">
    <option value="category" disabled selected>Category
    </option>
    @foreach($categories as $category )
    <option value="{{ $category->title }}">{{ $category->title }}</option>
    @endforeach
</select>
