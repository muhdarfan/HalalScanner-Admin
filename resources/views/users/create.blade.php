@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Create User</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('users.store') }}" method="POST">
                        @csrf

                        <div class="form-group mb-3 ">
                            <label for="user_name" class="form-label">Full Name</label>
                            <div>
                                <input id="user_name" name="user_name" type="text"
                                       class="form-control @error('user_name') is-invalid @enderror"
                                       placeholder="Enter User's Full Name" value="{{ old('user_name') }}"/>
                                @error('user_name')
                                <span class="invalid-feedback">
                                    {{ $message }}
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group mb-3 ">
                            <label for="user_username" class="form-label">Username</label>
                            <div>
                                <input id="user_username" type="text" maxlength="32" name="user_username"
                                       class="form-control @error('user_username') is-invalid @enderror"
                                       placeholder="Enter username" value="{{ old('user_username') }}"/>
                                @error('user_username')
                                <span class="invalid-feedback">
                                    {{ $message }}
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group mb-3 ">
                            <label for="user_email" class="form-label">Email address</label>
                            <div>
                                <input id="user_email" name="user_email" type="email"
                                       class="form-control @error('user_email') is-invalid @enderror"
                                       aria-describedby="emailHelp" placeholder="Enter email"
                                       value="{{ old('user_email') }}"/>
                                <small class="form-hint">We'll never share your email with anyone else.</small>
                                @error('user_email')
                                <span class="invalid-feedback">
                                    {{ $message }}
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group mb-3 ">
                            <label for="user_password" class="form-label">Password</label>
                            <div>
                                <input id="user_password" name="user_password" type="password"
                                       class="form-control @error('user_password') is-invalid @enderror"
                                       placeholder="Password"/>
                                <small class="form-hint">
                                    Your password must be 8-20 characters long, contain letters and numbers, and must
                                    not contain spaces, special characters, or emoji.
                                </small>

                                @error('user_password')
                                <span class="invalid-feedback">
                                    {{ $message }}
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group mb-3 ">
                            <label for="user_phone" class="form-label">Phone Number</label>
                            <div>
                                <input id="user_phone" type="text" maxlength="32" name="user_phone"
                                       class="form-control @error('user_phone') is-invalid @enderror"
                                       placeholder="Enter user's phone number" value="{{ old('user_phone') }}"/>

                                @error('user_phone')
                                <span class="invalid-feedback">
                                    {{ $message }}
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group mb-3 ">
                            <label for="user_role" class="form-label">Role</label>
                            <div>
                                <select id="user_role" name="user_role"
                                        class="form-select @error('user_role') is-invalid @enderror">
                                    <option value='' hidden selected>Please select</option>
                                    <option value="1" @selected(old('user_role') == 1)>Public Account</option>
                                    <option value="2" @selected(old('user_role') == 2)>Administrator</option>
                                </select>

                                @error('user_role')
                                <span class="invalid-feedback">
                                    {{ $message }}
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
