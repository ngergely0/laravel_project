@extends('layout')

@section('content')
<h1>Modellek</h1>

<div>
    <select id="maker-select" name="maker_id">
        <option value="">Válassz egy gyártót</option>
        @foreach($makers as $maker)
            <option value="{{ $maker->id }}">{{ $maker->name }}</option>
        @endforeach
    </select>
</div>

<div>
    

	@include('success')
	<a href="{{ route('models.create') }}" title="Új">Új hozzáadása</a>
	@foreach($models as $model)
		<div class="row {{ $loop->iteration % 2 == 0 ? 'even' : 'odd' }}">
			<div class="col id">{{ $model->id }}</div>
			<div class="col">{{$model->name}}</div>
			<div class="right">
				
				<!-- Bejelentkezett felhasználó ellenőrzése, csak ha a breeze csomagot telepítettük -->
                    <div class="col"><a href="{{ route('models.show', $model->id) }}"><button><i class="fa fa-binoculars" title="Mutat"></i>Mutat</button></a></div>
					<div class="col"><a href="{{ route('models.edit', $model->id) }}"><button><i class="fa fa-edit edit" title="Módosít"></i>Módosítás</button></a></div>
					<div class="col">
						<form action="{{ route('models.destroy', $model->id) }}" method="POST">
							@csrf
							@method('DELETE')
							<button type="submit" name="btn-del-model"><i class="fa fa-trash-can trash" title="Töröl"></i>Törlés</button>
						</form>
					</div>
				
			</div>
		</div>
	@endforeach
</div>
@endsection