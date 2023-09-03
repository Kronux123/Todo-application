<div >
    <div class="container-fluid p-3 mt-3 rounded " style="height: 100vh">
        <div class="row">
            <div class="col-3 ">
                <div class="container rounded bg-dark p-3">
                    @include('messages.success')
                    <form wire:submit='store'>
                        <div class="form-floating">
                            <input wire:model='title' type="text" class="form-control" id="title"
                                placeholder="title">
                            <label for="title">Title</label>
                        </div>
                        @error('title')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <div class="form-group mt-3">
                            <input wire:model='image' type="file" accept="image/png, image/jpeg" src=""
                                alt="" class="form-control">

                        </div>
                        @error('image')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror

                        <div class="form-group mt-3">
                            <button class="btn btn-success btn-sm">Add</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col">
                <div class="container d-flex m-3" style="flex-wrap: wrap">
                    @foreach ($images as $image)
                        <div class="card m-3" style="width: 18rem;">
                            <img src="{{Storage::url($image->image)}}" class="card-img-top" alt="..." style="background-size: contain;">
                            <div class="card-body">
                                <p>{{$image->title}}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

    </div>
</div>
