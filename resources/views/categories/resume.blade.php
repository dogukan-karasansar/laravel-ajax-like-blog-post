<x-header-layout>
    <x-slot name="title">
        {{ $resumeBlog->title }}
    </x-slot>
    <div class="col-2" >
    </div>
    <div class="col-8" >
        <div class="card mb-5 mt-3 shadow-lg">
            <img class="card-img-top" style="height: 370px;" src="{{ asset($resumeBlog->image) }}" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">{{ $resumeBlog->title }}</h5>
              <p class="card-text">{!! $resumeBlog->description !!}</p>
              <p class="card-text"><small class="text-muted"><i class="fa fa-calendar-alt mr-2"></i>{{ $resumeBlog->created_at->format('d-m-Y') }} tarihinde oluşturuldu</small></p>
            </div>
          </div>
    </div>
    <div class="col-2">
    </div>
    @push('scripts')
        <script>
          
        </script>
    @endpush
</x-header-layout>
