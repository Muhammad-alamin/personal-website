<div class="card-body">
    <div class="form-group">
        <label for="name">Project Name</label>
        <input type="text" name="name" class="form-control" id="name" value="{{old('name', isset($portfolio)?$portfolio->name:null)}}" placeholder="Enter Project Name">
        @error('name')<i class="text-danger">{{$message}}</i>@enderror
    </div>

    <div class="form-group">
        <label for="category">Project Category</label>
        <input type="text" name="category" class="form-control" id="category" value="{{old('category', isset($portfolio)?$portfolio->category:null)}}" placeholder="Enter Project Category">
        @error('category')<i class="text-danger">{{$message}}</i>@enderror
    </div>

    <div class="form-group">
        <label for="description">Description</label>
        <textarea type="text" name="description" class="form-control" id="description" placeholder="Enter Category Description">{{old('description',isset($portfolio)?$portfolio->description:null)}}</textarea>
    </div>

    <div class="form-group">
        <label for="Project_url">Project URL</label>
        <input type="text" name="Project_url" class="form-control" id="Project_url" value="{{old('Project_url', isset($portfolio)?$portfolio->Project_url:null)}}" placeholder="Enter Project URL ">
        @error('Project_url')<i class="text-danger">{{$message}}</i>@enderror
    </div>

    <div class="form-group">
        <label for="client">Client/Company Name</label>
        <input type="text" name="client" class="form-control" id="client" value="{{old('client', isset($portfolio)?$portfolio->client:null)}}" placeholder="Enter Client/Company Name">
        @error('client')<i class="text-danger">{{$message}}</i>@enderror
    </div>

    <div class="form-group" >
        <label for="thumbnailImage">Thumbnail Image</label>
        <input type="file" name="thumbnailImage" class="form-control" id="thumbnailImage" value="{{old('thumbnailImage', isset($portfolio)?$portfolio->thumbnailImage:null)}}" placeholder="Upload thumbnail image ">
        @error('thumbnailImage')<i class="text-danger">{{$message}}</i>@enderror
    </div>
    @if (isset($portfolio))
        <img src="{{asset($portfolio->thumbnailImage)}}" width="150px;">
    @endif
    <div class="form-group" >
        <label for="sliderImages">Slider Images</label>
        <input type="file" name="sliderImages[]" multiple class="form-control" id="sliderImages" value="{{old('sliderImages', isset($portfolio)?$portfolio->sliderImages:null)}}" placeholder="Upload Singe/Multiple slider image ">
        @error('sliderImages')<i class="text-danger">{{$message}}</i>@enderror
    </div>

    @if (isset($portfolio))
            @php($slider = json_decode($portfolio->sliderImage))
                @foreach($slider as $eachSlider)
                <img src="{{asset('images/sliders/'. $eachSlider)}}" width="150px;">
                @endforeach

    @endif
</div>
<!-- /.card-body -->
