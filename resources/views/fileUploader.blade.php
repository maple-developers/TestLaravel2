@include('layouts.newLayout')
@section('main_content')
    <div id="flHorizontalForm" class="col-lg-12 layout-spacing">
        <div class="statbox widget box box-shadow">
            <div class="widget-header">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                        <h4>Add Operator Prefix</h4>
                    </div>
                </div>
            </div>
            <div class="widget-content widget-content-area">
                @foreach ($errors->all() as $error)
                    <h1>{{ $error }}</h1>
                @endforeach
                <form action="" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row mb-2">
                        <label for="numbersFile" class="col-xl-4 col-sm-4 col-sm-4 col-form-label">Numbers File
                            <span style="color:red;">*</span></label>
                        <div class="col-xl-8 col-lg-8 col-sm-8">
                            <div class="custom-file mb-4">
                                <input type="file" class="custom-file-input" id="file" name="file" required>
                                <label class="custom-file-label" for="numbersFile">Choose file</label>
                            </div>
                        </div>
                        <button type="submit">Upload file</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
