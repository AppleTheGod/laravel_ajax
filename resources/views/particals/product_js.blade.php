<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
</script>
<script src="https://code.jquery.com/jquery-3.7.0.min.js"
    integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
<script>
    $(document).ready(function() {
        // alert();
        $(document).on('click', '.add_product', function(e) {
            e.preventDefault();
            let name_product = $('#name_product').val();
            let price_product = $('#price_product').val();
            // console.log(name + price);
            $.ajax({
                url: "{{ route('add.product') }}",
                method: 'post',
                data: {
                    name_product: name_product,
                    price_product: price_product
                },
                success: function(res) {
                    if(res.status=='success'){
                        $('#add').modal('hide');
                    }
                },
                error: function(err) {
                    let error = err.responseJSON;
                    $.each(error.errors, function(index, value) {
                        $('.errMsg').append('<span class="text-danger text-bold">'+value+'</span>'+'<br>')
                    })
                }
            })
        })
    })
</script>
