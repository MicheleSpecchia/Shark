<x-layout>
    @include('partials._navbar')

    <div class="container-xl px-4 mt-4">
    <!-- Account page navigation-->
    
    <div class="row">
        <div class="col-xl-4">
            <!-- Profile picture card-->
            <div class="card mb-4 mb-xl-0">
                <div class="card-header">Profile Picture</div>
                <div class="card-body text-center">
                    <!-- Profile picture image-->
                    <img class="img-account-profile rounded-circle mb-2" src="{{ asset(auth()->user()->avatar) }}" alt="">
                    <!-- Profile picture help block-->
                    <div class="small font-italic text-muted mb-4">JPG or PNG no larger than 5 MB</div>
                    <!-- Profile picture upload button-->
                    
                    <form method="POST" enctype="multipart/form-data" action="{{ route('avatar.update') }}">
                        @csrf
                        <input type="file" name="avatar">
                        <br><br>
                        <button class="btn btn-primary" type="submit">Upload new image</button>
                    </form>


                    
                </div>
            </div>
        </div>
        <div class="col-xl-8">
            <!-- Account details card-->
            <div class="card mb-4">
                <div class="card-header">Account Details</div>
                <div class="card-body">



                <form method="POST" action="{{ route('profile.update') }}">
                    @csrf
                    <!-- Form Row-->
                    <div class="row gx-3 mb-3">
                        <!-- Form Group (first name)-->
                        <div class="col-md-6">
                            <label class="small mb-1" for="inputFirstName">First name</label>
                            <input class="form-control" name="first_name" id="inputFirstName" type="text" placeholder="Enter your first name" value="{{ auth()->user()->nome }}">
                        </div>
                        <!-- Form Group (last name)-->
                        <div class="col-md-6">
                            <label class="small mb-1" for="inputLastName">Last name</label>
                            <input class="form-control" name="last_name" id="inputLastName" type="text" placeholder="Enter your last name" value="{{ auth()->user()->cognome }}">
                        </div>
                    </div>
                    <!-- Form Row -->
                    <div class="row gx-3 mb-3">
                        <!-- Form Group (location)-->
                        <div class="col-md-6">
                            <label class="small mb-1" for="inputLocation">Indirizzo</label>
                            <input class="form-control" name="location" id="inputLocation" type="text" placeholder="Enter your location" value="{{ auth()->user()->indirizzo }}">
                        </div>
                    </div>
                    <!-- Form Group (email address)-->
                    <div class="mb-3">
                        <label class="small mb-1" for="inputEmailAddress">Email</label>
                        <input class="form-control" name="email" id="inputEmailAddress" type="email" placeholder="Enter your email address" value="{{ auth()->user()->email }}">
                    </div>
                    <!-- Save changes button-->
                    <button class="btn btn-primary" type="submit">Save changes</button>
                </form>




                </div>
            </div>
        </div>
    </div>
</div>


</x-layout>
