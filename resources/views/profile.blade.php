@extends('layouts.main')

@section('content')
    <div class="container-fluid" style="padding: 0 20%;">
        <p class="p-2 mt-4" style="background-color: rgb(205, 205, 205); text-align: center;"><b>Profile</b></p>
        <form>
            @csrf
            <div class="col-12 py-4" style="display: flex; justify-content: center;">
                <img src="{{ $user->userPhoto }}" alt="Profile Picture" style="width: 100px; height: 100px; border-radius: 100%;">
            </div>
            <div class="col-12">
                <label class="form-label">Name</label><br>
                <input type="text" class="form-control" value="{{ $user->userName }}" name="userName" readonly>
            </div>
            <div class="col-12">
                <label class="form-label">Email</label><br>
                <input type="text" class="form-control" value="{{ $user->userEmail }}" name="userEmail" readonly>
            </div>

            <div class="col-12">
                <label class="form-label">Gender</label><br>
                <input type="text" class="form-control" value="{{ $user->userGender }}" name="userGender" readonly>
            </div>

            <div class="col-12">
                <label class="form-label">Date Of Birth</label>
                <input type="date" class="form-control" value="{{ $user->userDoB }}" name="userDOB" readonly>
            </div>

            <div class="col-12">
                <label class="form-label">Country</label><br>
                <input type="text" class="form-control" value="{{ $user->userCountry }}" name="userCountry" readonly>
            </div>
        </form>
    </div>
@endsection
