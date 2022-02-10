<div>


    <form action="#">
        <div class="h5 font-weight-bold text-center mb-3">Hush Cupid Registration </div>
            @if($page == 1)
            <div class="firstPage">

                <div class="form-group d-flex align-items-center">
                    <div class="icon"><span class="far fa-user"></span></div>
                    <input autocomplete="off" type="text" class="form-control  @error('name') border border-danger @enderror" placeholder=" Your First Name" wire:model="name">
                </div>
                <div class="form-group d-flex align-items-center">
                    <div class="icon"><span class="far fa-user"></span></div>
                    <input autocomplete="off" type="text" class="form-control @error('nick_name') border border-danger @enderror" placeholder=" Your Nickname" wire:model="nick_name">
                </div>
                <div class="form-group d-flex align-items-center">
                    <input autocomplete="off" type="email" class="form-control @error('email') border border-danger @enderror" placeholder="Email" wire:model="email">
                </div>

                <div class="form-group d-flex align-items-center">
                    <input autocomplete="off" type="password" style="width: 100%" class="form-control @error('password') border border-danger @enderror"
                           placeholder="Password" wire:model="password">
                    <div class="icon btn"><span class="fas fa-eye-slash"></span></div>
                </div>
            </div>
            <div class="btn btn-primary mb-3 mt-4" wire:click="increment">Next</div>

        @else
            <div class="secondPage">
                <div class="form-group d-flex align-items-center  ">
                    <span>I am a</span> <br>

                    <span class="m-0 p-0 justify-between">
                    <label><input type="radio" name="gender" wire:model="sex" value="male" required>Male</label>

                    <label><input type="radio" name="gender" wire:model="sex" value="female">Female</label>

                    <label><input type="radio" name="gender" wire:model="sex" value="other">Couple</label>
                </span>
                </div>
                <div class="form-group d-flex align-items-center  ">
                    <label for="sex" >Looking for a</label>
                    <div class="form-check form-check-inline ms-1">
                        <input class="form-check-input" wire:model="looking" type="checkbox" id="inlineCheckbox1" value="Male">
                        <label class="form-check-label" for="inlineCheckbox1">Male</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="Female">
                        <label class="form-check-label" wire:model="looking" for="inlineCheckbox2">Female</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="Couple" >
                        <label class="form-check-label" wire:model="looking" for="inlineCheckbox3">Couple</label>
                    </div>
                </div>
                <div class="form-group d-flex align-items-center row">

                    <div class="col-6">
                        <label for="birth">Your Date of Birth</label> <br>
                        <input autocomplete="off" type="date" class="form-control" placeholder="date" wire:model="birth_day">
                    </div>
                    <div class="col-6">
                        <label for="birth">Post Code</label> <br>
                        <input autocomplete="off" type="text" class="form-control
                        @error('post_code') border border-danger @enderror" placeholder=" Post Code" wire:model="post_code">
                    </div>

                </div>
                <div class="form-group d-flex align-items-center row">
                    <div class="col-6">
                        <input autocomplete="off" type="text" class="form-control @error('city') border border-danger @enderror" placeholder=" City" wire:model="city">
                    </div>
                    <div class="col-6 ps-2">
                        <input autocomplete="off" type="text" class="form-control
                        @error('country') border border-danger @enderror" placeholder="Country" wire:model="country">
                    </div>
                </div>


            </div>
            <div class="btn btn-primary mb-3 mt-4" wire:click="SingUp">Signup</div>

        @endif

        <div class="terms mb-2"> By clicking "Signup", you acknowledge that you have read the <a href="#">Privacy
                Policy</a> and agree to the <a href="#">Terms of Service</a>.
        </div>
        <div class="connect border-bottom mt-4 mb-4"></div>

    </form>


</div>
