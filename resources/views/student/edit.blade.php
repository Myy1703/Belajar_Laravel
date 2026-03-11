@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">{{ $errors->first() }}</div>
                    @endif
                    <h5 class="card-title">{{ $title ?? '' }}</h5>
                    <form action="{{ route('student.update', $student->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name *</label>
                                    <input type="text" placeholder="Enter your name" class="form-control" id="name"
                                        name="name" required value="{{ $student->name }}">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Email *</label>
                                    <input type="email" placeholder="Enter your email" name="email" id="email"
                                        class="form-control" required value="{{ $student->email }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Phone *</label>
                                    <input type="text" placeholder="Enter your phone" name="phone" id="phone"
                                        class="form-control" required value="{{ $student->phone }}">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label d-block">Gender *</label>
                                    <div class="position-relative">
                                        <select name="gender" id="gender" class="form-control" value="{{ $student->gender}}">
                                            <option value="">Choose Gender</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                        </select>
                                        <i id="arrowIcon" class="bi bi-chevron-down position-absolute"
                                            style="right: 10px; top: 50%; transform: translateY(-50%); pointer-events:none;"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Image</label>
                                <input type="file" name="image" id="image" class="form-control" accept="image/*">
                                <img src="{{asset('uploads/students/'.$student->image)}}" alt="" width="100">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Address</label>
                                    <textarea name="address" id="address" class="form-control" placeholder="Enter your address"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                                <button type="submit" class="btn btn-primary">Save</button>
                                <a href="{{ url()->previous() }}" class="btn btn-secondary">Back</a>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
