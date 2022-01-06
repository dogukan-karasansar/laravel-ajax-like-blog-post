<x-app-layout>
    <x-slot name="header">
        Blog Düzenle
    </x-slot>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('blogs.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label>Blog Adı</label>
                    <input type="text" class="form-control" name="title" required value="{{ $blog->title }}">
                </div>
                <div class="form-group">
                    <label for="">Fotoğraf</label>
                    @if ($blog->image)
                        <a href="{{ asset($blog->image) }}" target="_blank">
                            <img src="{{ asset($blog->image) }}" style="width: 20%">
                        </a>
                    @endif
                        <input type="file" name="image" class="form-control" value="{{ $blog->image }}">
                </div>
                <div class="form-group">
                    <label>Blog İçeriği</label>
                    <textarea name="description" id="my-editor" class="my-editor form-control" rows="4">{!! $blog->description !!}</textarea>
                </div>
                <div class="form-group m-3">
                    <label>Kategori</label>
                    <select name="category" class="from-control">
                        <option @if ($blog->category === 'sport') selected @endif value="sport">Spor</option>
                        <option @if ($blog->category === 'development') selected @endif value="development">Yazılım</option>
                        <option @if ($blog->category === 'life') selected @endif value="life">Günlük Hayat</option>
                        <option @if ($blog->category === 'music') selected @endif value="music">Müzik</option>
                    </select>
                    <label >Durum</label>
                    <select name="status" class="from-control">
                        <option @if($blog->status === 'active') selected @endif value="active">Aktif</option>
                        <option @if($blog->status === 'passive') selected @endif value="passive">Pasif</option>
                    </select>
                </div>


                <div class="form-group">
                    <button type="submit" class="btn btn-block btn-dark w-100">Blog güncelle</button>
                </div>

            </form>
        </div>
    </div>

    @push('scripts')
        <script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
        <script>
            CKEDITOR.replace('my-editor');
        </script>
    @endpush

</x-app-layout>
