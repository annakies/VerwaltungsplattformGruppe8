@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-4/12 bg-white p-6 rounded-lg">
            <form action="{{ route('sRegister') }}" method="post">
                @csrf
                <div class="mb-4">
                            <label for="zeitraum" class="sr-only">Zeitraum</label>
                            <input type="text" name="faz" id="faz" placeholder="Frühestens am" class="br-gray-100 border-2 w-full p-4 rounded-lg" value="{{ old('faz') }}">
                                                            @error('faz')
                                    <span class="text-red-500 mt-2 text-sm" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <input type="text" name="sez" id="sez" placeholder="Spätestestens bis" class="br-gray-100 border-2 w-full p-4 rounded-lg" value="{{ old('sez') }}">
                                                            @error('sez')
                                    <span class="text-red-500 mt-2 text-sm" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="mb-4">
                            <label for="name" class="sr-only">Name</label>
                            <input type="text" name="name" id="name" placeholder="Vor-& Nachname" class="br-gray-100 border-2 w-full p-4 rounded-lg" value="{{ old('name') }}">
                                                            @error('name')
                                    <span class="text-red-500 mt-2 text-sm" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="mb-4">
                            <label for="straße" class="sr-only">E-Mail</label>
                            <input type="text" name="straße" id="straße" placeholder="Straße" class="br-gray-100 border-2 w-full p-4 rounded-lg" value="{{ old('straße') }}">

                                  @error('Straße')
                                    <span class="text-red-500 mt-2 text-sm" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="mb-4">
                            <label for="hausnummer" class="sr-only">E-Mail</label>
                            <input type="text" name="hausnummer" id="hausnummer" placeholder="Hausnummer" class="br-gray-100 border-2 w-full p-4 rounded-lg" value="{{ old('hausnummer') }}">

                                  @error('hausnummer')
                                    <span class="text-red-500 mt-2 text-sm" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="mb-4">
                            <label for="ortsname" class="sr-only">E-Mail</label>
                            <input type="text" name="ortsname" id="ortsname" placeholder="Ort" class="br-gray-100 border-2 w-full p-4 rounded-lg" value="{{ old('ortsname') }}">

                                  @error('ortsname')
                                    <span class="text-red-500 mt-2 text-sm" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="mb-4">
                            <label for="plz" class="sr-only">E-Mail</label>
                            <input type="text" name="plz" id="plz" placeholder="Postleitzahl" class="br-gray-100 border-2 w-full p-4 rounded-lg" value="{{ old('plz') }}">

                                  @error('plz')
                                    <span class="text-red-500 mt-2 text-sm" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="mb-4">
                            <label for="email" class="sr-only">E-Mail</label>
                            <input type="text" name="email" id="email" placeholder="E-Mail" class="br-gray-100 border-2 w-full p-4 rounded-lg" value="{{ old('email') }}">
                                  @error('email')
                                    <span class="text-red-500 mt-2 text-sm" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="mb-4">
                            <label for="password" class="sr-only">Password</label>
                            <input type="password" name="password" id="password" placeholder="Passwort" class="br-gray-100 border-2 w-full p-4 rounded-lg" value="">
                              @error('password')
                                    <span class="text-red-500 mt-2 text-sm" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="mb-4">
                            <label for="password_confirmation" class="sr-only">Passwort wiederholen</label>
                            <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Passwort erneut eingeben" class="br-gray-100 border-2 w-full p-4 rounded-lg" value="">
                              @error('password_confirmation')
                                    <span class="text-red-500 mt-2 text-sm" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                <div>
                    <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full">Register</button>
                </div>
            </form>
        </div>
    </div>
@endsection
