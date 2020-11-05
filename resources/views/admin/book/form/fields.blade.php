<div class="form-group">
    <label for="name">Название</label>
    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ $book->name ?? '' }}">

    @error('name')
    <div class="alert alert-danger my-2">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <label for="desc">Описание</label>
    <input type="text" class="form-control @error('desc') is-invalid @enderror" id="desc" name="desc" value="{{ $book->desc ?? '' }}">

    @error('desc')
    <div class="alert alert-danger my-2">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <label for="author">Автор</label>
    <input type="text" class="form-control @error('author') is-invalid @enderror" id="author" name="author" value="{{ $book->author ?? '' }}">

    @error('author')
    <div class="alert alert-danger my-2">{{ $message }}</div>
    @enderror
</div>

@if(!isset($book))
<div class="form-group">
    <label for="photo">Изображение</label>
    <input type="file" class="form-control-file" id="photo" name="photo">
</div>
@endif
