<x-app-layout>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                   <P>Change Background Image</P>
                    <br>

                    <form action="{{route('background')}}" class=" p-2 " enctype="multipart/form-data" >
                        @csrf
                        Upload Background Image <br>
                        <input type="file" name="background" id="background">
                        <input type="submit" value="Change" class="btn btn-info">
                    </form>

                    <br>
                    <form action=""  class=" p-2 ">
                        Upload Form Image <br>
                        <input type="file" name="form_image" id="form_image">
                        <input type="submit" value="Change" class="btn btn-info">
                    </form>


                </div>
            </div>
        </div>
    </div>
</x-app-layout>
