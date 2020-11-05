<div class="form-group">
    <label for="name">Имя</label>
    <input readonly type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ $review->name ?? '' }}">
</div>

<div class="form-group">
    <label for="desc">Email</label>
    <input readonly type="text" class="form-control @error('desc') is-invalid @enderror" id="desc" name="email" value="{{ $review->email ?? '' }}">
</div>

<div class="form-group">
    <label for="author">Текст</label>
    <input type="text" class="form-control @error('author') is-invalid @enderror" id="author" name="text" value="{{ $review->text ?? '' }}">
</div>