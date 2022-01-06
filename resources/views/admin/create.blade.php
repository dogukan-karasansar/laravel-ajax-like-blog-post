<x-app-layout>
    <x-slot name="header">
        Blog Oluştur
    </x-slot>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('blogs.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Blog Adı</label>
                    <input type="text" class="form-control" name="title" required>
                </div>
                <div class="form-group">
                    <label for="">Fotoğraf</label>
                    <input type="file" name="image" class="form-control">
                </div>
                <div class="form-group">
                    <label>Blog İçeriği</label>
                    <textarea name="description" id="my-editor" class="my-editor form-control" rows="4"></textarea>
                </div>
                <div class="form-group m-3">
                    <label>Kategori</label>
                    <select name="category" class="from-control">
                        <option value="sport">Spor</option>
                        <option value="development">Yazılım</option>
                        <option value="life">Günlük Hayat</option>
                        <option value="music">Müzik</option>
                    </select>
                </div>


                <div class="form-group">
                    <button type="submit" class="btn btn-block btn-dark w-100">Blog oluştur</button>
                </div>

            </form>
        </div>
    </div>

    @push('scripts')
        <script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
        <script>
            var options = {
              filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
              filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
              filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
              filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
            };
          </script>
          <script>
              CKEDITOR.replace('my-editor', options);
              </script>
    @endpush

</x-app-layout>
