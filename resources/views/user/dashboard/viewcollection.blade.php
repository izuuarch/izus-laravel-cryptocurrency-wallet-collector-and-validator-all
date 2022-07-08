@include('user/partials/header')
<div class="d-flex justify-content-center">
    <div class="col-md-6">
        @include('messages')
        <form id="collectionform">
            @csrf
            <div class="form-group">
                <label>Insert/Paste The wallet address here</label>
                <input class="au-input au-input--full" type="text" id="wallet_address">
            </div>
                <input type="hidden" id="collectionid" value="{{$collectionid;}}">
            <div class="form-group">
                <label>Select The wallet name</label>
                <select id="wallet_name" class="form-control">
                     @foreach ($coins as $coin) 
                     <option value="{{ $coin->name; }}">{{ $coin->name; }}</option> 
    
                     @endforeach 
                </select>
            </div>
        
            <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit" style="background: black; color:white;" name="otpbtn">sign in</button>
        </form>
    </div>
</div>

<div class="row">
    @forelse ($walletcollections as $walletcollection)
    <div class="col-lg-6">
        <div class="au-card m-b-30">
            <div class="au-card-inner">
          
                <div>
                    <div class="form-group">
                        <label for="">Wallet Name</label>
                        <input type="text" class="form-control" value="{{$walletcollection->walletname}}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Wallet Address</label>
                        <input type="text" class="form-control" value="{{$walletcollection->walletaddress}}" readonly>
                    </div>
                </div>
                <div>
                    <a href="/user/viewwallet/{{$walletcollection->walletid}}" class="btn btn-block btn-success">View wallet details</a>
                </div>
            </div>
        </div>
    </div>
    

    @empty
        <div>No collections yet</div>
    @endforelse
</div>
@include('user/partials/footer')