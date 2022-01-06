<x-app-layout>
    <x-slot name="header">
        Bloglar
    </x-slot>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">
                <a href="{{ route('blogs.create') }}" class="btn btn-sm btn-success"><i class="fa fa-plus""></i> Blog Oluştur</a>
            </h5>

            <table class=" table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">id</th>
                                <th scope="col">Başlık</th>
                                <th scope="col">Kategori</th>
                                <th scope="col">Fotoğraf</th>
                                <th scope="col">Açıklama</th>
                                <th scope="col">Durum</th>
                                <th scope="col">İşlemler</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($blogs as $blog)
                                <tr>
                                    <th scope="row">{{ $blog->id }}</th>
                                    <td>{{ $blog->title }}</td>
                                    <td>{{ $blog->category }}</td>
                                    <td> @if ($blog->image)
                                        <a href="{{ asset($blog->image) }}" target="_blank" class="btn btn-sm btn-light">Görüntüle</a>
                                    @endif
    </td>
                                    <td>{!! $blog->description !!}</td>
                                    <td>
                                        @switch($blog->status)
                                        @case('active')
                                        <span class="badge alert-success">Aktif</span>
                                        @break
                                        @case('passive')
                                        <span class="badge alert-danger">Pasif</span>
                                        @break
                                        @endswitch
                                    </td>
                                    <td>
                                        <a href="{{ route('blogs.destroy',$blog->id) }}" class="btn btn-sm btn-danger"><i class="fa fa-times"></i></a>
                                        <a href="{{ route('blogs.edit',$blog->id) }}" class="btn btn-sm btn-primary" style="float:left;"><i
                                                class="fa fa-pen"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        </table>
                        {{ $blogs->links() }}
        </div>
    </div>

</x-app-layout>
