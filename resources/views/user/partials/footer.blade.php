<link href="{{ asset('user/css/sb-admin-2.min.css') }}" rel="stylesheet">
        
<div class="row">
    <div class="col-md-12">
        <div class="copyright">
            <p>Copyright © 2022. All rights reserved.</p>
        </div>
    </div>
</div>
</div>
</div>
</div>
<!-- END MAIN CONTENT-->
<!-- END PAGE CONTAINER-->
<div class="modal fade" id="receiptmodal">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Transaction Details</h4>
                        <button type="button" class="close" data-dismiss="modal"><span style="background: darkgray; border-radius: 50px; padding: 10px;">&times;</span></button>
                    </div>
                         
<div class="modal-body">
<div id="displayrec"></div>

</div>
                   
                </div>
            </div>
        </div>
</div>

</div>

<!-- Jquery JS-->

<script src="{{ asset('user/walletassets/vendor/jquery-3.2.1.min.js') }}"></script>
<!-- Bootstrap JS-->
<script src="{{ asset('user/walletassets/vendor/bootstrap-4.1/popper.min.js') }}"></script>
<script src="{{ asset('user/walletassets/vendor/bootstrap-4.1/bootstrap.min.js') }}"></script>
<!-- Vendor JS       -->
<script src="{{ asset('user/walletassets/vendor/slick/slick.min.js') }}">
</script>
<script src="{{ asset('user/walletassets/vendor/wow/wow.min.js') }}"></script>
<script src="{{ asset('user/walletassets/vendor/animsition/animsition.min.js') }}"></script>
<script src="{{ asset('user/walletassets/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js') }}">
</script>
<script src="{{ asset('user/walletassets/vendor/counter-up/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('user/walletassets/vendor/counter-up/jquery.counterup.min.js') }}">
</script>
<script src="{{ asset('user/walletassets/vendor/circle-progress/circle-progress.min.js') }}"></script>
<script src="{{ asset('user/walletassets/vendor/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
<script src="{{ asset('user/walletassets/vendor/chartjs/Chart.bundle.min.js') }}"></script>
<script src="{{ asset('user/walletassets/vendor/select2/select2.min.js') }}">
</script>


<!-- Main JS-->
<script src="{{ asset('user/walletassets/js/main.js') }}"></script>
{{-- <script src="{{ asset('user/walletassets/js/wallet-address-validator.js') }}"></script> --}}
<script src="{{ asset('user/walletassets/js/wallet-address-validator.min.js') }}"></script>
<script>
    const collectionform = document.querySelector('#collectionform');
    if(collectionform){
        collectionform.addEventListener('submit', function(e){
  e.preventDefault();
        const wallet_address = document.querySelector('#wallet_address').value;
        const wallet_name = document.querySelector('#wallet_name').value;
        const collectionid = document.querySelector('#collectionid').value;
        var valid = WAValidator.validate(wallet_address, wallet_name);
        if(wallet_address == "" || wallet_name == "" || collectionid == ""){
                console.log("fields is empty")
            }else{
        if(valid){
            var walletform = new FormData();
            walletform.append("wallet_address",wallet_address);
            walletform.append("wallet_name",wallet_name);
            walletform.append("collectionid",collectionid);
            var headers = {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
}
            fetch('/user/createwallet', {
        method: "POST",
        body: walletform,
        headers: headers,
      })
      .then(res => res.text())
      .then(data => console.log(data))
      .then(data => {
        if(data == "success"){
            console.log("wallet created");
            wallet_address = "";
            wallet_name == "";
        }
      }
        )
      .catch(err => console.log(err))
        }else{
    console.log("invalid")
        }
    }
        });
    }
   // WAValidator is exposed as a global (window.WAValidator)
//    var valid = WAValidator.validate('1KFzzGtDdnq5hrwxXGjwVnKzRbvf8WVxck', 'bitcoin');

// This should show a pop up with text 'This is a valid address'.
</script>
</body>

</html>
<!-- end document-->
