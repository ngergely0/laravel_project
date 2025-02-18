@extends('layout')

@section('content')
<h1>Üzemanyagok</h1>
<div>
    <!-- Happiness is not something readymade. It comes from your own actions. - Dalai Lama -->
	@include('success')
    <a href="{{ route('fuels.create') }}" title="Új">Új hozzáadása</a>
	@foreach($fuels as $fuel)
		<div class="row {{ $loop->iteration % 2 == 0 ? 'even' : 'odd' }}">
			<div class="col id">{{ $fuel->id }}</div>
			<div class="col">{{$fuel->name}}</div>
			<div class="right">
				
				<!-- Bejelentkezett felhasználó ellenőrzése, csak ha a breeze csomagot telepítettük -->
                    <div class="col"><a href="{{ route('fuels.show', $fuel->id) }}"><button><i class="fa fa-binoculars" title="Mutat"></i>Mutat</button></a></div>
					<div class="col"><a href="{{ route('fuels.edit', $fuel->id) }}"><button><i class="fa fa-edit edit" title="Módosít"></i>Módosítás</button></a></div>
					<div class="col">
						<form action="{{ route('fuels.destroy', $fuel->id) }}" method="POST">
							@csrf
							@method('DELETE')
							<button type="submit" name="btn-del-fuel"><i class="fa fa-trash-can trash" title="Töröl"></i>Törlés</button>
						</form>
					</div>
				
			</div>
		</div>
	@endforeach
</div>
@endsection