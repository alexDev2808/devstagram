@extends('layouts.app')

@section('titulo')
	Registrate en DevStagram
@endsection

@section('contenido')

	<div class="md:flex md:justify-center md:gap-6 md:items-center">
		<div class="md:w-5/12 p-5">
			<img src="{{ asset('img/register.jpg') }}" alt="Imagen registrar">
		</div>

		<div class="md:w-4/12 bg-white p-6 rounded-lg shadow-xl">
			<form action="/crear-cuenta" method="POST">
				@csrf
				<div class="mb-5">
					<label for="name" class="mb-2 block uppercase text-gray-500 font-bold">
						Nombre
					</label>
					<input type="text" name="name" id="name" placeholder="Tu nombre" class="border p-3 w-full rounded-lg">
				</div>
				<div class="mb-5">
					<label for="username" class="mb-2 block uppercase text-gray-500 font-bold">
						Username
					</label>
					<input type="text" name="username" id="username" placeholder="Tu nombre de usuario" class="border p-3 w-full rounded-lg">
				</div>
				<div class="mb-5">
					<label for="email" class="mb-2 block uppercase text-gray-500 font-bold">
						Email
					</label>
					<input type="email" name="email" id="email" placeholder="Tu correo electronico" class="border p-3 w-full rounded-lg">
				</div>
				<div class="mb-5">
					<label for="password" class="mb-2 block uppercase text-gray-500 font-bold">
						Contrasena
					</label>
					<input type="password" name="password" id="password" placeholder="Tu contrasena" class="border p-3 w-full rounded-lg">
				</div>
				<div class="mb-5">
					<label for="password_confirmation" class="mb-2 block uppercase text-gray-500 font-bold">
						Repetir Contrasena
					</label>
					<input type="password" name="password_confirmation" id="password_confirmation" placeholder="Repite tu contrasena" class="border p-3 w-full rounded-lg">
				</div>

				<input 
					type="submit"
					value="Crear Cuenta" 
					class="bg-sky-600 hover:bg-sky-700 transition-colors uppercase font-bold w-full p-3 text-white rounded-lg" 
				>
			</form>
		</div>
	</div>

@endsection
