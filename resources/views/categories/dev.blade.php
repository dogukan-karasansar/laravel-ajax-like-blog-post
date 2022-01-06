<x-header-layout>
    <x-slot name="title">
        Yazılım
    </x-slot>
    <div class="col-2" >
    </div>
    <div class="col-8" >
        @foreach($devs as $dev)
        <div class="card mb-5 mt-3 shadow-lg">
            <img class="card-img-top" style="height: 370px;" src="{{ asset($dev->image) }}" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">{{ $dev->title }}</h5>
              <p class="card-text">{!! Str::words($dev->description, 10,' >>>'  ) !!} <small><a class="text-reset" href="{{ route('resume', [$dev->category, $dev->slug]) }}">devamını oku</a></small></p>
              <p class="card-text"><small class="text-muted"><i class="fa fa-calendar-alt mr-2"></i>{{ $dev->created_at->format('d-m-Y') }} tarihinde oluşturuldu</small></p>
            </div>
          </div>
        @endforeach
    </div>
    <div class="col-2">
    </div>
    @push('scripts')
        <script>
          
        </script>
    @endpush
    
</x-header-layout>
