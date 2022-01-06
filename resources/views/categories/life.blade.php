<x-header-layout>
    <x-slot name="title">
        Yaşam
    </x-slot>
    <div class="col-2" >
    </div>
    <div class="col-8" >
        @foreach($lifes as $life)
        <div class="card mb-5 mt-3 shadow-lg">
            <img class="card-img-top" style="height: 370px;" src="{{ asset($life->image) }}" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">{{ $life->title }}</h5>
              <p class="card-text">{!! Str::words($life->description, 10,' >>>'  ) !!} <small><a class="text-reset" href="{{ route('resume', [$life->category, $life->slug]) }}">devamını oku</a></small></p>
              <p class="card-text"><small class="text-muted"><i class="fa fa-calendar-alt mr-2"></i>{{ $life->created_at->format('d-m-Y') }} tarihinde oluşturuldu</small></p>
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
