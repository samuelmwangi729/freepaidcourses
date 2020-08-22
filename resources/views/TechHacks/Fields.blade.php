@csrf
<div class="row">
    <div class="col-sm-6">
        <div class="form-group">
            <label for="Title" class="label-control">
                Hack Title
            </label>
            <input type="text" class="form-control" name="Title" placeholder="Enter the Title" value="{{ $Hack->Title ?? '' }}">
        </div>
        {{-- End form-group --}}
    </div>
    {{-- End col-sm-6 --}}
    <div class="col-sm-6">
        <div class="form-group">
            <label for="Title" class="label-control">
                Intro Text
            </label>
            <input type="text" class="form-control" name="IntroText" placeholder="Enter the Title" value="{{ $Hack->IntroText ?? '' }}">
        </div>
        {{-- End form-group --}}
    </div>
    {{-- End col-sm-6 --}}
    <div class="col-sm-6">
        <div class="form-group">
            <label class="label-control" for="Category">
                Category
            </label>
            <select name="Category" class="form-control">
                <option label="--Select Hacks Category"></option>
                @foreach ($Categories  as $category)
                    <option value="{{ $category->Category  }}" @if($Hack) @if($category->Category==$Hack->Category) selected @endif @endif>{{ $category->Category }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label for="Featured Image" class="label-control">
                Image
            </label>
            <input type="file" name="FeaturedImage" id="" class="form-control">
        </div>
    </div>
    <div class="col-sm-12">
        <textarea id="summernote" class="form-control" name="Description">{{ $Hack->Description ?? '' }}</textarea>
    </div>
</div>