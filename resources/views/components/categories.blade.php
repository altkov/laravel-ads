<select name="category_id" class="form__select @error('category_id') form__select @enderror">
    <option value="">Выберите категорию</option>

    @foreach ($categories as $category)
        <option @if ($selected == $category['id'])
            selected="selected" 
        @endif value="{{ $category['id'] }}">{{ $category['name'] }}</option>
    @endforeach
</select>