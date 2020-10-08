@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nameyomi" class="col-md-4 col-form-label text-md-right">{{ __('Nameyomi') }}</label>

                            <div class="col-md-6">
                                <input id="nameyomi" type="text" class="form-control @error('nameyomi') is-invalid @enderror" name="nameyomi" value="{{ old('nameyomi') }}" required autocomplete="nameyomi" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="age" class="col-md-4 col-form-label text-md-right">{{ __('age') }}</label>

                            <div class="col-md-6">
                                <input id="age" type="number" min="1" class="form-control @error('age') is-invalid @enderror" name="age" value="{{ old('age') }}" required autocomplete="age" autofocus>

                            </div>
                        </div>

                        <div class="form-group">
   <label for="age" class="col-md-4 col-form-label text-md-right">{{ __('subject') }}</label>
  <div class="col-md-6">
 <input name="subject" data-toggle="select" class="form-control @error('age') is-invalid @enderror" name="subject" value="{{ old('subject') }}" required autocomplete="subject" autofocus>
  <option>C/C+</option>
  <option>Python</option>
  <option>JavaScript</option>
  <option>SQL</option>
  <option>C#</option>
  <option>Java</option>
  <option>HTML/CSS</option>
  <option>PHP</option>
  <option>VB</option>
  </select>
  </div>

  <div class="form-group">
   <label for="it" class="col-md-4 col-form-label text-md-right">{{ __('it') }}</label>
  <div class="col-md-6">
 <input name="it" data-toggle="select" class="form-control @error('it') is-invalid @enderror" name="it" value="{{ old('it') }}" required autocomplete="it" autofocus>
  <option>未経験</option>
  <option>１年未満</option>
  <option>１年以上３年未満</option>
  <option>３年以上</option>
  </select>
  </div>


                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
