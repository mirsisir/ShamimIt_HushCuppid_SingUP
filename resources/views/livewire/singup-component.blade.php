<div>
    {{-- The Master doesn't talk, he acts. --}}
    <div class="m-4" >

        @if($page ==1)
            <label for="name">Your First Name</label>
            <input type="text" class="form-control  @error($name) is-invalid @enderror"  wire:model="name">
            <label for="name">* Your Nickname</label>
            <input type="text" class="form-control @error($nick_name) is-invalid @enderror"  wire:model="nick_name">
            <label for="name">*  Your Email</label>
            <input type="email" class="form-control @error($email) is-invalid @enderror" wire:model="email">

            <label for="name">*  Your Password</label>

            <input type="password" class="form-control @error($password) is-invalid @enderror" wire:model="password">
            <br>
            <span class="">* Terms of Service</span> <br>
            <input type="checkbox"  >
            I have read and agree to the Terms.
            <br>
        @else
            <div id="step-2" >
                <span>* I am a</span> <br>

                <label><input type="radio" name="gender" value="male" required>Male</label>

                <label><input type="radio" name="gender" value="female">Female</label>

                <label><input type="radio" name="gender" value="other">Couple</label>
                <br>
                <span>* Looking for a</span>
                <br>

                <label class="checkbox-inline">
                    <input type="checkbox" name="looking[]" required value="Female">Female
                </label>
                <label class="checkbox-inline">
                    <input type="checkbox" name="looking[]"  value="Male">Male
                </label>

                <label class="checkbox-inline">
                    <input type="checkbox"  name="looking[]" value="Couple">Couple
                </label>

                <div class="row mt-1">
                    <div class="col-6 p-2">
                        <label for="birth"> Your Date of Birth</label>
                        <input type="date" required  name="birth" id="birth" class="form-control">
                    </div>
                    <div class="col-6 p-2">
                        <label for="birth"> City</label>
                        <input type="text"  required name="city" id="city" class="form-control">
                    </div>
                </div>
                <div class="row mt-1">
                    <div class="col-6 p-2">
                        <label for="birth"> Your Country</label>
                        <input type="text" required  name="country" id="country" class="form-control">
                    </div>
                    <div class="col-6 p-2">
                        <label for="birth">* Post Code</label>
                        <input type="text" required  name="PostCode" id="PostCode" class="form-control">
                    </div>
                </div>
{{--                <p>* About Me</p>--}}
{{--                <textarea name="about_me"  required id="about_me" cols="40" rows="5"></textarea>--}}
                <br>
                <p>* Upload A Photo</p>
                <input type="file" name="photo" id="photo"  required >

                <br>
                <input type="submit" value="SingUp"
                       class="float-end btn btn-lg btn-info ">
            </div>

            @endif

            <br>

                @if($page ==1)
                <button wire:click="increment" class="float-end btn btn-info">next</button>

            @endif


    </div>

</div>
