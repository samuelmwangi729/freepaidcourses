@csrf
<div class="row">
    <div class="col-sm-6">
        <div class="form-group">
            <label for="Title" class="label-control">
                Crack Title
            </label>
            <input type="text" class="form-control" name="Title" placeholder="Enter the Title" value="{{ $Crack->CrackTitle ?? '' }}">
        </div>
        {{-- End form-group --}}
    </div>
    {{-- End col-sm-6 --}}
    <div class="col-sm-6">
        <div class="form-group">
            <label for="Title" class="label-control">
                Intro Text
            </label>
            <input type="text" class="form-control" name="IntroText" placeholder="Enter the Introduction Text" value="{{ $Crack->IntroText ?? '' }}">
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
                <option label="--Select Crack Category"></option>
                @foreach ($Categories  as $category)
                    <option value="{{ $category->Name}}" @if($crack) @if($Crack->Category==$category->Name) selected @endif @endif>{{ $category->Name }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label for="Featured Image" class="label-control">
                Image Banner
            </label>
            <input type="file" name="FeaturedImage" id="" class="form-control">
        </div>
    </div>
    <div class="col-sm-12">
        <textarea id="summernote" class="form-control" name="Description">{{ $Crack->Description ?? '' }}</textarea>
    </div>
</div>
