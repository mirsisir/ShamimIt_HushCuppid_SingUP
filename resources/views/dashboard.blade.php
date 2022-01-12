<x-app-layout>


    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">



                    @if (session()->has('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>{{ session('success') }}</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <div class="col-6 m-auto">
                        <P>Change Background Image</P>
                        <br>

                        <form method="POST" action="{{route('background')}}" class=" p-2 " enctype="multipart/form-data" >
                            @csrf
                            Upload Background Image <br>
                            <input type="file" name="background" id="background" required>
                            <input type="submit" value="Change" class="btn btn-info">
                        </form>

                        <br>
                        <form  method="POST" action="{{route('login_image')}}"  class=" p-2 " enctype="multipart/form-data">
                            @csrf
                            Upload Form Image <br>
                            <input type="file" name="login_image" id="login_image" required>
                            <input type="submit" value="Change" class="btn btn-info">
                        </form>
                    </div>

                    <form action="{{'gen_settings'}}" method="POST" class="mt-4 col-6 m-auto"   >
                        @csrf
                        <label for="Web"> WebSite Name</label>
                        <input type="text" class="form-control" name="web_name" required>

                        <label for="Web"> WebSite Title</label>
                        <input type="text" class="form-control" name="title" required>

                        <label for="Web"> WebSite Sub Title</label>
                        <input type="text" class="form-control" name="sub_title" required>
                        <br>
                        <input type="submit" value="Update" class="btn btn-info float-end">
                    </form>

                    <br>
                    <br>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
