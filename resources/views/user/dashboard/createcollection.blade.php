@include('user/partials/header')
<div class="d-flex justify-content-center">
    <div class="col-md-6">
        @include('messages')
        <form action="/user/createcollection" method="post">
            @csrf
            <div class="form-group">
                <label>Collection Name</label>
                <input class="au-input au-input--full" type="text" name="collection_name">
            </div>
            <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit" style="background: black; color:white;">Create</button>
        </form>
        <!-- <form id="collectionform">
            @csrf
            <div class="form-group">
                <label>Insert/Paste The wallet address here</label>
                <input class="au-input au-input--full" type="text" id="wallet_address">
            </div>
            <div class="form-group">
                <label>Select The wallet name</label>
                <select id="wallet_name" class="form-control">
                    {{-- @foreach ($coins as $coin) --}}
                    {{-- <option value="{{ $coin->name; }}">{{ $coin->name; }}</option> --}}
    
                    {{-- @endforeach --}}
                </select>
            </div>
        
            <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit" style="background: black; color:white;" name="otpbtn">sign in</button>
        </form> -->
    </div>
</div>
<div>
    <div class="row">
    @forelse ($collections as $collection)
    <div class="col-lg-6">
        <div class="au-card m-b-30">
            <div class="au-card-inner">
                <div>
                    <b>{{$collection->collectionname}}</b>
                </div>
                <div>
                    <a href="/user/view/{{$collection->collectionid}}" class="btn btn-block btn-success">View Collections</a>
                </div>
            </div>
        </div>
    </div>
    

    @empty
        <div>No collections yet</div>
    @endforelse
</div>
</div>
@include('user/partials/footer')