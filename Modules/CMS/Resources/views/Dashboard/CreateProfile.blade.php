@extends('cms::layouts.main-dashboard')

@section('content')
<div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <!-- <div class="col-lg-5 d-none d-lg-block bg-register-image"></div> -->
                    <div class="col-lg-12">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Profile!</h1>
                                <livewire:cms::pages.dashboard />
                            </div>
                            <form class="user">
                                
                                <div class="form-group row">
                                    
                                    <x-input divSize="col-sm-3" type="text" name="testing" id="exampleFirstName" placeholder="Name" />
                                    <x-input divSize="col-sm-3" type="text" name="phone" id="exampleFirstName" placeholder="Phone" />
                                    <x-input divSize="col-sm-3" type="text" name="City" id="exampleFirstName" placeholder="City" />
                                    <x-input divSize="col-sm-3" type="text" name="City" id="exampleFirstName" placeholder="DropDown" />
                                    
                                </div>

                                <a href="" class="btn btn-primary btn-user btn-block">
                                    Register Profile
                                </a>
                            </form>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
@endsection
